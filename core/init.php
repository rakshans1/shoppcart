<?php
session_start();
error_reporting();



require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

if (logged_in() === true ){
	
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id','username','password','first_name','last_name','email','address');
	if(user_active($user_data['username']) === false){
		session_destroy();
		header ('Location: /'); 

	}


}



$errors = array();


?>