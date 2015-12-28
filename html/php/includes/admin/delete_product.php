<?php require '../../../../core/init.php';
if(isset($_GET['id'])) {
$query = query("DELETE FROM products WHERE p_id = " . escape_string($_GET['id']) . " ");
confirm($query);
$image= '../../../../'.$_GET['i'];
echo $image;
unlink($image);

set_message("Product Deleted");
redirect("/admin?products");


} else {

redirect("/admin");


}






 ?>