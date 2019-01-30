<?php
include ("includes/db.php");
include ("functions/functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Shop - Shop Online Nepal</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,70,300,100" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>


<!-- Top Div Starts -->
<div id="top">
    <div class="container"> <!-- Container starts -->
        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">
                Welcome : Guest
            </a>
            <a href="#">
                Shopping Cart Total Price: $100 , Total Items <?php items(); ?>
            </a>
        </div>
        <div class="col-md-6">
            <ul class="menu">
                <li>
                    <a href="customer_register.php">Register</a>
                </li>
                <li>
                    <a href="checkout.php">My Account</a>
                </li>
                <li>
                    <a href="cart.php">Go to Cart</a>
                </li>
                <li>
                    <a href="checkout.php">Login</a>
                </li>
            </ul>
        </div>
    </div>   <!-- Container Ends -->
</div>
<!-- Top div Ends here -->


<div class="navbar navbar-default" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand home">
                <img src="images/logo.png" alt="Eshop Logo" class="hidden-xs">
                <img src="images/logo-small.png" alt="Eshop Logo" class="visible-xs">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                <span class="sr-only">Search Navigation</span>
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
            <div class="padding-nav">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa fa-shopping-cart"></i>
                <span><?php items(); ?>  Items in Cart</span>
            </a>
            <div class="navbar-collapse collapse right">
                <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>

            <div class="collapse clearfix" id="search">
                <form action="results.php" class="navbar-form" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                        <span class="input-group-btn">
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a>Register</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>

        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2>Register a new Account</h2>
                    </center>
                </div>

                <form action="customer_register.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="c_name">Customer Name</label>
                        <input type="text" name="c_name" class="form-control" id="c_name">
                    </div>

                    <div class="form-group">
                        <label for="c_email">Customer Email</label>
                        <input type="text" name="c_email" class="form-control" id="c_email">
                    </div>

                    <div class="form-group">
                        <label for="c_pass">Password</label>
                        <input type="password" name="c_pass" class="form-control" id="c_pass">
                    </div>


                    <div class="form-group">
                        <label for="c_country">Customer Country</label>
                        <input type="text" name="c_country" class="form-control" id="c_country">
                    </div>

                    <div class="form-group">
                        <label for="c_city">Customer City</label>
                        <input type="text" name="c_city" class="form-control" id="c_city">
                    </div>

                    <div class="form-group">
                        <label for="c_contact">Customer Contact</label>
                        <input type="text" name="c_contact" class="form-control" id="c_contact">
                    </div>

                    <div class="form-group">
                        <label for="c_address">Customer Address</label>
                        <input type="text" name="c_address" class="form-control" id="c_address">
                    </div>


                    <div class="form-group">
                        <label for="c_image">Customer Image</label>
                        <input type="file" name="c_image" class="form-control" id="c_image">
                    </div>



                    <div class="text-center">
                        <button type="submit" name="register" class="btn btn-primary">
                            <i class="fa fa-user-md"></i> Register
                        </button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>


<?php include("includes/footer.php"); ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>