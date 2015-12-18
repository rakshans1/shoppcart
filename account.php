<?php 
include 'core/init.php';
protect_page();
?>

<?php require 'html/php/includes/head.req.php'; ?><!--This is head-->

<?php require 'html/php/includes/header.req.php'; ?><!--This is header-->



<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="panel panel-warning">
			  <div class="panel-body ">
			  	<div class="acc-header text-center">My Account</div>
			  	<h3>Orders</h3>
			    	<ul class="nav nav-pills  nav-stacked ">
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="orders">My Orders</a></li>
					</ul>
				<h3>My Stuff</h3>
					<ul class="nav nav-pills  nav-stacked ">
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="wishlist">My Wishlist</a></li>
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="cart">My Cart</a></li>
					</ul>	
				<h3>Settings</h3>
					<ul class="nav nav-pills nav-stacked ">
						<li class="cp_btn acc active"><a class="cp_btn" onclick="return false" href="personalinfo">Personal Information</a></li>
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="changepassword">Change Password</a></li>
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="address">Addresses</a></li>
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="profile">Profile Settings</a></li>
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="changeemail">Update Email</a></li>
						<li class="cp_btn acc"><a class="cp_btn" onclick="return false" href="deactivate">Deactivate Account</a></li>
					</ul>
			  </div><!--/panel body-->
			</div><!--/panel-->



			









		</div><!--/col-md-3-->
		<div class="col-md-9">
			<div id="account" onload ="loading()">


			</div>
		</div><!--/col-md-9-->
	</div><!--/row-->
	

</div><!--/container-->


<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 