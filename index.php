<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div id="mobileNav">
            <div class="wrapper">
                <nav class="mobileNav">
                    <ul class="nav text-center">
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                        <li>
                            <a href="furniture.php">Furniture</a>
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
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobileMenuLink" class="text-center">
            <a>Menu</a>
        </div>

        <div class="navbar-header">
            <a href="#"><img src="./img/logo.png" class="navbar-brand"/></a>
            <div class="nav languages">
                <ul class="nav navbar-lang">
                    <li>
                        <a href="#">EST</a>
                    </li>
                    <li>
                        <a class="active" href="#">EN</a>
                    </li>
                    <li>
                        <a href="#">RUS</a>
                    </li>
                </ul>
            </div>
            <div class="shopping-cart">
                <div class="layer"><a href="cart.php" style="position: relative">
                    <img src="./img/shoppingcart.png" width="35" height="35"/>
                </a>
                </div>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav text-center">
                <li>
                    <a class="active" href="#">Home</a>
                </li>
                <li>
                    <a href="furniture.php">Furniture</a>
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


<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/moobel.JPG');"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 1</h2>-->
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/markmik.JPG');"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 1</h2>-->
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url('img/kurikas.JPG');"></div>
            <div class="carousel-caption">
                <!--<h2>Caption 1</h2>-->
            </div>
        </div>

    </div>

    <!-- Controls
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>-->

</header>

<footer class="footer">
    <div class="row">
        <div class="group-social col-md-4 col-md-offset-5 text-center">
            <div class="col-xs-6 col-md-2">
                <a href="https://www.facebook.com/MKRKILD/">
                    <img src="./img/facebook.png" width="30" height="30"/>
                </a>
            </div>
            <div class="socialborder col-xs-6 col-md-2">
                <a href="#">
                    <img src="./img/instagram.png" width="28" height="28"/>
                </a>
            </div>
            <div class="socialborder col-xs-6 col-md-2">
                <a href="#">
                    <img src="./img/google.png" width="33" height="25"/>
                </a>
            </div>
        </div>
    </div>
</footer>


<!-- Page Content
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1>Full Slider by Start Bootstrap</h1>
            <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the <code>full-slider.css</code>file.</p>
        </div>
    </div>

    <hr>-->

<!-- Footer
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </div>-->
<!-- /.row
</footer>

</div>-->
<!-- /.container -->

<!-- jQuery -->

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script src="js/carousel.js"></script>


</body>

</html>