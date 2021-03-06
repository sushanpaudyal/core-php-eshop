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
                    <a href="../customer_register.php">Register</a>
                </li>
                <li>
                    <a href="my_account.php">My Account</a>
                </li>
                <li>
                    <a href="../cart.php">Go to Cart</a>
                </li>
                <li>
                    <a href="../checkout.php">Login</a>
                </li>
            </ul>
        </div>
    </div>   <!-- Container Ends -->
</div>
<!-- Top div Ends here -->


<div class="navbar navbar-default" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="../index.php" class="navbar-brand home">
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
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="../shop.php">Shop</a>
                    </li>
                    <li class="active">
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="../contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <a href="../cart.php" class="btn btn-primary navbar-btn right">
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


<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a>My Account</a></li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>


        <div class="col-md-9">
            <div class="box">
                <h1 align="center">Please Confirm Your Payment</h1>
                <form action="confirm.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="invoice_no">Invoice No</label>
                        <input type="text" name="invoice_no" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="amount_sent">Amount Sent</label>
                        <input type="text" name="amount_sent" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="payment_mode">Select Payment Method</label>
                        <select name="payment_mode" id="" class="form-control">
                            <option value="" disabled selected>Select Payment Mode</option>
                            <option value="">Bank</option>
                            <option value="">Western Union</option>
                            <option value="">Cash on Delivery</option>
                            <option value="">Esewa</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ref_no">Transaction / Reference ID</label>
                        <input type="text" name="ref_no" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="code">Esewa Code</label>
                        <input type="text" name="code" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="date">Payment Date</label>
                        <input type="text" name="date" required class="form-control">
                    </div>

                    <div class="text-center">
                        <button type="submit" name="confirm_paymnent" class="btn btn-primary btn-lg">
                            <i class="fa fa-user-md"> </i> Confirm Payment
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