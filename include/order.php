<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("connection.php");
include_once("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST["items"]))) {
    // Get the selected items from the POST data
    $selectedItems = $_POST["items"];

    $orderID = random_number(10);
    $customerID = random_number(15);
    //insert customer details
    insertCustomerDetails($con, $orderID, $customerID);

    foreach($selectedItems as $items){
        $itemID = getItemId($con, 'foods', $items); 
        $itemName = getItemName($con, 'foods', $items);
        if($itemName !== null && $itemID !== null){
            $orderItemsID = random_number(20); 
            insertOrderItem($con, $orderItemsID, $orderID, $itemID, $itemName);
        } 
    }
    $con->close();
    echo "<script>alert('Items ordered!');</script>";
    exit();
} else {
    // Handle the case where no items are selected
    echo "<script>console.log('Order at least one item');</script>";
}

?>