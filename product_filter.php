<?php
	if(isset($_GET['catid']))
		{
			$rowMainCategory=singlecatprod($conn,$_GET['catid']);
			$countcat=count($rowMainCategory);
			for($i=0;$i<$countcat;$i++)
			{ 
 ?>

				
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <span class="label-sale">sale</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product_detail.php?id=<?php echo $rowMainCategory[$i]['prod_img_id'];?>"> <img class="" src="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a>  </div>
                  <div class="product-bottom">
                    <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                      500 SOFTSHELL HIKING WEAR</span></h3>
                    <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
                    <div class="only-list-view">
                      <div class="product-desc">
                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger"> Add to cart </button>
                      </div>
                      <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                    </div>
                  </div>
                </div>
              </li>
		<?php }?>
<?php }
else if(isset($_GET['comid']))
{
	$rowMainComp=singlecompprod($conn,$_GET['comid']);
			$countcom=count($rowMainComp);
			for($i=0;$i<$countcom;$i++)
			{ 
?>
<li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <span class="label-sale">sale</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product_detail.php?id=<?php echo $rowMainComp[$i]['prod_img_id'];?>"> <img class="" src="<?php echo DIR_PRODUCT.$rowMainComp[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a>  </div>
                  <div class="product-bottom">
                    <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                      500 SOFTSHELL HIKING WEAR</span></h3>
                    <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
                    <div class="only-list-view">
                      <div class="product-desc">
                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger"> Add to cart </button>
                      </div>
                      <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                    </div>
                  </div>
                </div>
              </li>	
<?php
} 
}
else
{
	$rowMainProd=getProdImg($conn);
	$count=count($rowMainProd);
	for($i=0;$i<$count;$i++)
	{ 
?>
				<li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> 
                    <div class="btn-action-item"> <a href="<?php echo DIR_PRODUCT.$rowMainProd[$i]['prod_img_dtl'];?>" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product_detail.php?id=<?php echo $rowMainProd[$i]['prod_img_id'];?>"> <img class="" src="<?php echo DIR_PRODUCT.$rowMainProd[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a>  </div>
                  <div class="product-bottom">
                    <h3 class="product-name x-hover"><span class="x-hover-text"><?php echo $rowMainProd[$i]['prod_name'];?></span></h3>
                    <div class="price-box"> <span class="price-regular">Rs.<?php echo $rowMainProd[$i]['prod_prize'];?></span> </div>
                    <div class="only-list-view">
                      <div class="product-desc">
                        <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-danger"> Add to cart </button>
                      </div>
                      <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                    </div>
                  </div>
                </div>
              </li>
<?php 
	}
}?>