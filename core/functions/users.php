<?php 
function logged_in(){
	return (isset($_SESSION['user_id']))? true : false;
}



function user_exits($username){
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'"), 0) == 1 ) ? true : false;
}

function user_active($username){
	$username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1 "), 0) == 1 ) ? true : false;
}


function user_id_from_username($username){
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username`= '$username' "), 0 , 'user_id');

}

function login($username, $password) {
	$user_id = user_id_from_username($username);

	$username = sanitize($username);  
	$password = md5($password);

	return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`= '$username' AND `password` = '$password' "), 0) == 1) ? $user_id : false;

}

?>