<a class="link" href="<?php echo $pname; ?>">
<div class="col-sm-3 col-xs-6">
    <div class="thumbnail">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img src="<?php echo $pimage; ?>"  alt="" />
                    <h2>Rs.<?php echo $pprice; ?></h2>
                    <?php $srt = str_replace("_"," ","$pname");?>
                    <p><?php echo strtoupper ($srt); ?></p>
                    <div class="row">
                        <div class="col-sm-6">
                        <?php $s = $p_id;
                        if (isset($_SESSION['product_'.$s])) {
                           echo '<a href="cart?add='.$s.'" class="btn btn-default btn-block add-to-cart"><i class="fa fa-shopping-cart"></i>Added to cart</a>';
                        }else{
                             echo '<a href="cart?add='.$s.'" class="btn btn-default btn-block add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
                        }
                        ?>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo  $pname; ?>" class="btn btn-default btn-block add-to-cart"><i class="fa fa-info-circle"></i>Details</a>
                        </div>
                    </div>    
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</a>