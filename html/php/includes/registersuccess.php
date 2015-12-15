<?php  
if (isset($_GET['sucess']) && empty($_GET['sucess'])) {?>
    <div class="container">
    <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo 'You have been registered sucessfully' ?>
</div>
</div>
<?php }?>