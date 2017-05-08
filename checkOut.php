<?php
/* Get header, navigation pane/bar, database_objects file */
require_once("header.php"); // also checks if session was started
/* If session 'items' is not set, redirect back to index.php */
if (!isset($_SESSION['cart_item']) || count($_SESSION['cart_item']) == 0) {
    header("location: index.php");
}


/* Display aded products in the shopping cart */
?>

<link href="./css/furniture.css" rel="stylesheet">

<body>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div id="shopping-cart" class="col-md-8">
                <h2>My Shopping Cart</h2>
                <table cellpadding="10" cellspacing="1" class="table table-responsive">
                    <!--Start table that will holds all data in the shopping cart -->
                    <tbody>
                    <tr>
                        <th><strong>Name</strong></th>
                        <th><strong>Quantity</strong></th>
                        <th><strong>Price</strong></th>
                        <th></th>
                    </tr>
                    <?php
                    $total = 0; // define total so the script won't throw silly error of a type 'Undefined variable: total in....'
                    /* Loops through item session array and display data */
                    foreach ($_SESSION["cart_item"] as $item) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $item["product_name"]; ?></td>
                            <td><?php echo $item["quantity"]; ?></td>
                            <td><?php echo "€" . $item["product_price"] * $item["quantity"]; ?></td>
                        </tr>

                        <?php
                        /* Calculate Total */
                        $total += ($item["product_price"] * $item["quantity"]);

                    }  // Close foreach loop
                    ?>
                    <tr>
                        <td colspan="3" align=right><strong>Total:</strong> <?php echo "€" . $total; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='itemInCartDisplay' colspan="3" align="right">
                            <div>
                                <a href='payment.php' title="Go to Payment">
                                    <button type="button" class="btn checkout_btn">Go To Payment</button>
                                </a>
                                <a href='index.php' title="Continue Shopping">
                                    <button type="button" class="btn continue_shopping_btn">Continue Shopping</button>
                                </a>

                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    /* Get header */
    require_once("footer.php");
    ?>

