<?php
require '../config.php';
{
    global $db;
    $id = $_POST['id'];
    $sql = "DELETE FROM product WHERE product_id = $id";
    $sql = "INSERT INTO product (product_name, product_category, product_details, product_price, qty_stock)
VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway')";
// Write mysql query to fetch $sql
    $result = $db->query($sql);
    echo "1";
}