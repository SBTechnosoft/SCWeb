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
    <h3 class="page-title float-left">Blog</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Blog</a></li>
     
    </ol>
  </div>
</div>



<main class="section" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9">
        <section class="main-content" role="main">
		<?php include('./blog_filter.php'); ?>
				
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
      <div class="col-xs-12 col-sm-12 col-md-3">
        <aside class="sidebar">
          <div class="widget widget-search ">
            <h3 class="widget-title"><span>Search Blog</span></h3>
            <form role="search" method="get" id="searchform" class="searchform" action="/">
              <input type="text" placeholder="Search" value="" name="s"  >
              <button> <i class="fa fa-search"></i> </button>
            </form>
          </div>
          
          <!-- CATEGORY LIST WIDGET -->
          <div class="widget widget-category">
            <h3 class="widget-title"><span>categories</span></h3>
            <ul class="category-list unstyled clearfix">
              <li><a href="blog.php">All</a></li>
			  <?php
				 $rowMainCategory=getBlogCat($conn);
				 $countCat=count($rowMainCategory);
				 for($i=0;$i<$countCat;$i++)
				 { 
			 ?>
              <li><a href="blog.php?<?php echo 'cat_name='.$rowMainCategory[$i]['blog_cat_name'].'&catid='.$rowMainCategory[$i]['blog_cat_id']?>"><?php echo $rowMainCategory[$i]['blog_cat_name']; ?></a></li>
			<?php }?>
            </ul>
          </div>
          <!-- // CATEGORY LIST WIDGET --> 
          <!-- TAGS WIDGET -->
          <div class="widget widget-tags">
            <h3 class="widget-title"><span>Tags cloud</span></h3>
            <ul class="tag-cloud unstyled clearfix">
              <li><a href="blog.php">All</a></li>
			  <?php
				$rowMainblogTag=getBlogTag($conn);
				$countblogTag=count($rowMainblogTag);
				for($i=0;$i<$countblogTag;$i++)
				{ 
			  ?>
              <li><a href="blog.php?<?php echo 'tag_name='.$rowMainblogTag[$i]['blog_tag_name'].'&tagid='.$rowMainblogTag[$i]['blog_tag_id']?>"><?php echo $rowMainblogTag[$i]['blog_tag_name']; ?></a></li>
			<?php }?>
            </ul>
          </div>
        </aside>
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
