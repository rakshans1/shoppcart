<div class="row">
<div class="col-lg-12">
    <h1 class="page-header text-center">Users</h1>
    <?php
            if (!empty($_SESSION['message'])) { 
              
            echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              display_message();
            echo '</div>';
            }?>
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Name</th>
                     <th>Email</th>
                     <th>Active</th>
                     <th>Type</th>
                </tr>
            </thead>
            <tbody>
                    <?php display_users(); ?>
            </tbody>
        </table> <!--End of Table-->
    </div>
</div>
</div>


