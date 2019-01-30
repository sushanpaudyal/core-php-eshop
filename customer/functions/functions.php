<?php
$db = mysqli_connect("localhost", "root", "root", "eshop");


//  Getting IP Address
function getRealUserIp(){
    switch(true){
        case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}

function items(){

    global $db;
    $ip_add = getRealUserIp();
    $get_items = "select * from cart where ip_add='$ip_add'";
    $run_items = mysqli_query($db,$get_items);
    $count_items = mysqli_num_rows($run_items);
    echo $count_items;

}

function getPro(){
    global $db;
    $get_products = "SELECT * FROM products order by 1 DESC LIMIT 0, 8";
    $run_products = mysqli_query($db, $get_products);
    while($row_products = mysqli_fetch_array($run_products)){
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        ?>
        <div class="col-sm-4 col-sm-6 single">
            <div class="product">
                <a href="details.php?pro_id=<?php echo $pro_id; ?>">
                    <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="" class="img-responsive">
                </a>
                <div class="text">
                    <h3><a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $pro_title; ?></a></h3>
                    <p class="price">Rs. <?php echo $pro_price; ?></p>
                    <p class="buttons">
                        <a href="details.php?pro_id=<?php echo $pro_id; ?>" class="btn btn-default">View Details</a>
                        <a href="details.php?pro_id=<?php echo $pro_id; ?>" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i> Add to Cart
                        </a>
                    </p>
                </div>
            </div>
        </div>
    <?php } } ?>
