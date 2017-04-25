<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include_once(__DIR__.'./controllers/dbController.php');
?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top navfix" role="navigation">
    <div class="container navfix">
        <div id="mobileNav">
            <div class="wrapper">
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
                <nav class="mobileNav">
                    <ul class="nav text-center">
                        <li>
                            <a href="/">Home</a>
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

                        foreach($database->findMenuItem() as $menuItem){
                            echo "<li class='active'>
                            <a id='{$menuItem['product_category']}' href={$menuItem['product_category']}.php>{$menuItem['product_category']}</a>
                                    </li>";
                        }
                        ?>

                        <li>
                            <a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a>
                        </li>
                        <li>
                            <a class="<?= ($activePage == 'cart') ? 'active':''; ?>"  href="cart.php">Shopping Cart</a>
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
            <a href="index.php"><img src="./img/logo.png" class="navbar-brand"/></a>
            <div class="text-right hidden-xs" style="padding-right: 100px">
                <!--<div class="shopping-cart">-->
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
                    <!--<a href="cart.php" style="position: relative">
                        <img src="./img/shoppingcart.png" width="35" height="35"/>
                    </a>
                </div>-->

            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav text-center">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <?php

                /* FETCH ITEMS ACCORDING TO CATEGORIES */
                if (isset($_GET['menu'])) {
                    $menuCategory = $_GET['menu'];

                    $items = $database->query("SELECT * FROM product WHERE product_category='{$menuCategory}'");
                }

                foreach($database->findMenuItem() as $menuItem){
                    echo "<li>
                            <a id='{$menuItem['product_category']}' href={$menuItem['product_category']}.php>{$menuItem['product_category']}</a>
                                    </li>";
                }
                ?>
                <li>
                    <a class="<?= ($activePage == 'about') ? 'active':''; ?>" href="about.php">About</a>
                </li>
                <li>
                    <a class="<?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="navsep"/>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>