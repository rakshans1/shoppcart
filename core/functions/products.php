<?php
function order_count(){
    return mysql_result(mysql_query("SELECT COUNT(`order_id`) FROM `orders`"), 0);
}
function product_count(){
    return mysql_result(mysql_query("SELECT COUNT(`p_id`) FROM `products`"), 0);
}
/*********************************************Category Functions******************/
function get_categories($cat_main_id){
$query = query("SELECT * FROM categories WHERE `cat_main_id` = $cat_main_id ");
confirm($query);
while($row = fetch_array($query)) {
$srt = strtoupper(str_replace(" ","_","{$row['cat_title']}"));
echo '<li class="cp_btn"><a  class="active"onclick="return false" href="subr.php?id='.$row['cat_id'].'&names='.$srt.'">'.$row['cat_title'].' </a></li>';
     }
}
function cat_count(){
    return mysql_result(mysql_query("SELECT COUNT(`cat_id`) FROM `categories`"), 0);
}
/*********************************************product Functions******************/
function add(){
    echo "hi";
}
function get_products() {
$query = query(" SELECT * FROM products LIMIT 0,12 ;");
confirm($query);
while($row = fetch_array($query)) {
$srt = strtoupper(str_replace("_"," ","{$row['pname']}"));
$product1 = <<<DELIMETER
<a class="link" href="{$row['pname']}">
<div class="col-sm-4 col-xs-6">
    <div class="thumbnail">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img class ="img-thumbnail " src="{$row['pimage']}"  alt="" />
                    <h2>&#8377; {$row['pprice']}</h2>
                    <p>$srt</p>
                    <div class="row">
                        <div class="col-sm-6">
DELIMETER;
$product2 =<<<DELIMETER

                        <div class="col-sm-6">
                            <a href="{$row['pname']}" class="btn btn-default btn-block add-to-cart"><i class="fa fa-info-circle"></i>Details</a>
                        </div>
                    </div>    
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</a>
DELIMETER;
$s = $row['p_id'];
echo $product1;
if (isset($_SESSION['product_'.$s])) {
    $add = <<<DELIMETER
   <a href="cart?add={$row['p_id']}" class="btn btn-default btn-block add-to-cart"><i class="fa fa-cart-plus"></i>Added to cart</a>
                        </div>
DELIMETER;
echo $add;
}else{
   $add = <<<DELIMETER
   <a href="cart?add={$row['p_id']}" class="btn btn-default btn-block add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
DELIMETER;
echo $add;
}
echo $product2;
		}
}
function product_exits($productname){
    $productname = sanitize($productname);
    return (mysql_result(mysql_query("SELECT COUNT(`p_id`) FROM `products` WHERE `pname` = '$productname'"), 0) == 1 ) ? true : false;
}
function product_data($p_id){
    $data = array();
    $p_id = (int)$p_id;
    $func_num_args = func_num_args();
    $func_get_args = func_get_args();
    if ($func_get_args > 1) {
        unset($func_get_args[0]);
        $fields = '`'. implode('`, `', $func_get_args). '`';
        $data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `products` WHERE `p_id` = $p_id" ));
        return $data;
    }
}
function product_id_from_productname($productname){
    $productname = sanitize($productname);
    return mysql_result(mysql_query("SELECT `p_id` FROM `products` WHERE `pname`= '$productname' "), 0 , 'p_id');
}
/*********************************************category product Functions******************/
function get_sub($named,$id) {
$sql = 'SELECT * FROM products WHERE product_cat_id = '.$id.'';
$query = query($sql);
confirm($query);
echo '<h2 class="title text-center">Featured Items IN '.$named.'</h2>';
while($row = fetch_array($query)) {
$srt = strtoupper(str_replace("_"," ","{$row['pname']}"));
$product1 = <<<DELIMETER
<a class="link" href="{$row['pname']}">
<div class="col-sm-4 col-xs-6">
    <div class="thumbnail">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{$row['pimage']}"  alt="" />
                    <h2>&#8377; {$row['pprice']}</h2>
                    <p>$srt</p>
                    <div class="row">
                        <div class="col-sm-6">
DELIMETER;
$product2 =<<<DELIMETER

                        <div class="col-sm-6">
                            <a href="{$row['pname']}" class="btn btn-default btn-block add-to-cart"><i class="fa fa-info-circle"></i>Details</a>
                        </div>
                    </div>    
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</a>
DELIMETER;
$s = $row['p_id'];
echo $product1;
if (isset($_SESSION['product_'.$s])) {
    $add = <<<DELIMETER
   <a href="cart?add={$row['p_id']}" class="btn btn-default btn-block add-to-cart"><i class="fa fa-cart-plus"></i>Added to cart</a>
                        </div>
DELIMETER;
echo $add;
}else{
   $add = <<<DELIMETER
   <a href="cart?add={$row['p_id']}" class="btn btn-default btn-block add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
DELIMETER;
echo $add;
}
echo $product2;
        }
}
?>
