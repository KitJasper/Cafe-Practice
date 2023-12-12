<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("include/connection.php");
include("include/order.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graph</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="title fs-1 text-center">Le Cafe</h1>
            <p>Welcome to <b>Le Cafe</b>, where every cup tells a story and every bite is a journey of flavors. Nestled
                in the
                heart of Cebu, our café is more than just a place to grab a coffee – it's a haven for those
                who appreciate the artistry of a perfectly brewed cup and the joy of savoring delectable bites in a
                cozy,
                inviting atmosphere. At <b>Le Cafe</b>, we believe in the power of good company, great conversations,
                and, of
                course, exceptional food and beverages. Step into our world, where the aroma of freshly ground coffee
                beans
                mingles with the tantalizing scent of baked goods, creating an experience that transcends the ordinary.
                Whether you're seeking a quiet corner to work, catching up with friends, or simply treating yourself to
                a
                moment of indulgence, we invite you to join us on a culinary adventure that's sure to delight your
                senses.
            </p>
        </div>
        <h2 class="title fs-3">Menu</h2>

        <div class="wrapper">
            <form method="POST" action="include/order.php">
                <div class="grid d-flex">
                    <fieldset>
                        <div class="column d-flex">
                            <div class="row flex-column" id="coffee">
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Espresso"
                                        id="Espresso">
                                    <label class="form-check-label" for="Espresso">
                                        Espresso
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Americano"
                                        id="Americano">
                                    <label class="form-check-label" for="Americano">
                                        Americano
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Latte"
                                        id="Latte">
                                    <label class="form-check-label" for="Latte">
                                        Latte
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Cappuccino"
                                        id="Cappuccino">
                                    <label class="form-check-label" for="Cappuccino">
                                        Cappuccino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Mocha"
                                        id="Mocha">
                                    <label class="form-check-label" for="Mocha">
                                        Mocha
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Matcha"
                                        id="Matcha">
                                    <label class="form-check-label" for="Matcha">
                                        Matcha
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="button" onclick="addItem()">Add to Order</button>
                    </fieldset>
                    <fieldset>
                        <div class="column d-flex">
                            <div class="row flex-column" id="dessert">
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Cheesecake"
                                        id="Cheesecake">
                                    <label class="form-check-label" for="Cheesecake">
                                        Cheesecake
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox"
                                        value="Chocolate Cake" id="Chocolate Cake">
                                    <label class="form-check-label" for="Chocolate Cake">
                                        Chocolate Cake
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Cupcake"
                                        id="Cupcake">
                                    <label class="form-check-label" for="Cupcake">
                                        Cupcake
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Cinnamon roll"
                                        id="Cinnamon roll">
                                    <label class="form-check-label" for="Cinnamon roll">
                                        Cinnamon Roll
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Milkshake"
                                        id="Milkshake">
                                    <label class="form-check-label" for="Milkshake">
                                        Milkshake
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Halo-halo"
                                        id="Halo-halo">
                                    <label class="form-check-label" for="Halo-halo">
                                        Halo-halo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="button" onclick="addItem()">Add to Order</button>
                    </fieldset>
                    <fieldset>
                        <div class="column d-flex">
                            <div class="row flex-column" id="viand">
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Waffles"
                                        id="Waffles">
                                    <label class="form-check-label" for="Waffles">
                                        Waffles
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Pancakes"
                                        id="Pancakes">
                                    <label class="form-check-label" for="Pancakes">
                                        Pancakes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Cheesecake"
                                        id="Cheesecake">
                                    <label class="form-check-label" for="Cheesecake">
                                        Cheesecake
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Cheese Toast"
                                        id="Cheese Toast">
                                    <label class="form-check-label" for="Cheese Toast">
                                        Cheese Toast
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox" value="Burger"
                                        id="Burger">
                                    <label class="form-check-label" for="Burger">
                                        Burger
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" name="items[]" type="checkbox"
                                        value="Vegetable Salad" id="Vegetable Salad">
                                    <label class="form-check-label" for="Vegetable Salad">
                                        Vegetable Salad
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="button" onclick="addItem()">Add to Order</button>
                    </fieldset>
                </div>

                <div id="notification" class="text-center"></div>
                <button class="action submit-btn" type="submit">Submit Order</button>
                <div>
                    <button class="action modal-btn" type="button" data-bs-toggle="modal" data-bs-target="#viewOrder"
                        data-bs-whatever="@mdo">View
                        Orders</button>
                    <button class="action view-btn">View Cafe Data</button>
                </div>
            </form>
        </div>

    </div>
    </div>
    <div class="modal fade" id="viewOrder" tabindex="-1" aria-labelledby="viewOrder">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Orders</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <ul id="addedItems">
                        </ul>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Order</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<script>alert('{$_SESSION['message']}');</script>";
        unset($_SESSION['message']);
    } ?>
</body>

</html>