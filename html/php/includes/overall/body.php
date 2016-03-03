<section>
    <div class="container">
        <div class="row">

        <div class="col-sm-3">
<?php include 'html/php/includes/categories.inc.php'; ?><!--This is categories-->
        </div>
            <div class="col-sm-9 padding-right">

                    <div class="features_items "><!--features_items-->
                        
                    <div class="row">
                            
                    </div>
                            <div><img class ="loader" id ="loader" src="images/loading.gif"></div>
                            <div id="content">
                                
                                <?php 
                                    echo '<h2 class="title text-center">Featured Items From all Categories</h2>';
                                    get_products(); 
                                    echo '<script type="text/javascript">'
                                               , 'document.getElementById("loader").style.display ="none";'
                                               , '</script>'
                                            ;
                                    ?>


                            </div>
                      </div>
                            </div><!--featured item end-->

                    </div><!--col-sm-9 end-->
<?php include 'html/php/includes/itrend.php'; ?> 
            </div>
</section>