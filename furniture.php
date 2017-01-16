<?php
include('header.php');
include('controllers/furniture.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild | Furniture</title>

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

<!-- Page Features -->

<div id="productModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="productModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="productModalLabel">Modal Title</h4>
            </div>
            <div class="modal-body">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-8" id="carousel-bounding-box">
                            <div class="carousel slide" id="modalCarousel" data-interval="false">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300&text=one"></div>

                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300&text=two"></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300&text=three"></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300&text=four"></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300&text=five"></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/770x300&text=six"></div>
                                </div><!-- Carousel nav -->
                                <a class="left carousel-control" href="#modalCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#modalCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-4" id="carousel-text">
                            <h2>Item Description</h2>
                            <p>Here will be the description of item</p>
                        </div>
                    </div>
                </div>
            </div><!--/Slider-->

            <div class="row hidden-xs" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-0"><img
                                    src="http://placehold.it/170x100&text=one"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-1"><img
                                    src="http://placehold.it/170x100&text=two"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-5"><img
                                    src="http://placehold.it/170x100&text=six"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-12 text-center">

        <?php
        fetchFurniture();
        ?>
    </div>
</div>
<br>
<br>

<!-- /.row -->
<br>
<!-- /.row -->
<hr class="footsep">

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/modalcarousel.js"></script>
<script src="js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<?php include("footer.php"); ?>

</body>

</html>
