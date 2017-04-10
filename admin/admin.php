<?php
include('./../controllers/inventory.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild</title>

    <!-- Bootstrap Core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./../css/admin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top topbar">
    <div class="container-fluid">

        <div class="navbar-header">

            <a href="index.php" class="navbar-brand">
                <span class="visible-xs">MKR</span>
                <span class="hidden-xs">MKR Kild</span>
            </a>

            <p class="navbar-text">
                <a href="#" class="sidebar-toggle">
                    <i class="glyphicon glyphicon-bars"></i>
                </a>
            </p>

        </div>

        <div class="navbar-collapse collapse" id="navbar-collapse-main">

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <button class="navbar-btn" data-toggle="dropdown">
                        <img src="http://lorempixel.com/30/30/people" class="img-circle">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>

<article class="wrapper">

    <aside class="sidebar">
        <ul class="sidebar-nav">
            <li class="active"><a href="#dashboard" data-toggle="tab"><i class="glyphicon glyphicon-dashboard"></i>
                    <span>Dashboard</span></a></li>
        </ul>
    </aside>

    <section class="main">

        <section class="tab-content">

            <section class="tab-pane active fade in content" id="dashboard">

                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <div class="panel-heading">
                                        <h4>
                                            <?php
                                            echo(fetchCategory());
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col col-xs-6 text-right">
                                    <button type="button" class="btn btn-sm btn-primary btn-create">Create New</button>
                                </div>
                            </div>
                            <div class="panel panel-default panel-table">
                                <div id="furniture-dad" class="panel-body">
                                    <table id="furniture" class="table table-striped table-bordered table-list">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Details</th>
                                            <th>Price</th>
                                            <th>Quantity/stock</th>
                                            <th class="text-center"><em class="glyphicon glyphicon-pencil"></em></th>
                                            <th class="text-center"><em class="glyphicon glyphicon-cog"></em></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        echo(fetchFurniture());
                                        ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!--<div class="col-xs-12 col-sm-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Something
                        </div>
                        <div class="panel-body">
                            The sidebar is naturally responsive according to screen width. You can toggle it using the menu button in the topbar. Test it out by increasing/decreasing your screen width and watch it respond.
                        </div>
                    </div>

                    <!--<div class="panel panel-default">
                        <div class="panel-heading">
                           MKR Kild
                        </div>
                        <div class="panel-body">
                            Designed by <a href="http://www.kaitanilabs.com" target="_blank">Kaitani Labs</a>
                        </div>
                    </div>
                </div>-->

                </div>

            </section>

        </section>


    </section>

</article>

<script src="./../js/jquery.js"></script>
<script src="./../js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./../js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script src="./../js/carousel.js"></script>

</body>
