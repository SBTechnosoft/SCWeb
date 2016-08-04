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
<?php include(FILENAME_HOMEMENU);?>	</br></br>

<div id="cd-nav"> <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
  <nav id="cd-main-nav">
    <ul>
      <li class="active"><a href="index.html"><span>Home</span> <small>X-Sport Home Page</small> </a></li>
      <li><a href="blog.html"><span>NEWS & BLOG</span> <small>X-Sport News</small></a></li>
      <li ><a href="post.html"><span>Post </span> <small>X-Sport Post </small></a></li>
      <li><a href="shop.html" class="dropdown-toggle" data-toggle="dropdown"><span>Shop<b class="caret"></b></span> <small>SEE ALL MODELS</small></a>
        <ul>
          <li><a href="http://ow.ly/XqzNo">Home</a></li>
          <li><a href="catalog.html">Catalog</a></li>
          <li><a href="product.html"  >Product</a></li>
        </ul>
      </li>
      <li ><a href="page.html"><span>Page</span> <small>X-Sport page </small></a></li>
    </ul>
  </nav>
</div>

<div class="map"> <img src="media/map.jpg"  alt="map.jpg"/> </div></br></br>
<section class="no-bg-color-parallax parallax-black home-section text-center" style="background-image:url(media/bg/6.jpg)" >
  <ul class="bg-slideshow">
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/6.jpg)"></div>
    </li>
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/5.jpg)"></div>
    </li>
  </ul>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="bounceInUp" >
          <div class="small-logo"><img src="img/logo-white.png" width="106" height="36" alt=""/></div>
          <h2 class="section-heading"> CONTACT US</h2>
          <h3 class="section-subheading hang">WE’RE ALL ABOUT XTREME SPORTS</h3>
          <p>Lacus sit amet aliquet cons equate metus eros volutpat leo id ms auctor elit lorem eu orci. Suspendisse ante. Cras pedey Mauris lectus quam facilisis ad condimentum sit amet condm entum eudel justo. Sed eget nulla at quam.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <form name="sentMessage animated" data-animation="bounceInUp" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group form-group-text">
              <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
              <div id="success"></div>
              <button type="submit" class="btn btn-xl  hang">Send Message</button>
            </div>
          </div>
          <div class="col-md-3">
		  <?php
								$rowMainContact=getContactDetail($conn);
								$countCon=count($rowMainContact);
								for($i=0;$i<$countCon;$i++)
								{ ?>
            <ul>
              <li>
                <div class="icon-set-wrap">
                  <div class="icon-set"><a><i class="fa fa-map-marker   "></i></a></div>
                  <div class="content-icon-set"><?php echo $rowMainContact[$i]['contact_address'];?></div>
                </div>
              </li>
              <li>
                <div class="icon-set-wrap">
                  <div class="icon-set"><a><i class="fa   fa-envelope   "></i></a></div>
                  <div class="content-icon-set"><a href="mailto:info@xtremesp.org"><?php echo $rowMainContact[$i]['contact_email'];?></a> </div>
                </div>
              </li>
              <li>
                <div class="icon-set-wrap">
                  <div class="icon-set"><a><i class="fa  fa-phone "></i></a></div>
                  <div class="content-icon-set"><?php echo $rowMainContact[$i]['contact_phone'];?></div>
                </div>
              </li>
            </ul>
								<?php }?>
          </div>
        </div>
      </form>
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
<!-- User Agent --> 
<script src="js/cssua.js"></script> 

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
<!-- Loader --> 
<script src="plugins/loader/js/classie.js"></script> 
<script src="plugins/loader/js/pathLoader.js"></script> 
<script src="plugins/loader/js/main.js"></script> 



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
