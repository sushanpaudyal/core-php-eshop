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
         Shopping Cart Total Price: $100 , Total Items 2
     </a>
 </div>
    <div class="col-md-6">
        <ul class="menu">
            <li>
                <a href="customer_register.php">Register</a>
            </li>
            <li>
                <a href="customer/my_account.php">My Account</a>
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
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
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
                <span>4 Items in Cart</span>
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


<div class="container" id="slider">
    <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="admin_area/slides_images/1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="admin_area/slides_images/2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="admin_area/slides_images/3.jpg" alt="">
                </div>
                <div class="item">
                    <img src="admin_area/slides_images/4.jpg" alt="">
                </div>
            </div>
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>


<div id="advantages">
    <div class="container">
        <div class="same-height-row">
            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
                    <p>
                        We are known to provide best possible service ever.
                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon">
                        <i class="fa fa-tags"></i>
                    </div>
                    <h3><a href="#">BEST PRICES</a></h3>
                    <p>
                        You Can check on all other sites about the prices and than compare with us.
                    </p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <h3><a href="#">100% SATISFACTION GUARANTEED</a></h3>
                    <p>
                        Free returns on everything for 2 months.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="hot">
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Latest This Week</h2>
            </div>
        </div>
    </div>
</div>

<div id="content" class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/product.jpg" alt="" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                    <p class="price">Rs. 500</p>
                    <p class="buttons">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i> Add to Cart
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/T-shirt1.jpg" alt="" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                    <p class="price">Rs. 500</p>
                    <p class="buttons">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i> Add to Cart
                        </a>
                    </p>
                </div>
            </div>
        </div>


        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/Next-Denim-Borg-Lined-Western-Jacket-0463-0064553-1-pdp_slider_l.jpg" alt="" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                    <p class="price">Rs. 500</p>
                    <p class="buttons">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i> Add to Cart
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php">
                    <img src="admin_area/product_images/Next-Denim-Borg-Lined-Western-Jacket-0463-0064553-1-pdp_slider_l.jpg" alt="" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php">Marvel Black Kids Polo T-Shirt</a></h3>
                    <p class="price">Rs. 500</p>
                    <p class="buttons">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i> Add to Cart
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>