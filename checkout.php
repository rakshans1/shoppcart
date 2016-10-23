<title>Cart | Shoppcart</title>
<?php  require 'cart.php';
protect_page();
require 'html/php/includes/head.req.php';
require 'html/php/includes/header.req.php';?>

<div class="container">
<div class="row">
<h1>Cart</h1>
            <?php
            if (!empty($_SESSION['message'])) {

            echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              display_message();
            echo '</div>';
            }?>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="shoppcart@gmail.com">
<input type="hidden" name="currency_code" value="US">
<input type="hidden" name="return" value="https://shoppcart.herokuapp.com/thank_you">
<input type="hidden" name="notify_url" value="https://shoppcart.herokuapp.com/paypal">

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
            <?php cart(); ?>
        </tbody>
    </table>
     <?php echo show_paypal(); ?>
</form>
<!--  ***********CART TOTALS*************-->

<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

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
</div><!--Main Content-->
</div><!-- /.container -->
<?php require 'html/php/includes/footer.req.php';?>
