<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="<?php if($_SERVER['REQUEST_URI'] == "/moderate" ){ echo 'active'; }?>">
            <a  href="moderate"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

          <li class="<?php if(isset($_GET['orders'])){ echo 'active'; }?>">
            <a  href="moderate?orders"><i class="fa fa-fw fa-shopping-bag"></i> Orders</a>
        </li>

         <li class="<?php if(isset($_GET['reports'])){ echo 'active'; }?>">
            <a  href="moderate?reports"><i class="fa fa-fw fa-bar-chart-o"></i> Reports</a>
        </li>
        <li class="<?php if(isset($_GET['products'])){ echo 'active'; }?>">
            <a  href="moderate?products"><i class="fa fa-fw fa-tag"></i> View Products</a>
        </li>
        <li class="<?php if(isset($_GET['add_product'])){ echo 'active'; }?>">
            <a  href="moderate?add_product"><i class="fa fa-fw fa-cart-plus"></i> Add Product</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->