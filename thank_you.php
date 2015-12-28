<?php require 'cart.php'; 
protect_page();
require 'html/php/includes/head.req.php'; 


process_transaction();


?>
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
<!-- Page Content -->
    <div class="container">

      <h1 class="text-center">THANK YOU</h1>


    </div>
    <!-- /.container -->


<?php require 'html/php/includes/footer.req.php';?>