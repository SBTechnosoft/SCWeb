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




<!-- Switcher Only -->


<link rel="stylesheet" id="switcher-css" type="text/css" href="plugins/switcher/css/switcher.css" media="all" />
<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/pink.css" title="pink" media="all" />
<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/purple.css" title="purple" media="all" />
<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/blue.css" title="blue" media="all" />
<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/green.css" title="green" media="all" />
<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/red.css" title="red" media="all" />
<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/yellow.css" title="yellow" media="all" />


<!-- Switcher Only -->



</head>

<body class="animated-all">


<!-- Start Switcher -->
<div class="demo_changer">
  <div class="demo-icon"> <i class="fa fa-cog fa-spin fa-2x"></i> </div>
  <!-- end opener icon -->
  <div class="form_holder">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="predefined_styles">
          <h4>Color Skins </h4>
          <!-- MODULE #3 --> 
          <a href="" rel="pink" class="styleswitch"><img src="plugins/switcher/images/icons/pink.png" alt="img"></a> <a href="" rel="purple" class="styleswitch"><img src="plugins/switcher/images/icons/purple.png" alt="img"></a> <a href="" rel="blue" class="styleswitch"><img src="plugins/switcher/images/icons/blue.png" alt="img"></a> <a href="" rel="green" class="styleswitch"><img src="plugins/switcher/images/icons/green.png" alt="img"></a> <a href="" rel="red" class="styleswitch"><img src="plugins/switcher/images/icons/red.png" alt="img"></a> <a href="" rel="yellow" class="styleswitch"><img src="plugins/switcher/images/icons/yellow.png" alt="img"></a> 
          <!-- END MODULE #3 --> 
          
        </div>
        <!-- end predefined_styles --> 
      </div>
      <!-- end col --> 
      
      <!-- end col --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end form_holder --> 
</div>
<!-- end demo_changer --> 
<!-- End Switcher -->

