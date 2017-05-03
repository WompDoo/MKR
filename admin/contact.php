<?php include("./../header.php");

if (!isset($_SESSION['myusername'])) {
    header("Location:./../login/");
}
?>


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MKR Kild | Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/semantic.min.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="./../css/furniture.css" rel="stylesheet">
    <link href="./../css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<button id="hiddenBtn" class="btn btnColor">
    <i class="glyphicon glyphicon-cog"></i>
</button>

<nav id="adminNavbar" class="navbar navbar-default navbar-static-top topbar" role="admin">
    <div class="container-fluid">

        <div class="navbar-header">

            <a href="../admin/" class="navbar-brand">
                <span class="hidden-xs">MKR Kild<sup>Admin</sup></span>
            </a>
            <div class="ui buttons position">
                <button class="navbar-text ui inverted red button">
                    <a data-toggle="modal" data-target="#myModal" class="sidebar-toggle">
                        Background
                    </a>
                </button>
                <button class="navbar-text ui inverted green button">
                    <a href="admin.php">Dashboard</a>
                </button>

            </div>
        </div>

        <div class="navbar-collapse collapse" id="navbar-collapse-main">


            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <button class="navbar-btn active" data-toggle="dropdown">
                        <img src="./../img/logo2.png" class="img-circle">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="./../login/logout.php">Logout</a></li>
                        <li><a id="hideNav">Hide</a></li>
                        <li id="showNav" class="hidden"><a>Show</a></li>
                    </ul>
                </li>


            </ul>

        </div>
    </div>
</nav>


<!-- Page Features -->
<div class="row text-left">
    <div class="col-md-4 col-md-offset-2">
        <form>
            <div class="row">
            <div class="form-group col-md-10 ">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-10">
                <label for="name" class="control-label">Email</label>
                <input type="username" class="form-control" id="username" name="username" placeholder="example@domain.com" value="">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-10">
                <label for="name" class="control-label">Message</label>
                <textarea class="form-control" rows="4" name="message"></textarea>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-10 text-right">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default">
            </div>
            </div>
        </form>    
    </div>


    <div class="col-md-4" style="    padding-left: 100px;
    border: 1px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;">
        <div class="row">
            <div class="col-md-4">
                <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=100&h=100" alt="bla">
            </div>
            <div class="col-md-6">
                <h4>Name</h4>
                <text>A few words about the person</text>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=100&h=100" alt="bla">
            </div>
            <div class="col-md-6">
                <h4>Name</h4>
                <text>A few words about the person</text>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=259%C3%97375&w=100&h=100" alt="bla">
            </div>
            <div class="col-md-6">
                <h4>Name</h4>
                <p>A few words about the person</p>
            </div>
        </div>
    </div>    
</div>
<br>
<!-- /.row -->
<hr class="footsep">




<!-- jQuery -->
<script src="./../js/jquery.js"></script>
<script src="./../js/main.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./../js/bootstrap.min.js"></script>
<script src="./../js/semantic.min.js"></script>


<?php include("./../footer.php"); ?>

</body>

</html>
