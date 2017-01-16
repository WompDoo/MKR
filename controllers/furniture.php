<?php

function fetchFurniture()
{
    include('./config.php');

    $sql = "SELECT image_path, product.product_id, product.product_name, product.product_price, product.product_category FROM productimage
  INNER JOIN product
    ON product.product_id = productimage.product_id
GROUP BY productimage.product_id;
";

// Write mysql query to fetch $sql

    $result = $db->query($sql);

    while ($row = $result->fetch_assoc()) {

        $rows[] = $row;
    }

// Create BS grid view for the results

    foreach ($rows as $row) {
        echo "<div class=\"col-6 col-md-4\">
            <a href=\"#modalCarousel\" class=\"img-responsive\" data-toggle=\"modal\" data-target=\"#productModal\">
               <img class='productimg' src='$row[image_path]' alt='Wooden products by MKR Kild' />
                <figcaption>$row[product_name] <br>
                 $row[product_price] € </figcaption>
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