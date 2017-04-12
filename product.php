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
        <div class="col-xs-12 col-md-6" id="productSlider">
            <!-- Top part of the slider -->
            <div class="col-sm-8 col-md-11 col-md-offset-1" id="carousel-bounding-box">
                <div class="carousel slide" id="picCarousel" data-interval="false">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <?php echo createCarousel(); ?>
                    </div><!-- Carousel nav -->
                    <a class="left carousel-control" href="#picCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#picCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-6">
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
                <text><?php echo $details ?></text>
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
    <div class="row">
        <div class="hidden-xs col-md-6" id="slider-thumbs">
            <div class="col-md-11 col-md-offset-1">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <?php
                    createThumdnail();
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <br>


    <!-- /.row -->
    <hr class="navsep"/>
    <br>
    <!-- /.row -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    </body>

    </html>
<?php
include('footer.php');
?>