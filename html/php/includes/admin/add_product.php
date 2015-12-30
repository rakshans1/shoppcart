<?php 
if(isset($_POST['publish']) && empty($_POST['publish']) === false) {
    $required_fields = array('product_title','product_category_id','product_price','product_description','product_quantity');
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
          set_message("All Fields Required");
           $errors[] = 'Fields marked with an * are required';
           break 1;
        }
    }if (empty($errors)===true) {
      add_product(); 
    }
}


?>
<div class="row">
<div class="col-md-12">
<h1 class="page-header text-center">Add Product </h1>
<?php
            if (!empty($_SESSION['message'])) { 
              
            echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              display_message();
            echo '</div>';
            }?>
<form role="form" action="" method="post" enctype="multipart/form-data">
<div class="col-md-8">
<div class="form-group">
    <label for="product-title">Product Title </label>
        <input type="text" name="product_title" class="form-control" required>
    </div>
    <div class="form-group">
           <label for="product-title">Product Description</label>
      <textarea name="product_description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="product_price" class="form-control" size="60" required>
      </div>
    </div>
</div><!--Main Content-->
<!-- SIDEBAR-->
<aside id="admin_sidebar" class="col-md-4">
    <div class="form-group">
       <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
        <input type="submit" name="publish" class="btn btn-success btn-lg" value="Publish">
    </div>
     <!-- Product Categories-->
    <div class="form-group">
         <label for="product-title">Product Category</label>

        <select name="product_category_id" id="" class="form-control">
            <option value="">Select Category</option>
            <?php show_categories_add_product_page(); ?>
        </select>
</div>
    <!-- Product Brands-->
    <div class="form-group">
      <label for="product-title">Product Quantity</label>
        <input type="number" name="product_quantity" class="form-control" required>
    </div>
    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Product Image</label>
        <input type="file" name="file">
    </div>
</aside><!--SIDEBAR-->
</form>
</div>
</div>
