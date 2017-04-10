<?php
include('header.php');
include('controllers/product_details.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild | Shop</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="css/furniture.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<div class="row">
    <div class="col-md-12 text-center">
        <!--<div class="col-xs-6 col-md-6">-->
            <div class="col-sm-6" id="slider-thumbs">
            <img class="mainpic" src="<?php echo $img?>" alt="<?php echo $name . " by MKR Kild ";?>">
        </div>
        <div class="col-xs-6 col-md-6 text-left" style="margin-left: -50px;">
            <div class="col-md-11">
                <h2><?php
                    echo $name;
                    ?></h2>
                <br>
                <text>
                    <?php
                        echo $price . " €";
                        ?></text>
                <br>
                <br>
                <text><?php echo $details?></text>
                <br>
                <br>
                <text><?php echo $quantity . " items left in stock"; ?></text>
                <br>
                <br>
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon glyphicon-shopping-cart"></span> Add to cart
                </button>
            </div>
            <div class="col-md-1">
                <a href="furniture.php">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<br>
<div class="row" style="padding-left:50px;">
    <div class="col-md-6 col-md-offset-1 text-center">
        <div class="col-xs-6 col-md-2">
            <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=259%C3%97375&w=100&h=60" alt="bla">
        </div>
        <div class="col-xs-6 col-md-2">
            <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=259%C3%97375&w=100&h=60" alt="bla">
        </div>
        <div class="col-xs-6 col-md-2">
            <img src="https://placeholdit.imgix.net/~text?txtsize=12&txt=259%C3%97375&w=100&h=60" alt="bla">
        </div>
    </div>
</div>
<!-- /.row -->
<hr class="navsep"/>
<br>
<!-- /.row -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


</body>

</html>
<?php
include('footer.php');
?>