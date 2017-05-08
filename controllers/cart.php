<?php
session_start();

require_once("dbController.php");
$db_handle = new DBController();


if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE product_code='" . $_GET["product_code"] . "'");
                $itemArray = array($productByCode[0]["product_code"] => array('product_name' => $productByCode[0]["product_name"], 'product_code' => $productByCode[0]["product_code"], 'quantity' => $_POST["quantity"], 'product_price' => $productByCode[0]["product_price"]));

                if (!empty($_SESSION["cart_item"])) {
                    if (in_array($productByCode[0]["product_code"], array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByCode[0]["product_code"] == $k) {
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;

        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["product_code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;

        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}


/* Add item quantity */
if (isset($_GET["add_itm_qty"]) && isset($_SESSION["cart_item"])) {
    $_SESSION['cart_item'][$_GET["add_itm_qty"]]["quantity"]++;

//unset($_GET["add_itm_qty"]);
    json_encode(array('items_in_cart' => count($_SESSION['cart_item'])));
}


/* Subtract item quantity - deduct qty ONLY if quantity is NOT smaller than 0  */
if (isset($_GET["subtruct_itm_qty"]) && isset($_SESSION["cart_item"])) {
    if (isset($_SESSION['cart_item'][$_GET["subtruct_itm_qty"]])) {
        if ($_SESSION['cart_item'][$_GET["subtruct_itm_qty"]]["quantity"] >= 2) {
            $_SESSION['cart_item'][$_GET["subtruct_itm_qty"]]["quantity"] -= 1;
        } else {
            $_SESSION['items'][$_GET["subtruct_itm_qty"]]["quantity"] = 1;
        }
    }
    //unset($_GET["subtruct_itm_qty"]);
    /* Get item quantity and output it in json format */
    exit(json_encode((array('quantity' => $_SESSION["cart_item"]))));
}

