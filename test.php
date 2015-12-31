<?php
function draft_product() {
if(isset($_POST['publish_draft']) && empty($_POST['publish_draft']) === false) {
$product_title          = escape_string($_POST['product_title']);
$srt                    = (str_replace(" ","_","{$product_title}"));
$product_category_id    = escape_string($_POST['product_category_id']);
$product_price          = escape_string($_POST['product_price']);
$product_description    = escape_string($_POST['product_description']);
$product_quantity       = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = $_FILES['file']['tmp_name'];
if(empty($product_image)) {
$get_pic = query("SELECT pimage FROM draft WHERE draft_id =" .escape_string($_GET['id']). " ");
confirm($get_pic);
while($pic = fetch_array($get_pic)) {
$product_image = $pic['pimage'];
$uploads_dir = uploads_dir($product_category_id );
$products_image = basename($product_image);
$uploads_dirs = $uploads_dir. $products_image;
rename($product_image  ,$uploads_dirs);
    }
}else{
$uploads_dir = uploads_dir($product_category_id );
$uploads_dirs = $uploads_dir. $product_image;
move_uploaded_file($image_temp_location  ,$uploads_dirs);
}
$query = query("INSERT INTO products(pname, product_cat_id, pprice, pdesc, pquant, pimage) VALUES('{$srt}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$product_quantity}', '{$uploads_dirs}')");
$send_draft_query = query($query);
confirm($query);
redirect("admin?draft");
set_message("New Product was Added <a href=".$product_title." target=\"_blank\">View Product</a>");
        }
}


?>