<?php 
include 'core/init.php';
require 'html/php/includes/head.req.php'; //This is head-->
require 'html/php/includes/header.req.php'; //This is header-->
if (isset($_GET['product']) === true && empty($_GET['product']) === false) {
	$productname = $_GET['product'];
	if (product_exits($productname) === true) {
		$p_id = product_id_from_productname($productname);
		$product_data = product_data($p_id, 'p_id','pname','pprice','pimage','pdesc','pquant','sub');
	}else{
		echo '<script type="text/javascript">window.location.href = \'404\';</script>';
	}
	
}else{
	exit();
}
include 'html/php/includes/detail.php';  

require 'html/php/includes/footerd.req.php';?>