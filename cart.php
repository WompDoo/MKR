<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild | Shopping Cart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
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

<nav class="navbar navbar-inverse navbar-fixed-top navfix" role="navigation">
    <div class="container navfix">

        <div id="mobileNav">
            <div class="wrapper">
                <nav class="mobileNav">
                    <ul class="nav text-center">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="furniture.php">Furniture</a>
                        </li>
                        <li>
                            <a href="sketchbooks.php">Sketchbooks</a>
                        </li>
                        <li>
                            <a href="woodturning.php">Woodturning</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                        <li>
                            <a class="active" href="#">Shopping Cart</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobileMenuLink" class="text-center">
            <a>Menu</a>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="#"><img src="img/logo.png" class="navbar-brand"/></a>
            <div class="text-right" style="padding-right: 100px">
                <div class="shopping-cart">
                    <a href="cart.html" style="position: relative">
                        <img src="img/shoppingcart.png" width="35" height="35"/>
                    </a>
                </div>

            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a class="active" href="#">Furniture</a>
                </li>
                <li>
                    <a href="furniture.php">Sketchbooks</a>
                </li>
                <li>
                    <a href="furniture.php">Woodturning</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="navsep"/>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="row">
<div class="col-md-4 text-center" style="padding-left: 90px;">
<h4>Shopping Cart</h4>
</div>    
</div>

<br>
<br>
<div class="row">
<div class="col-md-4 text-center">
<p >Item</p>
</div>
<div class="col-md-4 text-right">
<p>Quantity</p>
</div>  
<div class="col-md-2 text-center">
<p >Price</p>
</div>      
</div>
<hr class="navsep"/>
<div class="row">
<div class="col-md-2 col-md-offset-1 text-right">
 <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=100&h=80" alt="bla">
</div>
<div class="col-md-2 text-left">
<br>
 <p>Product name</p>
</div>
<div class="col-md-2 col-md-offset-1 text-right">
<br>
<p>1</p>
</div>  
<div class="col-md-2 text-center">
<br>
<p >65$</p>
</div>      
</div>

<hr class="navsep"/>

<div class="row">
    <div class="col-md-6 col-md-offset-6 text-right">
        <div class="col-md-6 text-center">
        <p>Subtotal</p>
        </div>
        <div class="col-md-6 text-left">
        <p>65$</p>
        </div>
        <hr class="navsep"/>
    </div>
</div>

<div class="row">
            <div class="form-group col-md-10 text-right">
                <input id="submit" name="submit" type="submit" value="Checkout" class="btn btn-default">
            </div>
</div>




<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script src="js/carousel.js"></script>


</body>

</html>
