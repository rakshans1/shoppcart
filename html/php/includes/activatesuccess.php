<?php  
if (isset($_GET['active'])===true && empty($_GET['sucess'])===true) {?>
    <div class="container">
    <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo 'Email Activation Successfull..!!!' ?>
</div>
</div>
<?php }?>