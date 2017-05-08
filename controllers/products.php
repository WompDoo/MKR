<?php

require_once './vendor/autoload.php';
use Propel\Runtime\Propel;
use propel\propel\Map\ProductTableMap;

//include_once(__DIR__.'./../config.php');

function fetchProducts()
{
    //global $db;

    $URL = $_SERVER['PHP_SELF'];
    $cat = basename($URL, ".php");
    $con = Propel::getReadConnection(\Map\ProductTableMap::DATABASE_NAME);
    //$q = new ProductQuery();


    $sql = "SELECT image_path, product.product_id, product.product_name, product.product_price, product.product_category, product.qty_stock FROM productimage
 JOIN product
    ON product.product_id = productimage.product_id
    WHERE product.product_category='$cat' AND product.qty_stock > 0
GROUP BY productimage.product_id
";

// Write mysql query to fetch $sql
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {

        $rows[] = $row;
    }

// Create BS grid view for the results
    foreach ($rows as $row) {
        $id = $row['product_id'];

        echo "<div class=\"col-xs-6 col-md-4\">
               <a href='./product.php?id=$id'>
               <img class='productimg' src='$row[image_path]' alt='Wooden products by MKR Kild' />
                <figcaption>$row[product_name] <br>
                 $row[product_price]€ </figcaption>
            </a>
        </div>";
    }

    $result->close();
}