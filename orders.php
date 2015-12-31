<?php 
include 'core/init.php';
protect_page();
require 'html/php/includes/head.req.php'; 
require 'html/php/includes/header.req.php'; ?><!--This is header-->
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-lg-3 col-md-3">
			<div class="panel panel-warning">
			  <div class="panel-body  ">
			  	<div class="acc-header text-center">My Account</div>
			  	<h4>Orders</h4>
			    	<ul class="nav nav-pills  nav-stacked ">
						<li class="active"><a class=""  href="orders">My Orders</a></li>
					</ul>
					<img src="images/home/line.png" class="line">
				<h4>My Stuff</h4>
					<ul class="nav nav-pills  nav-stacked ">
						<li class=" "><a class=""  href="wishlist">My Wishlist</a></li>
						<li class=" "><a class=""  href="checkout">My Cart</a></li>
					</ul>
					<img src="images/home/line.png" class="line">	
				<h4>Settings</h4>
					<ul class="nav nav-pills nav-stacked ">
						<li class="  "><a class=""  href="account">Personal Information</a></li>
						<li class=" "><a class=""  href="changepassword">Change Password</a></li>
						<li class=" "><a class=""  href="address">Addresses</a></li>
						<li class=" "><a class=""  href="deactivate">Deactivate Account</a></li>
					</ul>
			  </div><!--/panel body-->
			</div><!--/panel-->
		</div><!--/col-md-3-->
		<div class="col-sm-9  col-lg-9 col-md-9">
			<h2 class="text-center">Your Orders</h2>
		      <table class="table table-hover">
        <thead>
          <tr>
               <th>Order Number</th>
               <th>Transaction id</th>
               <th>Amount</th>
               <th>Status</th>
          </tr>
        </thead>
        <tbody>
            <?php display_orders_user(); ?>
        </tbody>
    </table>
		</div><!--/col-md-9-->
	</div><!--/row-->
</div><!--/container-->
<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 