<?php require 'cart.php'; 
protect_page();
require 'html/php/includes/head.req.php'; 
require 'html/php/includes/header.req.php';
if (isset($_GET['tx'])) {
	$_GET['amt'];
	$_GET['cc'];
	$_GET['tx'];
	$_GET['st'];
}

?>




<?php require 'html/php/includes/footer.req.php';?>