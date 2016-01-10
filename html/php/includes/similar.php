
<div class="recommended_items"><!--recommend item -->
                            <h2 class="title text-center">Similar Products</h2>
<div class="carousel">
<div id="owl-demo" class="owl-carousel owl-item ">
<?php


  $conn = $connection;
  $sub  = $product_data['product_cat_id'];
  $p  = $product_data['pname'];
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   $sql = 'SELECT * FROM `products`  WHERE `product_cat_id` = \''.$sub.'\' AND `pname` != \''.$p.'\' ORDER BY RAND() LIMIT 0,6 ;';
   $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $pid=$row["p_id"];
    $pname=$row["pname"];
    $pprice=$row["pprice"];  
    $pimage=$row["pimage"];  
    $pdesc=$row["pdesc"];  
    $pquant=$row["pquant"];       
    include  "trend.php";
          }
   } else {
    echo "0 results";
}   
   mysqli_close($conn);
?>
</div>
<div class="hidden-xs">
                <a class="btn  next right recommended-item-control ">
                <i class="fa fa-angle-right"></i>
                </a>
                <a class="btn  prev left  recommended-item-control ">
                <i class="fa fa-angle-left"></i>
                </a>
</div>



</div>
</div><!--recommend item end-->
