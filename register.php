 <?php include 'core/init.php';


 if (empty($_POST) === false) {
    $required_fields = array('username','password','password_again','first_name','address','email');
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
           $errors[] = 'Fields marked with an * are required';
           break 1;
        }
    }
    if (empty($errors)===true) {
        if (user_exits($_POST['username'])=== true) {
            $errors[] = 'Sorry, The username \''.$_POST['username'].'\' is already taken.';
               }
        if (preg_match("/\\s/", $_POST['username'])== true) {
                   $errors[] = 'Your Username must not contain space.';
               }       
        if (strlen($_POST['password'])<6) {
                 $errors[] ='Your password must be at least 6 characters';
              } 
        if ($_POST['password']!= $_POST['password_again']) {
                      $errors[]='Password do not match.';
                   } 
         if (email_exits($_POST['email'])===true) {
                      $errors[] = 'Sorry, The Email \''.$_POST['email'].'\' is already in use.';
                   }          
    }
}
?>













<?php require 'html/php/includes/head.req.php'; ?><!--This is head-->
<body>
<header id="header"><!--header -->
        
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="logo text-center">
                            <a href="index.php"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                       </div> 
                    
                </div>
            </div>
        </div><!--/header-middle-->
</header><!--/header-->




<div class="container">
 <div class="companyinfo">
        <h2 class="title text-center">Sign Up For Shoppcart...!!!</h2>
</div>


<?php
 if (empty($_POST)===false && empty($errors)=== true) {
    $register_data = array(
        'first_name'    => $_POST['first_name'],
        'last_name'     => $_POST['last_name'],
        'address'       => $_POST['address'],
        'email'         => $_POST['email'],
        'username'      => $_POST['username'],
        'password'      => $_POST['password']

        );

    register_user($register_data);
    header('Location: /indexs.php?sucess');
    exit();

 }elseif(empty($errors)=== false){ ?>
        

<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo output_errors($errors); ?>
</div>
<?php
 }
 ?>

<form role="form" action="" method="post">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <input type="text" name="first_name" class="form-control" placeholder="First Name*" require>
    </div>
    <div class="form-group">
        <input type="text" name="last_name" class="form-control" placeholder="Last Name" >
    </div>
    
    <div class="form-group">
        <input type="text" name="address" class="form-control" placeholder="Address*" require>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email*" require>
    </div>
    </div><!--div col-->
    <div class="col-md-6">
    <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username*" require>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password*" require>
    </div>
    <div class="form-group">
        <input type="password" name="password_again" class="form-control" placeholder="Confirm Password*"require >
    </div>
    </div><!--div col-->

    <button type="submit" class="btn btn-primary btn-block">Sign Up!</button>
    </div><!--div row-->
</form>
<br>
</div>
<?php require 'html/php/includes/footer.req.php'; ?>