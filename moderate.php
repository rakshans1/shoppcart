<?php
include 'core/init.php';
protect_page();
adminormoderate_protect();

require 'html/php/includes/moderate/head.php';
require 'html/php/includes/moderate/content.php'; ?>


<div id="page-wrapper">

            <div class="container-fluid">
<?php 

                if($_SERVER['REQUEST_URI'] == "/moderate" )  {
                   

                    include("html/php/includes/moderate/moderate_content.php");

                }


                if(isset($_GET['orders'])){


                    include("html/php/includes/moderate/orders.php");


                }

                

                 if(isset($_GET['products'])){


                    include("html/php/includes/moderate//products.php");


                }


                 if(isset($_GET['add_product'])){


                    include("html/php/includes/moderate//add_product.php");


                }
                 if(isset($_GET['edit_product'])){


                    include("html/php/includes/moderate//edit_product.php");


                }
                  if(isset($_GET['reports'])){


                    include("html/php/includes/moderate//reports.php");


                }

                 ?>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



<?php require 'html/php/includes/moderate/footer.php'; ?>