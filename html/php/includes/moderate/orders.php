<div class="row">
     <div class="col-md-12">
        <h1 class="page-header">All Orders</h1>
    </div>
</div>
<div class="row">
   <div class="col-md-12">  
    <table class="table table-hover">
        <thead>
          <tr>
               <th>Order id</th>
               <th>Amount</th>
               <th>Transaction id</th>
               <th>Currency</th>
               <th>Status</th>
          </tr>
        </thead>
        <tbody>
            <?php display_orders_moderate(); ?>
        </tbody>
    </table>
  </div>  
</div>