<div i<?php include(FILENAME_HOMEMENU);?>	

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
          <!-- // TAGS WIDGET -->
          <!-- TABBED CONTENT WIDGET -->
          <div class="widget widget-tabbed">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab-popular">popular</a></li>
              <li><a data-toggle="tab" href="#tab-recent2">recent</a></li>
              <li><a data-toggle="tab" href="#tab-comments">comments</a></li>
            </ul>
            <div class="tab-content">
              <div id="tab-popular" class="tab-pane active">
                <ul class="entry-list unstyled">
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#">Phasellus vehicula auctor nisi.</a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 27 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-header">
                      <h5 class="entry-title"><a href="#">Cras temnpus dolor Donec eget ligula</a></h5>
                    </div>
                    <div class="entry-main">
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 12 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/3.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#"> Aliquam interdum  eget sagittis eget eros.</a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 7 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
              <div id="tab-recent2" class="tab-pane">
                <ul class="entry-list unstyled">
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/3.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#"> Aliquam interdum  eget sagittis eget eros.</a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 7 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#">Phasellus vehicula auctor nisi.</a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 27 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-header">
                      <h5 class="entry-title"><a href="#">Cras temnpus dolor Donec eget ligula</a></h5>
                    </div>
                    <div class="entry-main">
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 12 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
              
              <div id="tab-comments" class="tab-pane">
                <ul class="entry-list unstyled">
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#">Phasellus vehicula auctor nisi.</a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 27 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
              
                  <li>
                    <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/3.jpg" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#"> Aliquam interdum  eget sagittis eget eros.</a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 7 March , 2020</a> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>   <li>
                  <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/></a> </div>
                  <div class="entry-header">
                    <h5 class="entry-title"><a href="#">Cras temnpus dolor Donec eget ligula</a></h5>
                  </div>
                  <div class="entry-main">
                    <div class="entry-meta">
                      <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 12 March , 2020</a> </time>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
          <!-- // TABBED CONTENT WIDGET --> 
          
          <!-- FLICKR STREAM -->
          <div class="widget widget-flickr">
            <h3 class="widget-title"><span>FLICKR photos</span></h3>
            <ul id="flickr-feed2" class="flickr-feed">
            </ul>
          </div>
          <!-- // FLICKR STREAM --> 
          
          
          
          <div class="widget widget-newsletter ">
            <h3 class="widget-title"><span>Newsletter</span></h3>
            <form role="search" method="get" id="newsletterform" class="newsletterform" action="/">
              <input type="text" placeholder="Enter ID" value="" name="s"  >
              <button>SUBMIT</button>
            </form>
          </div>
          
          <!--  WIDGET -->
          <div class="widget widget-latest-post">
            <h3 class="widget-title"><span>LATEST POSTS</span></h3>
            <div class="x-carousel2"> 
              
              <!--Use BX carousel if more than 5 items--> 
              
              <script>
    
   $(document).ready(function(){ 

  $('.x-carousel2 ul').bxSlider({
         minSlides: 1, // item 5
          maxSlides: 1, // item 4
         slideWidth: 330,
        infiniteLoop:true ,
         auto: true,
          nextText: '',
          prevText: '',
		  pagerSelector:'1'
  });
 
});

   </script>
              <ul >
                <li>
                  <div class="media"> <a href="#"> <img src="media/730x625/2.jpg" width="730" height="625" alt="img"/></a>
                    <div class="media-desc">
                      <h5 class="entry-title"> PRAESENT DIAM LIBERO INTERDUM 
                        AT FRINGILLA IDINTERDUM</h5>
                      <time class="entry-datetime" datetime="2013-10-27" title="2013-10-27"> <a href="#"> <i class="fa fa-clock-o"></i> 11 March , 2013</a> </time>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a href="#"> <img src="media/730x625/3.jpg" width="730" height="625" alt="img"/></a>
                    <div class="media-desc">
                      <h5 class="entry-title"> PRAESENT DIAM LIBERO INTERDUM 
                        AT FRINGILLA IDINTERDUM</h5>
                      <time class="entry-datetime" datetime="2013-10-27" title="2013-10-27"> <a href="#"> <i class="fa fa-clock-o"></i> 11 March , 2013</a> </time>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a href="#"><img src="media/730x625/4.jpg" width="730" height="625" alt="img"/></a>
                    <div class="media-desc">
                      <h5 class="entry-title"> PRAESENT DIAM LIBERO INTERDUM 
                        AT FRINGILLA IDINTERDUM</h5>
                      <time class="entry-datetime" datetime="2013-10-27" title="2013-10-27"> <a href="#"> <i class="fa fa-clock-o"></i> 11 March , 2013</a> </time>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="entry-list unstyled">
              <li>
                <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/3.jpg" width="269" height="345" alt="img"/></a> </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h5 class="entry-title"><a href="#"> Aliquam interdum  eget sagittis eget eros.</a></h5>
                  </div>
                  <div class="entry-meta">
                    <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 7 March , 2020</a> </time>
                  </div>
                </div>
                <div class="clearfix"></div>
              </li>
              <li>
                <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/></a> </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h5 class="entry-title"><a href="#">Phasellus vehicula auctor nisi.</a></h5>
                  </div>
                  <div class="entry-meta">
                    <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 27 March , 2020</a> </time>
                  </div>
                </div>
                <div class="clearfix"></div>
              </li>
              <li>
                <div class="entry-thumbnail"> <a class="img" href="#"> <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/></a> </div>
                <div class="entry-header">
                  <h5 class="entry-title"><a href="#">Cras temnpus dolor Donec eget ligula</a></h5>
                </div>
                <div class="entry-main">
                  <div class="entry-meta">
                    <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <a href="#"><span class="icon-clock" aria-hidden="true"></span> 12 March , 2020</a> </time>
                  </div>
                </div>
                <div class="clearfix"></div>
              </li>
            </ul>
          </div>
          <!-- //  WIDGET --> 
          
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
