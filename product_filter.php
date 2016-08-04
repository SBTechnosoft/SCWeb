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
                  <div class="product-image"> 
                    <div class="btn-action-item"><a href="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product_detail.php?id=<?php echo $rowMainCategory[$i]['prod_img_id'];?>"> <img class="" src="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a>  </div>
                  <div class="product-bottom">
                    <h3 class="product-name x-hover"><span class="x-hover-text"><?php echo $rowMainCategory[$i]['prod_name'];?></span></h3>
                    <div class="price-box"> <span class="price-regular">Rs.<?php echo $rowMainCategory[$i]['prod_prize'];?></span> </div>
                    
                  </div>
                </div>
              </li>
		<?php }?>
<?php }
else if(isset($_GET['comid']))
{
	$rowMainComp=singlecompprod($conn,$_GET['comid']);
			$countcom=count($rowMainComp);
			for($j=0;$j<$countcom;$j++)
			{ 
?>
<li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <div class="btn-action-item"><a href="<?php echo DIR_PRODUCT.$rowMainComp[$j]['prod_img_dtl'];?>" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product_detail.php?id=<?php echo $rowMainComp[$j]['prod_img_id'];?>"> <img class="" src="<?php echo DIR_PRODUCT.$rowMainComp[$j]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a>  </div>
                  <div class="product-bottom">
                    <h3 class="product-name x-hover"><span class="x-hover-text"><?php echo $rowMainComp[$j]['prod_name'];?></span></h3>
                    <div class="price-box"> <span class="price-regular">Rs.<?php echo $rowMainComp[$j]['prod_prize'];?></span> </div>
                    
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
	for($k=0;$k<$count;$k++)
	{ 
?>
				<li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> 
                    <div class="btn-action-item"> <a href="<?php echo DIR_PRODUCT.$rowMainProd[$k]['prod_img_dtl'];?>" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product_detail.php?id=<?php echo $rowMainProd[$k]['prod_img_id'];?>"> <img class="" src="<?php echo DIR_PRODUCT.$rowMainProd[$k]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a>  </div>
                  <div class="product-bottom">
                    <h3 class="product-name x-hover"><span class="x-hover-text"><?php echo $rowMainProd[$k]['prod_name'];?></span></h3>
                    <div class="price-box"> <span class="price-regular">Rs.<?php echo $rowMainProd[$k]['prod_prize'];?></span> </div>
                    
                  </div>
                </div>
              </li>
<?php 
	}
}?>