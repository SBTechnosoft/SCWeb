<!DOCTYPE html>
<?php include("include/header.php");?>
<html lang="en">
<head>
<?php include(FILENAME_LINK);?>
<!-- jQuery-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
</head>

<body class="animated-all">
<?php include(FILENAME_HOMEMENU);?>	

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Product Deatil</h3>
    <ol class="breadcrumb float-right">
      <li><a href="product.php">Product</a></li>
      <li class="active">Product Datail</li>
    </ol>
  </div>
</div>
<div class="product-paging">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <div class="pull-left"> <a href="product.php" class="btn-arrow"> BACK TO PRODUCTS</a> </div>
        
      </div>
    </div>
  </div>
</div>
<main class="section layout-col-1" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12  ">
        <section class="main-content" role="main">
		<?php
					$rowMainCategory=getSingleProduct($conn);
					$countCat=count($rowMainCategory);
					for($i=0;$i<$countCat;$i++)
						{ 
					$company_id=$rowMainCategory[$i]['company_id'];
					$cat_id=$rowMainCategory[$i]['cat_id'];
			?>
          <div class="row">
            <div class="col-md-5">
              <div class="product-image-left animated" data-animation="bounceInUp">
                <div class="clearfix" id="image-block">
				
                  <div id="slider-product" class="flexslider">
                    <ul class="slides">
						
                      <li> <a href="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>"> <img src="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a> </li>
						
                    </ul>
                  </div>
				  
                  <div id="carousel" class="flexslider">
                    <ul class="slides">
                      <li> <img src="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/> </li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-7">
              <div class="product-right animated" data-animation="bounceInUp">
                <h3 class="product-title"><?php echo $rowMainCategory[$i]['prod_name'];?></h3>
                
                <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> 16 Review (s)  / <a class="add-rev-link" href="#tab-info-anchore">Add a Review </a></div>
                <hr>
                <div class="price-box"> <span class="price-regular-single">Rs.<?php echo $rowMainCategory[$i]['prod_prize'];?></span> </div>
                <hr>
                <div class="shorty-desc">
                  <p> <?php echo $rowMainCategory[$i]['prod_desc'];?></p>
                </div>
                <hr>
                <div class="footer-panel">
                   <div class="social-box">
                    <h4>SHARE THIS STORY</h4>
                    <ul class="social-links">
                      <li><a href="https://www.facebook.com/" target="_blank"><i class="icomoon-facebook"></i></a></li>
                      <li class=""><a href="https://twitter.com/" target="_blank"><i class="icomoon-twitter"></i></a></li>
                      <li><a href="https://www.google.com/" target="_blank"><i class="icomoon-googleplus"></i></a></li>
                      <li><a href="https://www.pinterest.com/" target="_blank"><i class="icomoon-pinterest"></i></a></li>
                    </ul>
                  </div>
                </div>
               
              </div>
            </div>
           </div>
			<?php }?>			
             <div class="row">
            <div class="col-md-9  col-sm-9 product-info animated" data-animation="bounceInUp">
              <div id="tab-info-anchore"></div>
              
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">Technology</a></li>
                <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">Specification</a></li>
                <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab">Size Chart</a></li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1">
                     <div class="row">
						<?php
								$rowMainCategory2=getTechnologyDtl($conn);
								$countCat2=count($rowMainCategory2);
								for($i=0;$i<$countCat2;$i++)
						{ ?>
							<div class="col-md-6 col-sm-6">
								<h4>Name</h4>
								<li><?php echo $rowMainCategory2[$i]['prod_tech_name'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Description</h4>
								<li><?php echo $rowMainCategory2[$i]['prod_tech_desc'];?></li>
								<hr>
							</div>
					   <?php }?>
					</div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab2">
					<div class="row">
						<?php
									$rowMainCategory3=getSpecData($conn);
									$countCat3=count($rowMainCategory3);
									for($i=0;$i<$countCat3;$i++)
									{ ?>
							<div class="col-md-6 col-sm-6">
								<h4>Frame</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_frame'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Travel</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_travel'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Fork</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_fork'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Rear Shock</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_rear_shock'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Remote System</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_remote_system'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Headset</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_headset'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Rear Derailleur</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_rear_drailleur'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Front Derailleur</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_front_drailleur'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Shifters</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_shifters'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Brakes</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_brakes'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Crankset</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_crankset'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>BB-Set</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_travel'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Handlebar</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_handelbar'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>H'stem</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_hstem'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Seatpost</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_seat_post'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Seat</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_seat'];?></li>
								<hr>
							</div>
								<div class="col-md-6 col-sm-6">
								<h4>Hub (Front)</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_hub_front'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Hub (Rear)</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_hub_rear'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Chain</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_chain'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Cassette</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_cassets'];?></li>
								<hr>
							</div>
								<div class="col-md-6 col-sm-6">
								<h4>Spokes</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_spokes'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Rims</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_rims'];?></li>
								<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Tires</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_tires'];?></li>
							<hr>
							</div>
							<div class="col-md-6 col-sm-6">
								<h4>Approx weights in KG</h4>
								<li><?php echo $rowMainCategory3[$i]['prod_spec_weight'];?></li>
								<hr>
							</div>
					   <?php }?>
					</div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab3">
                  
                 
                  
                </div>
              </div>
            </div>
            <div class="col-md-3   col-sm-3  product-carousel-right animated" data-animation="bounceInUp">
              <div class="widget widget-special">
                <h3 class="widget-title"><span>Similar Products</span></h3>
                <ul class="entry-list unstyled verticale-carousel">
				<?php
					$rowMain=getsimilarProduct($conn,$company_id);
					$count1=count($rowMain);
					for($i=0;$i<$count1;$i++)
						{ 
				?>
						
                  <li>
                    <div class="entry-thumbnail">  <img src="<?php echo DIR_PRODUCT.$rowMain[$i]['prod_img_dtl'];?>" width="600" height="700" alt=""/> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="product_detail.php?id=<?php echo $rowMain[$i]['prod_img_id'];?>"><?php echo $rowMain[$i]['prod_name'];?></a></h5>
                      </div>
                      <div class="entry-meta">
                        <div class="price-box"> <span class="price-regular-single">Rs.<?php echo $rowMain[$i]['prod_prize'];?></span> </div>
                      </div>
                    </div>
                  </li>
						<?php }?>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>




