<?php
/*********************************************General Functions******************/
function redirect($location){
return header("Location: $location ");
}
function previous(){
return header("location:javascript://history.go(-1)");
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

?>