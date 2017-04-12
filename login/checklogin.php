<?php
session_start();
require ('../config.php');

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];



// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($db, $_POST['myusername']);
$mypassword = mysqli_real_escape_string($db, $_POST['mypassword']);
    $sql="SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($db, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['myusername']=$myusername;
    $_SESSION['mypassword']=$mypassword;
    header("location:login_success.php");
}
else {
    echo "Vale kasutajatunnus või parool!";
}