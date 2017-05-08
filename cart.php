<?php
require_once('./header.php');
?>

    <title>MKR Kild</title>
    <link href="./css/furniture.css" rel="stylesheet">


    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <div class="txt-heading"><h2>Shopping Cart</h2></div>
                <div id="shopping-cart" class="col-md-8">
                    <div id="shopping-cart-refresh">
                        <?php
                        if (isset($_SESSION["cart_item"])) {
                            $item_total = 0;
                            ?>
                            <table id="inCart" cellpadding="10" cellspacing="1" class="table table-responsive">
                                <a id="btnEmpty" href="cart.php?action=empty">Empty
                                    Cart</a>
                                <tbody>
                                <tr>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Quantity</strong></th>
                                    <th><strong>Price</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                                <?php
                                foreach ($_SESSION["cart_item"] as $item) {
                                    ?>
                                    <tr>
                                        <td>
                                            <strong><?php echo $item["product_name"]; ?></strong></td>
                                        <td class="itemQty">
                                            <a href='#' class='subtruct_itm_qty quantity_change'
                                               product_code="<?php echo $item["product_code"]; ?>">-</a>
                                            <?php echo $item["quantity"]; ?>
                                            <a href='#' class='add_itm_qty quantity_change'
                                               product_code="<?php echo $item["product_code"]; ?>">+</a>
                                        </td>
                                        <td><?php echo "€" . $item["product_price"] * $item["quantity"]; ?></td>
                                        <td><a
                                                    href="cart.php?action=remove&product_code=<?php echo $item["product_code"]; ?>"
                                                    class="btnRemoveAction">Remove Item</a></td>
                                    </tr>
                                    <?php
                                    $item_total += ($item["product_price"] * $item["quantity"]);
                                }
                                ?>

                                <tr>
                                    <td colspan="5" align=right><strong>Total:</strong> <?php echo "€" . $item_total; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5" align="right">
                                        <a href='checkOut.php' title="Review Cart and Check Out">
                                            <button type="button" class="btn checkoutButton">Checkout</button>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="footsep"/>
    <br>
    <!-- /.row -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    </body>

<?php
include('footer.php');
?>