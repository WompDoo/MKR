<?php

function fetchFurniture()
{
    include('./config.php');

    $sql = "SELECT image_path, product.product_id, product.product_name, product.product_price, product.product_category FROM productimage
  JOIN product
    ON productimage.product_id = product.product_id
ORDER BY product.product_id";

// Write mysql query to fetch $sql

    $result = $db->query($sql);

    while ($row = $result->fetch_array()) {
        $rows[] = $row;
    }

    foreach ($rows as $row) {
        echo "<div class=\"col-6 col-md-4\">
            <a href=\"product.php\" class=\"img-responsive\">
               <img class='productimg' src='$row[0]' alt='Wooden products by MKR Kild' />
                <figcaption>$row[2] <br>
                 $row[3] € </figcaption>
            </a>
        </div>";
    }


    /*$row = $result->fetch_array(MYSQLI_NUM);
    printf ("%s (%s)\n", $row[0], $row[1]);*/
    $result->close();
}
//$obj = mysqli_fetch_all($result, MYSQLI_ASSOC);

//$image = $obj;

//echo "<img class='productimg' src='$row[1]' alt='Dark Table by MKR Kild' />";
//print_r($obj);