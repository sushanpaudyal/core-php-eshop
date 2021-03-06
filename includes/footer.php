<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div>

            <div class="col-md-3 col-sm-6">
                <h4>Top Product Categories</h4>
                <ul>
                    <?php
                    $get_p_cats = "SELECT * FROM product_categories";
                    $run_p_cats = mysqli_query($con, $get_p_cats);
                    while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        $p_cat_title = $row_p_cats['p_cat_title'];
                        ?>
                    <li>
                        <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                    </li>
                    <?php } ?>

                </ul>
                <hr class="hidden-md hidden-lg">
            </div>

            <div class="col-md-3 col-sm-6">
                <h4>Where to Find Us</h4>
                <p>
                    <strong>E-Shop Ltd.</strong>
                    <br> Tinkune, Kathmandu
                    <br> Nepal
                    <br> 9803961735
                    <br> sushan.paudyal@gmail.com
                    <br>
                    <strong>Sushan Paudyal</strong>
                </p>
                <a href="contact.php">Go To Contact Us</a>
                <hr class="hidden-md hidden-lg">
            </div>

            <div class="col-md-3 col-sm-6">
                <h4>Get The News</h4>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, ea illum ipsam placeat quibusdam totam?
                </p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <span class="input-group-btn">
                            <input type="submit" value="Subscribe" class="btn btn-default">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Stay in Touch</h4>
                <p class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; 2018 E-Shop Pvt Ltd.
            </p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">
                Template By: <a href="#"> Sushan Paudyal</a>
            </p>
        </div>
    </div>
</div>