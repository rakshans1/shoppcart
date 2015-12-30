<?php  
if (isset($_GET['success'])===true && empty($_GET['success'])===true) {?>
    <div class="container">
    <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo 'You have been registered sucessfully.Please Check your Email to activate account' ?>
</div>
</div>
<?php }?>