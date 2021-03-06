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
    <h3 class="page-title float-left">Gallery</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Gallery</a></li>
      <li class="active">Gallery</li>
    </ol>
  </div>
</div>
<main class="section layout-col-2" id="main">
  <div class="container">
    <div class="row">
  
      <div class="col-xs-12 col-sm-12 col-md-12  col-resize ">
        <section class="main-content" role="main">
         
          
         
          <div class="catalog-grid">
			<ul class=" product-grid">
			<?php
			  $rowMainGallery=getGallery($conn);
			  $countgallery=count($rowMainGallery);
			 for($i=0;$i<$countgallery;$i++)
			{ ?>
				<li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> 
                    <div class="btn-action-item">
					<a href="<?php echo DIR_GALLERY.$rowMainGallery[$i]['gallary_img_name'];?>" class="magnific"><i class="icomoon-eye-open"></i></a> </div>
                   <img class="" src="<?php echo DIR_GALLERY.$rowMainGallery[$i]['gallary_img_name'];?>" width="600" height="900" alt="img"/></div>
					
                </div>
              </li>
			<?php }?>
			</ul>
          </div>
          <nav class="pagination">
            <ul>
              <li class="active"><a href="#" class="btn btn-primary"><span>1</span></a></li>
              <li><a href="#" class="btn btn-default">2</a></li>
              <li><a href="#" class="btn btn-default">3</a></li>
              <li><a href="#" class="btn btn-default">4</a></li>
              <li><a href="#" class="btn btn-default">5</a></li>
            </ul>
          </nav>
        </section>
      </div>
    </div>
  </div>
</main>


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
