<?php
include 'core/init.php';
require 'html/php/includes/head.req.php'; 
require 'html/php/includes/header.req.php'; 

if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
	$username = $_GET['username'];
	echo $username;
}else{
	header('Location: /');
	exit();
}
require 'html/php/includes/footer.req.php';
?>