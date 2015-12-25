<?php 
include 'core/init.php';
protect_page();
if (empty($_POST) === false) {
    $required_fields = array('current_password','password','password_again');
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
           $errors[] = 'Fields marked with an * are required';
           break 1;
        }
    }
    if (md5($_POST['current_password'])=== $user_data['password']) {
        if (trim($_POST['password']) !== trim($_POST['password_again'])) {
            $errors[] = 'Your password do not match';
        }elseif (strlen($_POST['password'])<6) {
            $errors[] = 'Your password must be atleast 6 characters';
        }
    }else{
        $errors[] = 'Your Current Password is incorrect';
    }


}
require 'html/php/includes/head.req.php'; 
require 'html/php/includes/header.req.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-lg-3 col-md-3">
            <div class="panel panel-warning">
              <div class="panel-body ">
                <div class="acc-header text-center">My Account</div>
                <h4>Orders</h4>
                    <ul class="nav nav-pills  nav-stacked ">
                        <li class=" "><a class=""  href="orders">My Orders</a></li>
                    </ul>
                    <img src="images/home/line.png" class="line">
                <h4>My Stuff</h4>
                    <ul class="nav nav-pills  nav-stacked ">
                        <li class=" "><a class=""  href="wishlist">My Wishlist</a></li>
                        <li class=" "><a class=""  href="cart">My Cart</a></li>
                    </ul>
                    <img src="images/home/line.png" class="line">   
                <h4>Settings</h4>
                    <ul class="nav nav-pills nav-stacked ">
                        <li class="  "><a class=""  href="account">Personal Information</a></li>
                        <li class=" active "><a class=""  href="changepassword">Change Password</a></li>
                        <li class=" "><a class=""  href="address">Addresses</a></li>
                        <li class=""><a class=""  href="deactivate">Deactivate ount</a></li>
                    </ul>
              </div><!--/panel body-->
            </div><!--/panel-->
        </div><!--/col-md-3-->
        <div class="col-sm-9  col-lg-9 col-md-9">
             <h2 class="text-center">Change Password</h2>
             <?php
 if (isset($_GET['r']) === true && empty($_GET['r']) === true) {
                 echo '<div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      You must change your password... 
                    </div>';
             } 
                     
 if (empty($_POST)===false && empty($errors)=== true) {
    change_password($session_user_id,$_POST['password']);
    echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Password Changed Successfully
</div>';
 }elseif(empty($errors)=== false){ ?>
        

<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo output_errors($errors); ?>
</div>
<?php
 }?>
<div class="col-md-9 col-md-offset-2">    
<form role="form" action="" method="post" >
    <div class="form-group">
        <input type="password" class="form-control" name="current_password" placeholder="Current Password" required >
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="New Password" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password_again" placeholder="Retype Password" required>
    </div>
    <div class="col-sm-offset-3 col-sm-6">
    <button type="submit" class="btn btn-primary btn-block ">Change Password</button>
    </div>
 </form>
</div><br>           
            
        </div><!--/col-md-9-->
    </div><!--/row-->
</div><!--/container-->
<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 