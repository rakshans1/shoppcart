<?php require 'cart.php'; 
protect_page();
require 'html/php/includes/head.req.php'; ?>


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
      <div class="col-xs-1 hidden-xs">
      <i class="fa fa-check fa-5x"></i>
      </div>
      <div class="col-xs-11">
        <h2>THANK YOU! Your Payment Transaction is Completed</h2>
        <p>Thank you for placing your order with SHOPPCART</p>
      </div>
     <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            <?php thank(); ?>  
        </tbody>
    </table>    
<div class="col-xs-4 pull-right ">
<h2>Order Summary </h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php 
echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>
<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">&#8377;<?php 
echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";?>
</span></strong> </td>
</tr>
</tbody>
</table>
</div><!-- CART TOTALS-->      
  </div>    
     
    
 <!-- /.container -->


<?php  require 'html/php/includes/footer.req.php';
$id = "";
 foreach ($_SESSION as $name => $value) {
    if ($value > 0) {
    if (substr($name, 0, 8) == "product_") {
      $length = strlen($name - 8);
      $id = sanitize(substr($name, 8,$length));
      }
      unset($_SESSION['item_total']);
      unset($_SESSION['item_quantity']);
      unset($_SESSION['product_'. $id]);
   }
}

?>