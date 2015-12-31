<?php 
if (isset($_GET['id'])) {
  $query = query("SELECT * FROM products WHERE p_id = " . escape_string($_GET['id']) . " ");
  confirm($query);

while($row = fetch_array($query)) {

$product_title          = escape_string($row['pname']);
$product_category_id    = escape_string($row['product_cat_id']);
$product_price          = escape_string($row['pprice']);
$product_description    = escape_string($row['pdesc']);
$product_quantity       = escape_string($row['pquant']);
$product_image          = escape_string($row['pimage']);
    }
$srt = strtoupper(str_replace("_"," ","{$product_title}"));    
update_product_moderate();
}
?>
<div class="row">
<div class="col-md-12">
<h1 class="page-header text-center">Edit Product </h1>
<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control" value="<?php echo $srt; ?>">
       
    </div>


    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
    </div>



    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="product_price" class="form-control" size="60" value="<?php echo $product_price; ?>">
      </div>
    </div>



    




</div><!--Main Content-->


<!-- SIDEBAR-->


<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
        <input type="submit" name="update" class="btn btn-success btn-lg" value="Update">
    </div>


     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Product Category</label>

        <select name="product_category_id" id="" class="form-control">
            <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id); ?></option>

            <?php show_categories_add_product_page(); ?>
           
        </select>


</div>





    <!-- Product Brands-->


    <div class="form-group">
      <label for="product-title">Product Quantity</label>
        <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity ; ?>">
    </div>


<!-- Product Tags -->


   <!--  <div class="form-group">
          <label for="product-title">Product Keywords</label>
          <hr>
        <input type="text" name="product_tags" class="form-control">
    </div>
 -->
    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file" ><br>
        <img width='150' src="<?php echo $product_image; ?>" alt="">
      
    </div>



</aside><!--SIDEBAR-->


    
</form>
</div>
</div>
