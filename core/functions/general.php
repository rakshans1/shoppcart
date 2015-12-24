<?php

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