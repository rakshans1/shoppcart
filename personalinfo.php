<?php 
include 'core/init.php';
protect_page();
?>

<h2 class="text-center">Personal Information</h2>
<br>
<div class="col-md-9 col-md-offset-2">    
<form role="form" action=" " method="post" class="form-horizontal">
    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="currentpass" placeholder="<?php  echo $user_data['first_name'];?>" required >
    </div>
    </div>

    <div class="form-group">
    	<label for="inputEmail3" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="currentpass" placeholder="<?php  echo $user_data['last_name'];?>" required >
    </div>
    </div>
   <div class="col-sm-offset-2 col-sm-10">
    	<button type="submit" class="btn btn-primary btn-block ">Save Changes</button>
   </div>
 </form>

 

</div><br>
