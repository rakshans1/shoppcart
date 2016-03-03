<div class="col-sm-8">
    <div class="shop-menu pull-right">
        <ul class="nav navbar-nav">
         


            <?php 
            if (logged_in() === true) {

            	include "widgets/loggedin.php";
            	
            }else{

             include "widgets/login.php" ;


       		 }

             ?>


            
        </ul>
    </div>
</div>