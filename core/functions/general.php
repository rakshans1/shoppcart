<?php
/*********************************************General Functions******************/
function redirect($location){
return header("Location: $location ");
}
function previous(){
return header("location:javascript://history.go(-1)");
}
function redirectjava($location){
	echo '<script type="text/javascript">window.location.href= "'.$location.'";</script>';
	echo 'window.location.href = '.$location.';';
}
function set_message($msg){
if(!empty($msg)) {
$_SESSION['message'] = $msg;
} else {
$msg = "";
    }
}
function display_message() {
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
function escape_string($string){
global $connection;
return mysqli_real_escape_string($connection, $string);
}
/*********************************************Database Functions******************/
function query($sql){
	global $connection;
	return mysqli_query($connection,$sql);
}
function confirm($result){
global $connection;
if(!$result) {
die("QUERY FAILED " . mysqli_error($connection));
	}
}
function fetch_array($result){
return mysqli_fetch_array($result);
}
/*********************************************Login & Register Functions******************/
function email($to,$subject,$message){
 $from = "shoppcartcare@shoppcart.com";
 $head = "From: $from\r\n" . "Content-type: text/html";
 mail($to, $subject, $message,$head);
}
function logged_in_redirect(){
	if (logged_in()===true ){
		header('Location: /');
		exit();
	}
}
function protect_page(){
	if (logged_in()===false) {
		header('Location: /');
		exit();
	}
}
function admin_protect(){
	global $user_data;
	if (has_access($user_data['user_id'],1) === false) {
		header('Location: /');
		exit();
	}
}
function adminormoderate_protect(){
	global $user_data;
	if (has_access($user_data['user_id'],2) === true || has_access($user_data['user_id'],1) === true) {
	}else{
		header('Location: /');
		exit();
	}
}
function array_sanitize(&$item){
	$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}
function sanitize($data){
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
} 
function output_errors($errors){
	return '<ul><li>'.implode('</li><li><p class="lead">', $errors).'</p></li></ul>';
}
function uploads_dir($product_category_id){
	 $title =  show_product_category_title($product_category_id);
	 $main  =  show_product_category_main_id($product_category_id);
	 $title =  strtolower(str_replace(" ", "_", $title ));
	 $uploads_dir = 'images/products/'.$main.'/'.$title.'/';
   return $uploads_dir;
}
function to_create_cat_dir(){
$query = query("SELECT * FROM categories");
confirm($query);
while($row = fetch_array($query)) {
$main =  $row['cat_main_id'];
$title =  $row['cat_title'];
$title =  strtolower(str_replace(" ", "_", $title ));
$structure ='images/products/'.$main.'/'.$title.'' ;
if (!mkdir($structure, 0777, true)) {
    die('Failed to create folders...');
}else{
	echo "Success";
}


  }
}

?>