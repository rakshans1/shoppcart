<?php 
include 'core/init.php';
logged_in_redirect();

?>

<?php 

if (empty($_POST) === false) {
	$username  = $_POST['username'];
	$password  = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		
		$errors[] = 'You need to enter a Username and Password';
	}elseif (user_exits($username) === false ) {
		$errors[] = 'We can\'t find that username. Have you registered?';
	}elseif (user_active($username) === false) {
		$errors[] = 'You haven\'t activated your account!.Please check your Email.';
	}else {
		$login = login($username, $password);
		if($login === false){
			$errors[] = 'Username/Password combination is incorrect';
		} else {
			
			$_SESSION['user_id'] = $login;	
			header('Location: /'); 
			exit(); 
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
                            <a href="/"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                       </div> 
                    
                </div>
            </div>
        </div><!--/header-middle-->
</header><!--/header-->

 <div class="container"> 
 <?php   
 if (empty($errors)=== false) {
 ?>
<h2>We tried to log you in, but....</h2>

<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo output_errors($errors); }?>
</div><br>      
<form role="form" action="login.php" method="post" >
    <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required >
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
 </form>
 <br>
Forgot <a href="recover.php?mode=username">Username</a> or <a href="recover.php?mode=password">password</a>?
 

</div><br>


<?php require 'html/php/includes/footer.req.php'; ?>


