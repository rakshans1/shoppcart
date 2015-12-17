<?php include 'core/init.php';
logged_in_redirect();
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
<?php require 'html/php/includes/head.req.php'; 
	
	if (isset($_GET['email'],$_GET['email_code']) ===true) {
		$email = trim($_GET['email']);
		$email_code = trim($_GET['email_code']);
		if (email_exits($email)===false) {
			$errors[] = 'Oops, something went wrong,and we couldn\'t find that Email address!';
		}elseif (activate($email,$email_code)===false) {
			$errors[] = 'We had problems Activating your account';
		}
		if (empty($errors)=== false) {?>
		<div class="container">
		<h2>Oops...</h2>
			<div class="alert alert-danger" role="alert">
			  <?php echo output_errors($errors); ?>
			</div></div><?php
		}else{
			header('Location: /index.php?active');
		}

	}else{
		header('Location: / ');
		exit();
	}





?><!--This is head-->








<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 

