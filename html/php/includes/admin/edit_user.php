<?php
update_user_admin();
if (isset($_GET['id'])) {
  $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
  confirm($query);
while($row = fetch_array($query)) {
$user_id       = escape_string($row['user_id']);
$username       = escape_string($row['username']);
$first_name    = escape_string($row['first_name']);
$active        = escape_string($row['active']);
$type          = escape_string($row['type']);
    }
}
?>
<div class="row">
    <h1 class="page-header text-center">Edit User<small> <?php  echo $first_name;?></small></h1>
    <?php
            if (!empty($_SESSION['message'])) { 
              
            echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              display_message();
            echo '</div>';
            }?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-8 ">
      <div class="form-group">
          <label for="username" class="col-sm-3">Username</label>
          <p class="form-control-static"><?php  echo $username;?></p>
      </div>
        <div class="form-group">
            <label for="first name" class="col-sm-3">First Name</label>
        <p class="form-control-static"><?php  echo $first_name;?></p>
       </div>
       <div class="form-group">
         <label for="product-title">Active</label>
        <select name="active" id="" class="form-control">
            <option value="<?php echo $active; ?>"><?php echo $active; ?></option>
            <option value="0">0</option>
             <option value="1">1</option> 
         </select>
        </div>
        <div class="form-group">
         <label for="product-title">Type</label>
        <select name="type" id="" class="form-control">
            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
            <option value="0">0</option>
             <option value="1">1</option> 
             <option value="2">2</option> 
         </select>
        </div>    
        <div class="form-group">
        <a id="user-id" class="btn btn-danger" href="html/php/includes/admin/delete_user?id=<?php echo $user_id;?>">Delete</a>
        <input type="submit" name="update_user" class="btn btn-success pull-right" value="Update" >
       </div>
    </div>
</form>
</div>




