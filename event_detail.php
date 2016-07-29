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

<?php include(FILENAME_HOMEMENU);?>	

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Event</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Event</a></li>
      <li class="active">Post</li>
    </ol>
  </div>
</div>



<main class="section" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9">
        <section class="main-content" role="main">
		
          <article class="post media-image   format-image animated" data-animation="bounceInUp">
		  <?php
						$rowslider=getSingleEvent($conn);
						$countslider=count($rowslider);
						for($i=0;$i<$countslider;$i++)
						{ ?>
            <div class="entry-media">
              <div class="box-date-post"> <span class="date-1"><?php echo date('d',strtotime($rowslider[$i]['start_date_time'])); ?> </span> <span class="date-2"><?php echo date('M',strtotime($rowslider[$i]['start_date_time'])); ?></span> </div>
              <div class="entry-thumbnail">
                <div class="sticky-post"><i class="icon-pin"></i></div>
                <div class="post-type-media type-image"><i class="icon-picture"></i></div>
                <div class="img-overlay "> <a  href="media/830x400/1.jpg" class="link-view-more magnific"></a> </div>
                <img src="<?php echo DIR_EVENTBANER.$rowslider[$i]['event_baner_dtl'];?>" width="830" height="400" alt=""/> </div>
            </div>
            <div class="entry-main">
              <h3 class="entry-title"> <?php echo $rowslider[$i]['event_name']; ?> </h3>
              <div class="entry-content">
                     <p><?php echo $rowslider[$i]['event_desc']; ?></p>
					                                            
              </div>
            </div>
						<?php }?>
			<div class="col-md-9  col-sm-9 product-info animated" data-animation="bounceInUp">
              <div id="tab-info-anchore"></div>
              
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">DESCRIPTION</a></li>
               
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1">
                  <p>Pergo coctione, et ego, et tu oblivisci Pinkman. Obliviscendum hoc unquam factum. Intelligamus hoc in sola SINGULTO multo aliter atque fructuosa negotium structura. Malo B. Option. </p>
                  <p>Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.</p>
                  <p>&nbsp;</p>
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <h4><i class="fa fa-flag"></i> One Font, 479 Icons</h4>
                      In a single collection, Font Awesome is a pictographic language of web-related actions.
                      <hr>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                      <h4><i class="fa fa-pencil"></i> CSS Control</h4>
                      Easily style icon color, size, shadow, and anything that's possible with CSS.
                      <hr>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <h4><i class="fa fa-eye"></i> Perfect on Retina Displays</h4>
                      Font Awesome icons are vectors, which mean they're gorgeous on high-resolution displays.
                      
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <h4><i class="fa fa-desktop"></i> Desktop Friendly</h4>
                      To use on the desktop or for a complete set of vectors,
                      check out the <a href="./cheatsheet/">cheatsheet</a>. </div>
                    
                  </div>
                </div>
                
               
              </div>
            </div>
    <div class="footer-panel">  
       <div class="social-box">
           <h4>SHARE THIS STORY</h4>  
              <ul class="social-links">
				<li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
				<li class=""><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
				<li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
				<li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
              </ul>
        </div>
    </div>
        <section class="about-autor">
          
             <div class="comments-header"><span>Organizer</span>  </div>
				<article class="comment img">
                    <div class="avatar-placeholder"> <img width="269" height="345" alt="img" src="media/270x337/1.jpg"></div>
                    <header class="comment-header"> <cite class="comment-author">Rosie Thompson</cite>
                      <time datetime="2012-10-27 15:20" class="comment-datetime"><span aria-hidden="true" class="icon-clock"></span> 27 October 2013, 15:20</time>
                    </header>
                    <div class="comment-body">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                      <div class="transform-revers comment-reply"> <i class="fa fa-share"></i> <a href="#"> Reply </a></div>
                    </div>
                 </article>
          
          </section>
          
          <section class="section-comment">
              <div class="comments-header"><span>Comments <a href="#">(6)</a></span>  </div>
              
              <!-- COMMENT LIST -->
              <ul class="comments-list unstyled clearfix">
                <li class="animated"  data-animation="bounceInUp">
                  <article class="comment img">
                    <div class="avatar-placeholder"> <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/></div>
                    <header class="comment-header"> <cite class="comment-author">Rosie Thompson</cite>
                      <time class="comment-datetime" datetime="2012-10-27 15:20"><span class="icon-clock" aria-hidden="true"></span> 27 October 2013, 15:20</time>
                    </header>
                    <div class="comment-body">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                      <div class="transform-revers comment-reply"> <i class="fa fa-share"></i> <a href="#"> Reply </a></div>
                    </div>
                  </article>
                  <ul class="children clearfix">
                    <li>
                      <article class="comment img">
                   <div class="avatar-placeholder"> <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/></div>
                        <header class="comment-header"> <cite class="comment-author">Rosie Thompson</cite>
                          <time class="comment-datetime" datetime="2012-10-27 15:20"><span class="icon-clock" aria-hidden="true"></span> 27 October 2013, 15:20</time>
                        </header>
                        <div class="comment-body">
                          <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                          <div class="transform-revers comment-reply"> <i class="fa fa-share"></i> <a href="#"> Reply </a></div>
                        </div>
                      </article>
                      <ul class="children clearfix">
                        <li>
                          <article class="comment img">
                             <div class="avatar-placeholder"> <img src="media/270x337/3.jpg" width="269" height="345" alt="img"/></div>
                            <header class="comment-header"> <cite class="comment-author">Rosie Thompson</cite>
                              <time class="comment-datetime" datetime="2012-10-27 15:20"><span class="icon-clock" aria-hidden="true"></span> 27 October 2013, 15:20</time>
                            </header>
                            <div class="comment-body">
                              <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                              <div class="transform-revers comment-reply"> <i class="fa fa-share"></i> <a href="#"> Reply </a></div>
                            </div>
                          </article>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <article class="comment img">
                        <div class="avatar-placeholder">  <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/> </div>
                        <header class="comment-header"> <cite class="comment-author">Rosie Thompson</cite>
                          <time class="comment-datetime" datetime="2012-10-27 15:20"><span class="icon-clock" aria-hidden="true"></span> 27 October 2013, 15:20</time>
                        </header>
                        <div class="comment-body">
                          <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                          <div class="transform-revers comment-reply"> <i class="fa fa-share"></i> <a href="#"> Reply </a></div>
                        </div>
                      </article>
                    </li>
                  </ul>
                </li>
                <li class="animated"  data-animation="bounceInUp">
                  <article class="comment img">
                    <div class="avatar-placeholder">  <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/> </div>
                    <header class="comment-header"> <cite class="comment-author">Rosie Thompson</cite>
                      <time class="comment-datetime" datetime="2012-10-27 15:20"><span class="icon-clock" aria-hidden="true"></span> 27 October 2013, 15:20</time>
                    </header>
                    <div class="comment-body">
                      <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque.</p>
                      <div class="transform-revers comment-reply"> <i class="fa fa-share"></i> <a href="#"> Reply </a></div>
                    </div>
                  </article>
                </li>
              </ul>
              <!-- // COMMENT LIST --> 
              
              <!-- COMMENT REPLY -->
              
              <form action="#" method="post" id="comment-reply-form" class="form-full-width">
                <div class="comments-header"><span>Leave a Comment<a href="#">(6)</a></span> 
                
                 </div>
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <input type="text" placeholder="Your Name" id="comment-author" name="author" required >
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <input type="email" id="comment-email" name="email" required placeholder="Your Email">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <div class="form-group">
                      <input type="text" id="comment-website" name="website" placeholder="Website" >
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="form-group">
                      <textarea id="comment-text" name="comment" required placeholder="Your Message"></textarea>
                    </div>
                  </div>
                  <div class="space30 clearfix"></div>
                  <div class="col-xs-12 col-sm-12 text-right">
                    <button class="btn btn-main btn-primary btn-lg uppercase" id="contact-submit"><span>SUBMIT REPLY</span></button>
                  </div>
                </div>
              </form>
              <!-- // COMMENT REPLY --> 
              
            </section>
            
            
          </article>
          
          
          
        </section>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3">
        <aside class="sidebar">
          <div class="widget widget-search ">
            <h3 class="widget-title"><span>Search Event</span></h3>
            <form role="search" method="get" id="searchform" class="searchform" action="/">
              <input type="text" placeholder="Search" value="" name="s"  >
              <button> <i class="fa fa-search"></i> </button>
            </form>
          </div>
          
         
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
                  </li>  <li>
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