<section  class="x-section " >
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="flipInX" >
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading " >RELATED PRODUCTS</h2>
        </div>
      </div>
    </div>
    
   
    
    <div class="row text-center">
      <section class="xcarousel-4 animated " data-animation="bounceInUp">
        <div class="x-frame" >
          <ul class="x-slider product-grid ">
		  <?php
					$rowMain1=getsimilarCatProduct($conn,$cat_id);
					$count2=count($rowMain1);
					for($i=0;$i<$count2;$i++)
						{ 
				?>
				
            <li>
              <div class="product-container">
                <div class="product-image"> 
                  <div class="btn-action-item"> <a href="<?php echo DIR_PRODUCT.$rowMain1[$i]['prod_img_dtl'];?>" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product_detail.php?id=<?php echo $rowMain1[$i]['prod_img_id'];?>"> <img   
					src="<?php echo DIR_PRODUCT.$rowMain1[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text"><?php echo $rowMain1[$i]['prod_name'];?></span></h3>
                  <div class="price-box"> <span class="price-regular">Rs.<?php echo $rowMain1[$i]['prod_prize'];?></span> </div>
                  
              </div>
            </li>
						<?php }?>     
            
          </ul>
        </div>
        
      </section>
    </div>
  </div>
</section>



<section  class="x-section">

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap">
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading " >OUR BRAND</h2>
        </div>
      </div>
    </div>
    
    <!--Modal box-->
    <div class="quick-view-modal modal fade" id="quick-view-id47"  >
      <div class="modal-content"> </div>
    </div>
    
    <!---->
    
    <div class="row text-center">
      <section class="xcarousel-5 animated" data-animation="bounceInUp" >
        <div class="x-frame" >
          <ul class="x-carousel brand-carousel">
            <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/3.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/4.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/3.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/4.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/1.jpg"  alt="img"/></a> </li>
            <li> <a href="#"><img src="media/brand/2.jpg"  alt="img"/></a> </li>
          </ul>
        </div>
        <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
      </section>
    </div>
  </div>
</section>



<?php include(FILENAME_FOOTER);?>	




<!-- AlLL SCRIPTS & PLUGINS --> 


<!-- SWITCHER --> 
<script src="plugins/switcher/js/bootstrap-select.js"></script> 
<script src="plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
<script src="plugins/switcher/js/dmss.js"></script> 
<!-- MAIN SCRIPTS--> 

<!--Blazy image-->
<script type="text/javascript" src="js/blazy.min.js"></script> 

<!--Waypoint-->
<script src="js/waypoints.min.js"></script> 
<!--Ios Fix-->
<script src="js/ios-orientationchange-fix.js"></script> 
<!--Element form Styled-->
<script src="plugins/selectbox/jquery.selectbox-0.2.js"></script> 

<!--Sly Slider-->
<script type="text/javascript" src="plugins/sly/sly.min.js"></script> 
<!--Bx Slider-->
<script src="plugins/bxslider/jquery.bxslider.min.js"></script> 
<!--Flex Slider-->
<script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
<!-- Flickr--> 
<script src="plugins/jflickrfeed/jflickrfeed.min.js" ></script> 
<!-- Catalog Price--> 
<script src="plugins/nouislider/jquery.nouislider.min.js"></script> 
<!-- Magnific--> 
<script type="text/javascript" src="plugins/magnific/jquery.magnific-popup.js"></script> 
<!-- Pretty Photo --> 
<script src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script> 
<!-- SMart Menu --> 
<script src="plugins/smart-menu/smart-menu.js"></script> 
<!-- User agent --> 
<script type="text/javascript" src="js/cssua.min.js"></script> 


<!--SHOP SCRIPTS -->

<!--Catalog Points-->
<script src="plugins/points/points.js" ></script> 


<!--HOME SCRIPTS-->

<!--Isotope filter-->
<script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script> 
<!--Contact form-->
<script src="js/jqBootstrapValidation.js"></script> 
<script src="js/contact_me.js"></script> 
<!-- SMart Grid--> 
<script src="plugins/events/masonry.pkgd.min.js"></script> 
<!-- Events --> 
<script src="plugins/events/events.js"></script> 
<!--Count Down-->
<script src="plugins/countdown/jquery.countdown.min.js" ></script> 
<!-- Newsletter --> 
<script src="plugins/newsletter/main.js" ></script> 
<!-- Bio --> 
<script type="text/javascript" src="plugins/bio/js/bio.js"></script> 
<!--IVIEW--> 
<script src="plugins/iview/js/iview.js"></script> 


<!--Scripts-->
<script type="text/javascript" src="js/scripts.js"></script> 

</body>
</html>
