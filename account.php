<?php 
include 'core/init.php';
protect_page();
if (empty($_POST) === false) {
    $required_fields = array('first_name','email');
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
           $errors[] = 'Fields marked with an * are required';
           break 1;
        }
    }
    if (empty($errors) === true) {
    	if (email_exits($_POST['email']) === true && $user_data['email'] != $_POST['email'] ){
				$errors[] = 'Sorry, The Email \''.$_POST['email'].'\' is already in use.';
			}
	}

}
require 'html/php/includes/head.req.php'; 
require 'html/php/includes/header.req.php'; ?><!--This is header-->
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-lg-3 col-md-3">
			<div class="panel panel-warning">
			  <div class="panel-body ">
			  	<div class="acc-header text-center">My Account</div>
			  	<h4>Orders</h4>
			    	<ul class="nav nav-pills  nav-stacked ">
						<li class="cp_btn acc"><a class="cp_btn"  href="orders">My Orders</a></li>
					</ul>
					<img src="images/home/line.png" class="line">
				<h4>My Stuff</h4>
					<ul class="nav nav-pills  nav-stacked ">
						<li class="cp_btn acc"><a class="cp_btn"  href="wishlist">My Wishlist</a></li>
						<li class="cp_btn acc"><a class="cp_btn"  href="cart">My Cart</a></li>
					</ul>
					<img src="images/home/line.png" class="line">	
				<h4>Settings</h4>
					<ul class="nav nav-pills nav-stacked ">
						<li class="cp_btn acc active"><a class="cp_btn"  href="account">Personal Information</a></li>
						<li class="cp_btn acc"><a class="cp_btn"  href="changepassword">Change Password</a></li>
						<li class="cp_btn acc"><a class="cp_btn"  href="address">Addresses</a></li>
						<li class="cp_btn acc"><a class="cp_btn"  href="deactivate">Deactivate Account</a></li>
					</ul>
			  </div><!--/panel body-->
			</div><!--/panel-->
		</div><!--/col-md-3-->
		<div class="col-sm-9  col-lg-9 col-md-9">
			<h2 class="text-center">Personal Information</h2>
			<?php
 if (empty($_POST)===false && empty($errors)=== true) {
    $update_data = array(
    	'first_name' => $_POST['first_name'],
    	'last_name'  => $_POST['last_name'], 
    	'email'      => $_POST['email'] 
    	);
    update_user($update_data);
    echo '<META HTTP-EQUIV=Refresh CONTENT=0>';
 }elseif(empty($errors)=== false){ ?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo output_errors($errors); ?>
</div>
<?php
 }?>
<br>
<div class="col-md-9 col-md-offset-2 " id="from">    
<form role="form" action=" " method="post" class="form-horizontal">
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">First Name*</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="first_name" placeholder="<?php  echo $user_data['first_name'];?>"  >
    </div>
    </div>

    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="last_name" placeholder="<?php  echo $user_data['last_name'];?>"  >
    </div>
    </div>
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Email*</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" name="email" placeholder="<?php  echo $user_data['email'];?>"  >
    </div>
    </div>
   <div class="col-sm-offset-4 col-sm-6">
    	<button type="submit" class="btn btn-primary btn-block ">Save Changes</button>
   </div>
 </form>
</div><br>			
		</div><!--/col-md-9-->
	</div><!--/row-->
</div><!--/container-->
<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 