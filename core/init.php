<?php
session_start();
error_reporting();
error_reporting(E_ALL ^ E_DEPRECATED);

require_once dirname(__FILE__) . '/../vendor/autoload.php';
// require_once '../vendor/autoload.php';
require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';
require 'functions/products.php';


$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);
if (logged_in() === true ){

	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id','username','password','first_name','last_name','email','address','password_recover','type','mobile_number');
	if(user_active($user_data['username']) === false){
		session_destroy();
		header ('Location: /');

	}
	if ($current_file !== 'changepassword.php' && $current_file !== 'logout.php' && $user_data['password_recover'] == 1) {
		header ('Location: changepassword?r');
		exit();

	}

}



$errors = array();


?>
