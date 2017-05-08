<?php

require_once './config.php';
require_once './controllers/dbController.php';
class ModifyProducts
{
    function addProduct($product_name, $product_category, $product_details, $product_price, $qty_stock, $product_code)
    {

        $product = \R::dispense('products');
        $product['product_name'] = $product_name;
        $product['product_category'] = $product_category;
        $product['product_details'] = $product_details;
        $product['product_price'] = $product_price;
        $product['qty_stock'] = $qty_stock;
        $product['product_code'] = $product_code;

        return \R::store($product);

    }

    function editProduct($product_id, $product_price)
    {
        return \R::exec('UPDATE product SET product_price = ? WHERE product_id = ?', [$product_price, $product_id]);
    }

    function addImage($product_id, $image_name, $image_path)
    {
        $productimage = \R::dispense('productimages');
        $productimage['product_id'] = $product_id;
        $productimage['image_name'] = $image_name;
        $productimage['image_path'] = $image_path;

        return \R::store($productimage);

    }
}