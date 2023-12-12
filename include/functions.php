<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
function random_number($length) //value of length is 11
{
    $text = "";
    if ($length <= 0) {
        $length = 1;
        //prevents the id from going below 5 digits 
    }
    $len = rand(1, $length);
    //randomizes the length of the ID between 4 and 20 digits long
    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
        //concactinates the randomized numbers that is selected
    }
    return $text;
}
function insertCustomerDetails($con, $orderID, $customerID)
{
    $sql = "INSERT INTO orders (orderID, customerID) VALUES ('$orderID', '$customerID')";
    if ($con->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
function getItemId($con, $table, $itemName)
{
    // Function to get the ID of an item from the specified table
    $sql = "SELECT id FROM $table WHERE name = '$itemName'";
    $result = $con->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();

        // Free the result set
        $result->free_result();

        //return the fetched id
        return $row['id'];
    } else {
        echo "Query failed: " . $con->error;
    }
}
function getItemName($con, $table, $itemName)
{
    // Function to get the ID of an item from the specified table
    $sql = "SELECT name FROM $table WHERE name = '$itemName'";
    $result = $con->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();

        // Free the result set
        $result->free_result();

        //return the fetched id
        return $row['name'];
    } else {
        echo "Query failed: " . $con->error;
    }
}

function insertOrderItem($con, $orderItemsID, $OrderID, $itemID, $itemName)
{
    $sql = "INSERT INTO orderItems (orderItemID, OrderID, ItemID, itemName) VALUES ('$orderItemsID','$OrderID','$itemID','$itemName')";

    if ($con->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
//function insertCoffeeItem($con, $orderID, $itemID)
//{
//    // Function to insert an item into the orders database
//    $sql = "INSERT INTO orders (orderID, coffeeID) VALUES ('$orderID', '$itemID')";
//    if ($con->query($sql) !== TRUE) {
//        echo "Error: " . $sql . "<br>" . $con->error;
//    }
//}
//function insertDessertItem($con, $orderID, $itemID)
//{
//    // Function to insert an item into the orders database
//    $sql = "INSERT INTO orders (orderID, dessertID) VALUES ('$orderID', '$itemID')";
//    if ($con->query($sql) !== TRUE) {
//        echo "Error: " . $sql . "<br>" . $con->error;
//    }
//}
//function insertViandItem($con, $orderID, $itemID)
//{
//    // Function to insert an item into the orders database
//    $sql = "INSERT INTO orders (orderID, viandID) VALUES ('$orderID', '$itemID')";
//    if ($con->query($sql) !== TRUE) {
//        echo "Error: " . $sql . "<br>" . $con->error;
//    }
//}