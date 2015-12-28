<div class="row">
     <div class="col-md-12">
        <h1 class="page-header">All Orders</h1>
       <?php
            if (!empty($_SESSION['message'])) { 
              
            echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              display_message();
            echo '</div>';
            }?>
    </div>
</div>
<div class="row">
   <div class="col-md-12">  
    <table class="table table-hover">
        <thead>
          <tr>
               <th>Order id</th>
               <th>Amount</th>
               <th>Transaction</th>
               <th>Currency</th>
               <th>Status</th>
          </tr>
        </thead>
        <tbody>
            <?php display_orders(); ?>
        </tbody>
    </table>
  </div>  
</div>

