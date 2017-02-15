<?php
$product_id = !empty($_GET['id']) ? $_GET['id'] : 1;

//Retrieve product data from database
$product = ("SELECT *, product.product_name as name, stock.quantity as quantity,
                         FROM product
                         JOIN stock on stock.product_id = product.product_id
                         WHERE product_id=$product_id");

