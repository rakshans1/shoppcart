
<br>
<br>


<li><a href="account"><i class="fa fa-user"></i> <?php  echo $user_data['first_name'];?></a></li>
<li><a href="wishlist"><i class="fa fa-star"></i> Wishlist</a></li>
<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
<?php
if (has_access($session_user_id,1)=== true) {
	echo '<li><a href="admin"><i class="fa fa-unlock"></i> Admin</a></li>';
	echo '<li><a href="moderate"><i class="fa fa-unlock-alt"></i> Moderate</a></li>';
}elseif (has_access($session_user_id,2)=== true) {
	echo '<li><a href="moderate"><i class="fa fa-unlock-alt"></i> Moderate</a></li>';
}
?>
<li><a href="logout"><i class="fa fa-sign-out"></i> Logout</a></li>