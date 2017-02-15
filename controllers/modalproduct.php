<?php

include('./config.php');

//$db = new PDO('mysql:host=localhost;dbname=MKR', DATABASE_USERNAME, DATABASE_PASSWORD);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'];
//$id = !empty($_GET['id']) ? [] : explode(',', $_GET['id']);

$qry = "SELECT product.product_id, product_name, product_details, product_price, productimage.image_path FROM product JOIN productimage ON product.product_id = productimage.product_id
WHERE product.product_id = '$id'";


$result = $db->query($qry);

if (mysqli_num_rows($result) > 0) { //Run Loop
    while($row = mysqli_fetch_assoc($result)) {
    $name = $row['product_name'];
    $price = $row['product_price'];
    $details = $row['product_details'];
    $img = $row['image_path'];
    //echo "Product:  $name ($productid) <br />";
} //close Loop
    } else {
    echo "0 results";
}


mysqli_free_result($result);
//$result = $db->query($qry);
/*
while ($row = $result->fetch_all()) {

    $rows[] = $row;

}
*/
/*while ($rr = $qryr->fetch_assoc()) {
    $img = $rr['product_id'];
    $q = 'select image_path, productimage.product_id from productimage JOIN product where productimage.product_id = product.product_id AND product.product_id=(?);';
    $qr = $db->query($q);
    $rows = array(); //Declare rows as arrays before loop
    while ($r = $qr->fetch_assoc()) { //Run Loop
        $rows[] = $r; //Load Data in arrays
    } //close Loop
} //close First Loop, Side Note, You don't need This Loop
*/