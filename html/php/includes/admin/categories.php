<?php 
if(isset($_POST['add_category']) && empty($_POST['add_category']) === false) {
    $required_fields = array('cat_title','cat_main_id');
    foreach ($_POST as $key => $value) {
        if (empty($value) && in_array($key, $required_fields) === true) {
          set_message("All Fields Required");
           $errors[] = 'Fields marked with an * are required';
           break 1;
        }
    }if (empty($errors)===true) {
      add_category();
    }
}


?>
<div class="row">
<h1 class="page-header text-center">Product Categories</h1>
<div class="col-md-4">
    <?php
            if (!empty($_SESSION['message'])) { 
              
            echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              display_message();
            echo '</div>';
            }?>
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input name="cat_title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="category-title">Main Category ID (1-10)</label>
            <input name="cat_main_id" type="text" class="form-control">
        </div>

        <div class="form-group">
            
            <input name="add_category" type="submit" class="btn btn-primary" value="Add Category">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Cat Main Id</th>
        </tr>
            </thead>


    <tbody>
       <?php show_categories_in_admin(); ?>
    </tbody>

        </table>

</div>
</div>