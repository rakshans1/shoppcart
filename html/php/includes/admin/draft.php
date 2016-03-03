<h1 class="page-header text-center">All Drafts Submitted By Moderators</h1>
<?php
            if (!empty($_SESSION['message'])) { 
              
            echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              display_message();
            echo '</div>';
            }?>
<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Category</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Moderator Name</th>
      </tr>
    </thead>
    <tbody>

      
      <?php get_drafts_in_admin(); ?>


  </tbody>
</table>



