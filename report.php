<?php 
include 'core/init.php';
protect_page();
require 'html/php/includes/head.req.php'; 
require 'html/php/includes/header.req.php'; 
if(isset($_GET['oi'])) {
$order_id = sanitize($_GET['oi']);	
} else {
redirectjava("/orders");
}
?>
<div class="container">
<h2 class="text-center">Items in Order #<?php echo $order_id;?></h2>
<table class="table table-hover">
    <thead>
      <tr>
           <th>Order Number</th>
           <th>Product Name</th>
           <th>Price</th>
           <th>Product quantity</th>
      </tr>
    </thead>
    <tbody>
  <?php get_reports_user(); ?>
  </tbody>
</table>
</div>
<?php require 'html/php/includes/footer.req.php'; ?><!--This is footer--> 