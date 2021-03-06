<?php
include ("includes/db.php");
include ("functions/functions.php");
?>


<?php
  if(isset($_GET['pro_id'])){
       $product_id = $_GET['pro_id'];
       $get_product = "SELECT * FROM products WHERE product_id = '$product_id'";
       $run_product = mysqli_query($con, $get_product);
       $row_product = mysqli_fetch_array($run_product);

       $p_cat_id = $row_product['p_cat_id'];
       $pro_title = $row_product['product_title'];
      $pro_price = $row_product['product_price'];
      $pro_desc = $row_product['product_desc'];
      $pro_img1 = $row_product['product_img1'];
      $pro_img2 = $row_product['product_img2'];
      $pro_img3 = $row_product['product_img3'];
      $get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id = '$p_cat_id'";
      $run_p_cat = mysqli_query($con, $get_p_cat);
      $row_p_cat = mysqli_fetch_array($run_p_cat);
      $p_cat_title = $row_p_cat['p_cat_title'];
  }
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
                    <li class="active">
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
                <li><a>Shop</a></li>
                <li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></li>
                <li><?php echo $pro_title; ?></li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>


       <div class="col-md-9">
           <div class="row" id="productMain">
               <div class="col-sm-6">
                   <div id="mainImage">
                       <div id="myCarousel" class="carousel slide" data-slide="carousel">
                           <ol class="carousel-indicators">
                               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                               <li data-target="#myCarousel" data-slide-to="1"></li>
                               <li data-target="#myCarousel" data-slide-to="2"></li>

                           </ol>
                           <div class="carousel-inner">
                               <div class="item active">
                                   <center>
                                       <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="" class="img-responsive">
                                   </center>
                               </div>
                               <div class="item">
                                   <center>
                                       <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="" class="img-responsive">
                                   </center>
                               </div>
                               <div class="item">
                                   <center>
                                       <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="" class="img-responsive">
                                   </center>
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

               <div class="col-sm-6">
                   <div class="box">
                       <h1 class="text-center"><?php echo $pro_title; ?></h1>
                       <?php add_cart(); ?>
                       <form action="details.php?add_cart=<?php echo $product_id; ?>" method="post" class="form-horizontal">
                           <div class="form-group">
                               <label for="" class="col-md-5 control-label">Product Quantity</label>
                                <div class="col-md-7">
                                    <select name="product_qty" class="form-control">
                                        <option value="">Select a Quantity</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                           </div>

                           <div class="form-group">
                               <label for="" class="col-md-5 control-label">Product Size</label>
                               <div class="col-md-7">
                                   <select name="product_size" class="form-control">
                                       <option value="">Select a Size</option>
                                       <option value="small">Small</option>
                                       <option value="medium">Medium</option>
                                       <option value="large">Large</option>
                                   </select>
                               </div>
                           </div>

                           <p class="price">
                               Rs. <?php echo $pro_price; ?>
                           </p>
                           <p class="text-center buttons">
                               <button class="btn btn-primary" type="submit">
                                   <i class="fa fa-shopping-cart"></i> Add to Cart
                               </button>
                           </p>
                       </form>
                   </div>

                   <div class="row" id="thumbs">
                       <div class="col-xs-4">
                           <a href="#" class="thumb">
                               <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="" class="img-responsive">
                           </a>
                       </div>
                       <div class="col-xs-4">
                           <a href="#" class="thumb">
                               <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="" class="img-responsive">
                           </a>
                       </div>
                       <div class="col-xs-4">
                           <a href="#" class="thumb">
                               <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="" class="img-responsive">
                           </a>
                       </div>
                   </div>
               </div>

           </div>


           <div class="box" id="details">
               <p>
                   <h4>Product Details</h4>
                  <p>
                      <?php echo $pro_desc; ?>
                  </p>
               <h4>Size</h4>
               <ul>
                   <li>Small</li>
                   <li>Large</li>
                   <li>Medium</li>
               </ul>
               </p>
               <hr>
           </div>


           <div class="row same-height-row">
               <div class="col-md-3 col-sm-6">
                   <div class="box same-height headline">
                       <h3 class="text-center">
                           May Interest You
                       </h3>
                   </div>
               </div>

               <?php
                  $get_products = "SELECT * FROM products ORDER  BY rand() LIMIT 0, 3";
                  $run_products = mysqli_query($con, $get_products);
                  while($row_products = mysqli_fetch_array($run_products)){
                      $pro_id = $row_products['product_id'];
                      $pro_title = $row_products['product_title'];
                      $pro_price = $row_products['product_price'];
                      $pro_img1 = $row_products['product_img1'];
               ?>


               <div class="center-responsive col-md-3 col-sm-6">
                   <div class="product same-height">
                       <a href="details.php?pro_id=<?php echo $pro_id; ?>">
                           <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="" class="img-responsive">
                       </a>
                       <div class="text">
                           <h3><a href="details.php"><?php echo $pro_title; ?></a></h3>
                           <p class="price">Rs. <?php echo $pro_price; ?></p>
                           <p class="buttons">
                               <a href="details.php?pro_id=<?php echo $pro_id; ?>" class="btn btn-default">View Details</a>

                           </p>
                       </div>
                   </div>
               </div>

               <?php } ?>
           </div>


       </div>



    </div>
</div>


<?php include("includes/footer.php"); ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>