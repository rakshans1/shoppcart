<?php
include 'core/init.php';
protect_page();
admin_protect();
require 'html/php/includes/admin/head.php'; 
require 'html/php/includes/admin/content.php'; ?>




<div id="page-wrapper">

            <div class="container-fluid">
<?php 

                if($_SERVER['REQUEST_URI'] == "/admin" )  {


                    include("html/php/includes/admin/admin_content.php");

                }


                if(isset($_GET['orders'])){


                    include("html/php/includes/admin/orders.php");


                }

                if(isset($_GET['categories'])){


                    include("html/php/includes/admin//categories.php");


                }

                 if(isset($_GET['products'])){


                    include("html/php/includes/admin//products.php");


                }


                 if(isset($_GET['add_product'])){


                    include("html/php/includes/admin//add_product.php");


                }


                 if(isset($_GET['edit_product'])){


                    include("html/php/includes/admin//edit_product.php");


                }

                if(isset($_GET['users'])){


                    include("html/php/includes/admin//users.php");


                }


                if(isset($_GET['add_user'])){


                    include("html/php/includes/admin//add_user.php");


                }


                 if(isset($_GET['edit_user'])){


                    include("html/php/includes/admin//edit_user.php");


                }


                  if(isset($_GET['reports'])){


                    include("html/php/includes/admin//reports.php");


                }





            





                 ?>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



<?php require 'html/php/includes/admin/footer.php'; 
?>


























