<?php
include_once(__DIR__ . './controllers/dbController.php');
include_once(__DIR__ . './controllers/cart.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="./css/animate.min.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/main.css" rel="stylesheet">
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
<!-- Navigation -->
<nav id="navbarRegular" class="navbar navbar-inverse navbar-fixed-top navfix" role="navigation">
    <div class="container navfix">
        <div id="mobileNav">
            <div class="wrapper">
                <nav class="mobileNav">
                    <ul class="nav text-center">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <?php
                        /*  Display Menus from MySQL Database
                        *   Change
                        **/
                        /* FETCH ITEMS ACCORDING TO CATEGORIES CHOSEN BY USER */
                        if (isset($_GET['menu'])) {
                            $menuCategory = $_GET['menu'];
                            /* If you want to display all items click on ShareMyWeb Logo */

                            $items = $database->query("SELECT * FROM product WHERE product_category='{$menuCategory}'");
                        }

                        foreach ($database->findMenuItem() as $menuItem) {
                            echo "<li class='active'>
                            <a id='{$menuItem['product_category']}' href={$menuItem['product_category']}.php>{$menuItem['product_category']}</a>
                                    </li>";
                        }
                        ?>

                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                        <ul class="nav lang">
                            <li>
                                <a href="#">ENG</a>
                            </li>
                            <li>
                                <a class="lang-sep" href="#">EST</a>
                            </li>
                            <li>
                                <a class="lang-sep" href="#">RUS</a>
                            </li>
                        </ul>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="mobileMenuLink" class="text-center">
            <a>Menu</a>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="./"><img src="./img/logo.png" class="navbar-brand"/></a>
            <div class="text-right hidden-xs" style="padding-right: 100px">
                <!--<div class="shopping-cart">-->
                <div class="nav languages">
                    <ul class="nav navbar-lang">
                        <li>
                            <a href="#">EST</a>
                        </li>
                        <li>
                            <a class="active" href="#">ENG</a>
                        </li>
                        <li>
                            <a href="#">RUS</a>
                        </li>
                    </ul>
                </div>
                <a class="<?php
                if (count($_SESSION['cart_item']) > 0) {
                    echo "cartIcon";
                } else {
                    echo "cartIcon hidden";
                }
                ?>" href="cart.php" style="position: relative">
                    <img src="./img/shoppingcart.png" width="35" height="35"/>

                    <?php ?>
                    <span id="items_in_shopping_cart" data-qty="<?php
                    if (isset($_SESSION["cart_item"])) {
                        echo count($_SESSION["cart_item"]);
                    } else {
                        echo 0;
                    } ?>"><?php
                        if (isset($_SESSION["cart_item"])) {
                            echo count($_SESSION["cart_item"]);
                        } ?>
                    </span>
                </a>
            </div>

        </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=" collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav text-center">
            <li>
                <a href="./">Home</a>
            </li>
            <?php

            /* FETCH ITEMS ACCORDING TO CATEGORIES */
            if (isset($_GET['menu'])) {
                $menuCategory = $_GET['menu'];

                $items = $database->query("SELECT * FROM product WHERE product_category='{$menuCategory}'");
            }

            foreach ($database->findMenuItem() as $menuItem) {
                echo "<li>
                            <a id='{$menuItem['product_category']}' href={$menuItem['product_category']}.php>{$menuItem['product_category']}</a>
                                    </li>";
            }
            ?>
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
</nav>