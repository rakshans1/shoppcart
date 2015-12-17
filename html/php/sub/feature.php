
<div class="col-sm-4 col-xs-6">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img class ="img-thumbnail " src="<?php echo $pimage; ?>"  alt="" />
                    <h2>Rs.<?php echo $pprice; ?></h2>
                    <?php $srt = str_replace("_"," ","$pname");?>
                    <p><?php echo strtoupper ($srt); ?></p>

                    <div class="row">
                        <div class="col-sm-6">
                        <a href="#" class="btn btn-default btn-block add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-default btn-block add-to-cart"><i class="fa fa-info-circle"></i>Details</a>
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