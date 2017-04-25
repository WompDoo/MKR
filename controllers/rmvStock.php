<?php
require '../config.php';
{
    global $db;
    $id = $_POST['id'];
    $sql = "UPDATE product SET qty_stock = qty_stock - 1 WHERE product_id = $id AND qty_stock > 0";

// Write mysql query to fetch $sql
    $result = $db->query($sql);
}