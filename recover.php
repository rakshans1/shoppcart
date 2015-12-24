<?php include 'core/init.php';
logged_in_redirect();
require 'html/php/includes/head.req.php'; //This is head-->
?>
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
<?php
$mode_allowed = array('username', 'password');
if (isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
	if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
		if (email_exits($_POST['email']) === true) {
			recover($_GET['mode'],$_POST['email']);
			echo '<div class="container alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Thanks, we\'ve emailed you.
				</div>';
		}else{
			echo '<div class="container alert alert-success alert-dismissible" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  Oops, we couldn\'t find that email address
				</div>';
		}	
	}
}else{
	echo '<script type="text/javascript">window.location.href = \'404\';</script>';
	exit();
}
?>
<div class="container">
<form role="form" action="" method="post" >
    <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Please Enter your Email" required >
    </div>
    <button type="submit" class="btn btn-primary btn-block">Recover</button>
 </form>
 </div>
 <br>
<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 