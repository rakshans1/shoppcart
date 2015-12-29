<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="<?php if($_SERVER['REQUEST_URI'] == "/admin" ){ echo 'active'; }?>">
            <a  href="admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

          <li class="<?php if(isset($_GET['orders'])){ echo 'active'; }?>">
            <a  href="admin?orders"><i class="fa fa-fw fa-shopping-bag"></i> Orders</a>
        </li>

         <li class="<?php if(isset($_GET['reports'])){ echo 'active'; }?>">
            <a  href="admin?reports"><i class="fa fa-fw fa-bar-chart-o"></i> Reports</a>
        </li>
        <li class="<?php if(isset($_GET['products'])){ echo 'active'; }?>">
            <a  href="admin?products"><i class="fa fa-fw fa-tag"></i> View Products</a>
        </li>
        <li class="<?php if(isset($_GET['add_product'])){ echo 'active'; }?>">
            <a  href="admin?add_product"><i class="fa fa-fw fa-cart-plus"></i> Add Product</a>
        </li>
        
        <li class="<?php if(isset($_GET['categories'])){ echo 'active'; }?>">
            <a  href="admin?categories"><i class="fa fa-fw fa-server"></i> Categories</a>
        </li>
        <li class="<?php if(isset($_GET['users'])){ echo 'active'; }?>">
            <a  href="admin?users"><i class="fa fa-fw fa-user"></i> Users</a>
        </li>
    
    </ul>
</div>
<!-- /.navbar-collapse -->