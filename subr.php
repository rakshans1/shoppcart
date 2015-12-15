<?php include 'core/init.php';?>

<?php require 'html/php/includes/head.req.php'; ?><!--This is head-->

<?php require 'html/php/includes/header.req.php'; ?><!--This is header-->

<?php include 'html/php/includes/slider.inc.php'; ?><!--This is Slider-->



<section>
    <div class="container">
        <div class="row">

        <div class="col-sm-3">
<?php include 'html/php/includes/categories.inc.php'; ?><!--This is categories-->
        </div>
            <div class="col-sm-9 padding-right">
                    <div class="features_items "><!--features_items-->
                        

                        <h2 class="title text-center">Features Items</h2>
                            <div id="contentr" onload ="loading()">
                                
                            
                            <?php  include  "html/php/sub/dbcon.php";?>
                            </div>
                      </div>
                            </div><!--featured item end-->

                    </div><!--col-sm-9 end-->
<?php include 'html/php/includes/itrend.php'; ?> 
            </div>
</section>













<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 


                       <?php  include  "html/php/sub/dbcon.php";?>


