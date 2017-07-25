<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tristan Wong">

    <title>beatbae</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    
     <div class="container-fluid banner"></div>
     <div class="container-fluid banner overlay">
        <div class="row valign">
            <div class="col-lg-12 text-center header">
                <h1>beatbae</h1>
                <p class="lead">early access</p>
            </div>
        </div>
        <!-- /.row -->

    </div>
    
<!--    <?php include('menu.php'); ?>-->
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">beatbae</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Producers</a>
                    </li>
                    <li>
                        <a href="#">How It Works</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Page Content -->
    <div class="container main-content">

        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h1><span class="text-logo">Create An Account</span></h1>
                </div>
<!--
                <div class="col-lg-6">
                    <img class="profile-img" src="img/header.jpg"/>
                </div>
                <div class="col-lg-6">
                    <h3 id="profile-name">Weird Nite</h3>
                    <h3 id="profile-email">weirdnite@gmail.com</h3>
                    <h3 id="profile-paypal">beatbae@gmail.com</h3>
                </div>
                <div class="col-lg-12">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut ligula malesuada, tincidunt neque ut, accumsan mauris. Nulla pharetra nisi vehicula, malesuada ipsum vel, semper eros. Nunc maximus egestas orci, sed pharetra mi rutrum ut. Morbi vel enim magna. Nulla eget diam a dui facilisis tincidunt ut vitae mauris. Cras eget ante fermentum, mollis nisl a, malesuada arcu. Phasellus eu dolor vitae dui porttitor mattis. Sed mauris est, semper et erat eget, hendrerit vehicula sem. Vestibulum quis diam sem. Quisque sit amet rhoncus dui. Ut euismod, libero sed ullamcorper dignissim, nulla neque vehicula ex, at pretium est erat ut leo. Nullam mollis, nisi eu volutpat imperdiet, magna dolor tincidunt est, sit amet fermentum mauris elit ut ante. Nunc interdum ipsum justo, non dapibus massa ultricies fermentum. Donec gravida ante bibendum nunc mattis interdum ut ac diam. Aliquam erat volutpat. Nulla vehicula lobortis libero, nec gravida odio auctor vitae.</p>
                </div>
-->
                <div class="col-lg-12">
                    <form action="register-processing.php" method="post" enctype="multipart/form-data">
                        Name*: <input type="text" name="name" required><br>
                        E-mail*: <input type="text" name="email" required><br>
                        Password*: <input type="password" name="password" required><br>
                        Paypal Email*: <input type="text" name="paypal" required><br>
                    Profile Picture*: <input type="file" name="fileToUpload" id="fileToUpload" required>
                    <input type="submit" value="Create Account" name="submit">
                    </form>
                </div>
            </div>
            
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
