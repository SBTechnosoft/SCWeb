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
<!-- SECTION -->
<div id="iview">
  <div data-iview:thumbnail="media/1920x960/2.jpg" data-iview:image="media/1920x960/2.jpg" data-iview:transition="block-drop-random" data-iview:pausetime="2000">
    <div class="container">
      <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
        <h3>mountain bikes</h3>
        <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
        <a href="#banner01" class="btn">EXPLORE NOW</a> </div>
    </div>
  </div>
  <div data-iview:thumbnail="media/1920x960/3.jpg" data-iview:image="media/1920x960/3.jpg">
    <div class="container">
      <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
        <h3>xTreme-Bikes</h3>
        <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
        <a href="#banner01" class="btn">EXPLORE NOW</a> </div>
    </div>
  </div>
  <div data-iview:thumbnail="media/1920x960/4.jpg" data-iview:image="media/1920x960/4.jpg">
    <div class="container">
      <div class="iview-caption text-center bg-no-caption" data-x="280" data-y="180" data-transition="expandUp">
        <h3>xTreme-Sports</h3>
        <p> FINE TUNED, SLEEK & SMOOTH, THIS SLIDER WILL IMPRESS YOUR VISITORS</p>
        <a href="#banner01" class="btn">EXPLORE NOW</a> </div>
    </div>
  </div>
</div>

<section  class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="bounceInUp" >
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading " >OUR PRODUCTS</h2>
        </div>
      </div>
    </div>
    
    <!--Modal box-->
    <div class="quick-view-modal modal fade" id="quick-view-id47"  >
      <div class="modal-content"> </div>
    </div>
    <div class="row text-center">
      <section class="xcarousel-4 animated" data-animation="bounceInUp" >
        <div class="x-frame" >
          <ul class="x-slider product-grid">
		  <?php
			$rowMainProd=getProd($conn);
			$countProd=count($rowMainProd);
			for($i=0;$i<$countProd;$i++)
			{ 
		?>
            <li>
              <div class="product-container">
                <div class="product-image"> 
                  <div class="btn-action-item"> <a href="<?php echo DIR_PRODUCT.$rowMainProd[$i]['prod_img_dtl'];?>" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product_detail.php?id=<?php echo $rowMainProd[$i]['prod_img_id'];?>"> <img class="" src="<?php echo DIR_PRODUCT.$rowMainProd[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a> </div>
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
			?>
          </ul>
        </div>
        <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
      </section>
    </div>
  </div>
</section>


<!-- SECTION --> 

<!-- SECTION -->

<section  class="no-bg-color-parallax parallax-black home-section" style="background-image:url(media/bg/2.jpg)" >
  <ul class="bg-slideshow">
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/2.jpg)"></div>
    </li>
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/3.jpg)"></div>
    </li>
  </ul>
  <div class="container">
    <div class="row">
      <div class="col-lg-4  col-md-4  col-xs-12  text-center " >
        <div class="ft-box animated"   data-animation="bounceInUp">
          <div class="ft-icon-box "> <img src="img/iconic/05.png"  alt="img"/></div>
          <hr style="max-width:30px;">
          <h4> XTREME SPORTS</h4>
          <p>Fusce ut odio get eleifend tincidunt vestibulum fring
            al rsus in metus. Sep interd umli uam scelerisque.
            Nam odiodui vestibulum amolestie pulvinar</p>
        </div>
      </div>
      <div class="col-lg-4  col-md-4  col-xs-12  text-center  animated"   data-animation="bounceUp" >
        <div class="ft-box animated"   data-animation="bounceInUp">
          <div class="ft-icon-box "> <img src="img/iconic/06.png"  alt="img"/></div>
          <hr style="max-width:30px;">
          <h4>ACHIEVEMENTS</h4>
          <p>Fusce ut odio get eleifend tincidunt vestibulum fring
            al rsus in metus. Sep interd umli uam scelerisque.
            Nam odiodui vestibulum amolestie pulvinar</p>
        </div>
      </div>
      <div class="col-lg-4  col-md-4  col-xs-12  text-center">
        <div class="ft-box animated"   data-animation="bounceInUp">
          <div class="ft-icon-box "> <img src="img/iconic/07.png"  alt="img"/></div>
          <hr style="max-width:30px;">
          <h4>OUR TARGETS</h4>
          <p>Fusce ut odio get eleifend tincidunt vestibulum fring
            al rsus in metus. Sep interd umli uam scelerisque.
            Nam odiodui vestibulum amolestie pulvinar</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-footer sf-type-2">
      <div class="sf-left" style="background-color:#f4f4f4"></div>
      <div class="sf-right"  style="background-color:#f4f4f4" ></div>
    </div>
  </div>
</section>

<!-- SECTION -->

<section style="background-color:#f4f4f4;" class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated" data-animation="bounceInUp">
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading"> OUR ACHIEVEMENTS</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class=" xcarousel-1 animated"  data-animation="bounceInUp" >
        <div class="x-frame" >
          <ul class="x-slider">
		  <?php
			$rowAchive=getAchive($conn);
			$countAchive=count($rowAchive);
			for($i=0;$i<$countAchive;$i++)
			{ 
		?>
            <li>
              <div class="x-item-wrap">
                <div class="avatar"> 
				<img src="<?php echo DIR_ACHIVEMENT.$rowAchive[$i]['achive_img'];?>" width="198" height="120" alt="img">
                  <h4><?php echo $rowAchive[$i]['achive_name']; ?></h4>
                </div>
                <div class="details">
                  <h4><b><?php echo $rowAchive[$i]['achive_name']; ?></b></h4>
                  <p style="line-height:20px;height:80px;overflow:hidden;"><?php echo $rowAchive[$i]['achive_desc']; ?></p>
                  <a href="achivement.php?id=<?php echo $rowAchive[$i]['achive_id']; ?>" class="fa-box-arrow"> <i class="fa fa-chevron-right"></i></a> </div>
              </div>
            </li>
			<?php }?>
          </ul>
        </div>
        <div class="x-navigation navigation"> <a class="btn slider-direction prev-page" href="javascript:void(0);"><i class="icomoon-arrow-left2"></i></a> <a class="btn  slider-direction next-page" href="javascript:void(0);"><i class="icomoon-arrow-right2"></i></a> </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-footer ">
      <div class="sf-left" style="background-color:#fff"></div>
      <div class="sf-right"  style="background-color:#fff" ></div>
    </div>
  </div>
</section>

<!-- SECTION -->

<section  class="home-section">
  
  
  
  <!--  Inserts  contents for ID 12   -->
  
  <div class="portfolio-modal modal fade" id="myModal-id-12"  >
    <div class="modal-content"> </div>
  </div>
  <div class="container">
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

<!-- SECTION -->

<section class="no-bg-color-parallax parallax-black home-section"  style="background-image:url(media/bg/3.jpg)">
  <ul class="bg-slideshow">
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/3.jpg)"></div>
    </li>
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/4.jpg)"></div>
    </li>
  </ul>
  <div class="container">
    <div class="row">
      <div class="cd-events-wrapper cd-container animated" data-animation="bounceInUp">
        <ul class="cd-events">
		<?php
			$rowMainEventPost=getEventIndex($conn);
			$countPost=count($rowMainEventPost);
			for($i=0;$i<$countPost;$i++)
			{ 
		?>
          <li>
            <div class=" col-sm-12 col-md-2 col-lg-2"  >
              <div class="events-image"><img src="<?php echo DIR_EVENTBANER.$rowMainEventPost[$i]['event_baner_dtl'];?>"  alt="img"/> </div>
              <a href="event_detail.php?id=<?php echo $rowMainEventPost[$i]['event_id'];?>" class="cd-see-all btn  hang">See event</a> </div>
            <div class=" col-sm-12 col-md-6 col-lg-6"  >
              <div class="events-content">
                <h3>EVENT: <strong><?php echo $rowMainEventPost[$i]['event_name']; ?></strong></h3>
                <div class="events-date"><?php echo date('d-M-y',strtotime($rowMainEventPost[$i]['start_date_time'])); ?></div>
                <p style="line-height:20px;height:60px;overflow:hidden;"><?php echo $rowMainEventPost[$i]['event_desc']; ?></p>
              </div>
            </div>
            <div class=" col-sm-12 col-md-4 col-lg-4"  >
              <div class="x-coutdown">
                <h5> THE COUNTDOWN BEGINS</h5>
                <div class="x-coutdown">
                  <div id="x-coutdown-timer" data-countdown="<?php echo date('Y',strtotime($rowMainEventPost[$i]['start_date_time'])); ?>/<?php echo date('m',strtotime($rowMainEventPost[$i]['start_date_time'])); ?>/<?php echo date('d',strtotime($rowMainEventPost[$i]['start_date_time'])); ?>"></div>
                </div>
              </div>
            </div>
          </li>
				<?php }?>
          
          
        </ul>
        <!-- cd-events --> 
        
        
        
         <script>
    
   $(document).ready(function(){ 


     /////////////////////////////////////
    //  Clock
    /////////////////////////////////////
		
$('[data-countdown]').each(function() {
   var $this = $(this), finalDate = $(this).data('countdown');
   $this.countdown(finalDate, function(event) {

	 $this.html(event.strftime(''
     + '<div class="x-cdr"><span>%D</span> <strong>day%!d</strong> </div>'
     + '<div class="x-cdr"><span>%H</span> <strong>hr</strong> </div>'
     + '<div class="x-cdr"><span>%M</span> <strong>min</strong> </div>'
     + '<div class="x-cdr last"><span>%S</span> <strong>sec</strong> </div>'));
 
	 
   });
 });

});

   </script> 
 </div>
      
      <!--Modal Events Grid-->
      
      
    </div>
  </div>
</section>

<!-- SECTION -->

<section class="home-section" >
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="bounceInUp" >
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading">Our Management</h2>
         
        </div>
      </div>
    </div>
    <div class="text-center">
      <main id="cd-team"> 
        
        <!--Start Carousel-->
        <section class="xcarousel-2 animated" data-animation="bounceInUp" >
          <div class="x-frame" >
            <ul class="x-slider">
              <li> <a href="#0" data-type="member-1">
                <figure> <img    
          src="media/270x337/1.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">LINDA </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">SUPPORT STAFF</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
              <li> <a href="#0" data-type="member-2">
                <figure> <img    
          src="media/270x337/2.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">Mike </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">FITNESS TRAINER</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
              <li> <a href="#0" data-type="member-3">
                <figure> <img    
          src="media/270x337/3.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">Ron </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">SKATEBOARD</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
              <li> <a href="#0" data-type="member-4">
                <figure> <img    
          src="media/270x337/4.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">ANDREA </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">MOUNTAINER</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
              <li> <a href="#0" data-type="member-1">
                <figure> <img    
          src="media/270x337/1.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">LINDA </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">SUPPORT STAFF</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
              <li> <a href="#0" data-type="member-2">
                <figure> <img    
          src="media/270x337/2.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">Mike </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">FITNESS TRAINER</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
              <li> <a href="#0" data-type="member-3">
                <figure> <img    
          src="media/270x337/3.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">Ron </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">SKATEBOARD</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
              <li> <a href="#0" data-type="member-4">
                <figure> <img    
          src="media/270x337/4.jpg" width="270" height="337" alt="img"/>
                  <div class="cd-img-overlay  ">
                    <div class="x-hover"> <span class="x-hover-text">View Bio</span> </div>
                  </div>
                </figure>
                <div class="cd-member-info">
                  <h4 class="staff-name">ANDREA </h4>
                </div>
                <!-- cd-member-info --> 
                </a>
                <div class="staff-wrap">
                  <h5 class="staff-position">MOUNTAINER</h5>
                  <ul class="social-team">
                    <li><a target="_blank" href="https://www.facebook.com/"><i class="icomoon-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/"><i class="icomoon-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.google.com/"><i class="icomoon-googleplus"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.com/"><i class="icomoon-pinterest"></i></a></li>
                  </ul>
                  <div class="staff-shorty">
                    <p>Personal Trainer, Body Builder,
                      3 Times Country Champion,
                      Water Sports Expert, Gold Medalist</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="x-navigation team-navigation"> <a class="btn slider-direction prev-page" href="javascript:void(0);"><i class="icomoon-arrow-left2"></i></a> <a class="btn  slider-direction next-page" href="javascript:void(0);"><i class="icomoon-arrow-right2"></i></a> </div>
          <!-- end-carousel --> 
          
        </section>
        <!-- cd-team -->
        
        <div class="cd-overlay"></div>
      </main>
      <div class="cd-member-bio member-1">
        <div class="cd-member-bio-pict"> <img src="media/270x337/1.jpg" width="270" height="337" alt="img"/> </div>
        <!-- cd-member-bio-pict -->
        
        <div class="cd-bio-content">
          <h1>John Smith</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
        </div>
        <!-- cd-bio-content --> 
      </div>
      <!-- cd-member-bio -->
      
      <div class="cd-member-bio member-2">
        <div class="cd-member-bio-pict"> <img src="media/270x337/2.jpg" width="270" height="337" alt="img"/> </div>
        <!-- cd-member-bio-pict -->
        
        <div class="cd-bio-content">
          <h1>Cristina Cameron</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
        </div>
        <!-- cd-bio-content --> 
      </div>
      <!-- cd-member-bio -->
      
      <div class="cd-member-bio member-3">
        <div class="cd-member-bio-pict"> <img src="media/270x337/3.jpg" width="270" height="337" alt="img"/> </div>
        <!-- cd-member-bio-pict -->
        
        <div class="cd-bio-content">
          <h1>Meet Samuel Noel</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
        </div>
        <!-- cd-bio-content --> 
      </div>
      <div class="cd-member-bio member-4">
        <div class="cd-member-bio-pict"> <img src="media/270x337/4.jpg" width="270" height="337" alt="img"/> </div>
        <!-- cd-member-bio-pict -->
        
        <div class="cd-bio-content">
          <h1>Meet Samuel Noel</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, amet, voluptatibus et omnis dolore illo saepe voluptatem qui quibusdam sunt corporis ut iure repellendus delectus voluptate explicabo temporibus quos eaque?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo, doloribus, esse rem officia quas facilis eius alias similique ducimus amet quam odio perspiciatis dolorem ipsam! Ab, dolores, adipisci, explicabo pariatur illum deleniti quam iusto placeat nisi aliquam praesentium mollitia eligendi a! Sequi, voluptatibus sed quos possimus harum rem tempore fugiat? Corporis, officia, assumenda, asperiores blanditiis quidem aliquam fugiat vel excepturi velit provident aut omnis quos aliquid tempora eaque. Nemo, eveniet, sint maxime eum maiores totam est inventore numquam voluptatem hic nam blanditiis placeat illum nesciunt voluptatum eos cum quos magni voluptates ipsam. Perspiciatis alias ducimus libero. Quo provident omnis fugiat ut repellendus optio cum quaerat odio et ipsa. Molestias, atque repellat non maxime amet corporis magni libero quam numquam error beatae at asperiores et a porro nostrum ab necessitatibus esse aliquid iure repellendus obcaecati unde quo eius eum dolores quasi consectetur culpa velit optio! Sequi, dolor, minima, veniam doloribus in ullam cupiditate iste animi ipsum esse eaque similique illo temporibus magni et earum amet sint deleniti est reiciendis. Maxime, quis, animi, ad quasi adipisci suscipit alias iste reprehenderit ea placeat nulla commodi nobis magnam provident veniam earum odit eveniet possimus aut voluptatum dolorum culpa necessitatibus facere totam quisquam. Ipsam.</p>
        </div>
        <!-- cd-bio-content --> 
      </div>
      <!-- cd-member-bio --> 
      <a href="#0" class="cd-member-bio-close">Close</a> <!-- close the author bio section --> 
      
    </div>
  </div>
  <div class="container">
    <div class="section-footer ">
      <div class="sf-left" style="background-color:#f4f4f4"></div>
      <div class="sf-right"  style="background-color:#f4f4f4" ></div>
    </div>
  </div>
</section>

<!-- SECTION --> 
<section class="no-bg-color-parallax  parallax-white  home-section" style="background-image:url(media/bg/1.jpg)"    >
  <ul class="bg-slideshow"  >
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/1.jpg)"></div>
    </li>
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/2.jpg)"></div>
    </li>
  </ul>
  <div  class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="bounceInUp"  >
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading">ABOUT THE CLUB</h2>
          <h3 class="section-subheading hang">XTREME SPORTS CLUB</h3>
        </div>
      </div>
    </div>
    <div  class="container">
      <div class="row">
        <div class="col-lg-6"> 
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="about1">
              <blockquote class="blockquote-title"> OUR
                MISSION
                STATEMENT </blockquote>
              <blockquote class="blockquote-quote"> <i class="fa fa-quote-left"></i>
                <p>Pellentesque eu lacus. Vivamus lorem arcu semper eget uldel
                  corper ut blandit sed nisa Phasellus conse quated Inte ger vel tortor. Sed hendrerit. In magna leo fermentum sed iacu lisnw interdum et elit. </p>
                <p>Pellentesque felis nunc interdum vitae pretium acbib egndum vel velit. Etiam proin luctus sodales elit. Vestibulum eros nunc pellentesque quis viverra.</p>
              </blockquote>
              <div class="avatar-about"> <img src="media/270x337/3.jpg" width="269" height="345" alt="img"/>
                <h4>HENRY ANDERSON </h4>
                <p>MANAGER XTREME CLUB</p>
                <p>Gold Medalist, Olympics 2012</p>
              </div>
            </div>
            <div class="tab-pane" id="about2">
              <blockquote class="blockquote-title"> OUR
                MISSION
                STATEMENT </blockquote>
              <blockquote class="blockquote-quote"> <i class="fa fa-quote-left"></i>
                <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur.</p>
              </blockquote>
              <div class="avatar-about"> <img src="media/270x337/2.jpg" width="269" height="345" alt="img"/>
                <h4>HENRY ANDERSON </h4>
                <p>MANAGER XTREME CLUB</p>
                <p>Gold Medalist, Olympics 2012</p>
              </div>
            </div>
            <div class="tab-pane" id="about3">
              <blockquote class="blockquote-title"> OUR
                MISSION
                STATEMENT </blockquote>
              <blockquote class="blockquote-quote"> <i class="fa fa-quote-left"></i>
                <p>Mauris a nunc occideritis me rectum. Videtur quod Ive facillimum, qui fecit vos. Potes me interficere, sine testibus et tunc manere in pauci weeks vel mensis vestigia Isai Pinkman et vos quoque illum occidere. Exercitium inutili option A. Videtur mihi quod autem est. .</p>
              </blockquote>
              <div class="avatar-about"> <img src="media/270x337/1.jpg" width="269" height="345" alt="img"/>
                <h4>HENRY ANDERSON </h4>
                <p>MANAGER XTREME CLUB</p>
                <p>Gold Medalist, Olympics 2012</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-tabs-wrap"> 
            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs about-tabs">
              <li class="active"><a href="#about1"  data-toggle="tab"><img src="media/tab1.jpg" width="170" height="280" alt="tab-img"></a>
                <div class="tab-li-content">
                  <h4> We Are Best <strong>Xtreme Sports Club </strong></h4>
                  <p>Fusce ut odio eget elit eleifend tincidunt Vestibulum fringil lal rsus in metus. Sep interd eli Aliquam scelerisque. Donec congue pede egu lacus. Vestibulum fringilla nullda ultricies sem.Aliquam nudnc urnai ornare sed, tincidunt quis, posuere d justo. Intemetus eros volutpat leo, id auctor eit ore eu orci. </p>
                </div>
              </li>
              <li><a href="#about2"  data-toggle="tab"><img src="media/tab2.jpg" width="170" height="280" alt="tab-img"></a>
                <div class="tab-li-content">
                  <h4> We Are Best <strong>Xtreme Sports Club </strong></h4>
                  <p>Fusce ut odio eget elit eleifend tincidunt Vestibulum fringil lal rsus in metus. Sep interd eli Aliquam scelerisque. Donec congue pede egu lacus. </p>
                </div>
              </li>
              <li><a href="#about3"  data-toggle="tab"><img src="media/tab3.jpg" width="170" height="280" alt="tab-img"></a>
                <div class="tab-li-content">
                  <h4> We Are Best <strong>Xtreme Sports Club </strong></h4>
                  <p>Fusce ut odio eget elit eleifend tincidunt Vestibulum fringil lal rsus in metus. Sep interd eli Aliquam scelerisque. Donec congue pede egu lacus. Vestibulum fringilla nullda ultricies sem.Aliquam nudnc urnai ornare sed, tincidunt quis, posuere d justo. Integer consectetu erd lacus sit amet aliquet con sequati metus eros volutpat leo, id auctor eit ore eu orci. </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-footer">
      <div class="sf-left" style="background-color:#f4f4f4"></div>
      <div class="sf-right"  style="background-color:#f4f4f4" ></div>
    </div>
  </div>
</section>



<section style="background-color:#f4f4f4;" class="home-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap animated"  data-animation="bounceInUp" >
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading">Our Happy Client</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <section class="xcarousel-3 animated" data-animation="bounceInUp" >
        <div class="x-frame" >
          <ul class="x-slider review-slider">
		  <?php
			$rowtest=gettest($conn);
			$counttest=count($rowtest);
			for($i=0;$i<$counttest;$i++)
			{ 
		?>
            <li>
              <div class="avatar-review "> <img src="<?php echo DIR_TESTIMONIAL.$rowtest[$i]['testimonial_img'];?>" width="269" height="500" alt="img"/> </div>
              <div class="details-review">
                <p><?php echo $rowtest[$i]['testimonial_desc']; ?> </p>
                <div class="autor-date"> <i class="fa fa-quote-left"></i>
                  <h5>By Admin</h5>

                </div>
              </div>
            </li>
			<?php }?>
          </ul>
        </div>
        <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
      </section>
    </div>
  </div>
</section>

<!-- SECTION -->

<section class="no-bg-color-parallax parallax-black home-section text-center"  style="background-image:url(media/bg/5.jpg)"  >
  <ul class="bg-slideshow">
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/5.jpg)"></div>
    </li>
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/6.jpg)"></div>
    </li>
  </ul>
  <div  class="container">
    <div class="row">
      <div class="col-lg-6"> </div>
      <div class="col-lg-6">
        <p>&nbsp;</p  >
        <p>&nbsp;</p  >
        <p>&nbsp;</p>
        <a href="https://vimeo.com/107685992?width=1160&amp;height=610" class="video-popab animated"  data-animation="bounceInUp" ><img src="img/show-video.png" width="340" height="213" alt="img"/></a>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION -->


<!-- SECTION -->

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
          <h3 class="section-subheading hang">WE�RE ALL ABOUT XTREME SPORTS</h3>
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
            <ul>
              <li>
                <div class="icon-set-wrap">
                  <div class="icon-set"><a><i class="fa fa-map-marker   "></i></a></div>
                  <div class="content-icon-set">121 King Street, Melbourne 
                    Victoria 3000 Australia </div>
                </div>
              </li>
              <li>
                <div class="icon-set-wrap">
                  <div class="icon-set"><a><i class="fa   fa-envelope   "></i></a></div>
                  <div class="content-icon-set"><a href="mailto:info@xtremesp.org">info@xtremesp.org</a> <a href="mailto:support@xtremesp.org">support@xtremesp.org</a></div>
                </div>
              </li>
              <li>
                <div class="icon-set-wrap">
                  <div class="icon-set"><a><i class="fa  fa-phone "></i></a></div>
                  <div class="content-icon-set">0800 123 4567
                    +1 234 56789-0</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<section class="no-bg-color-parallax parallax-black home-section text-center" style="background-image:url(media/bg/7.jpg)">
  <ul class="bg-slideshow">
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/7.jpg)"></div>
    </li>
    <li>
      <div class="bg-slide" style="background-image:url(media/bg/4.jpg)"></div>
    </li>
  </ul>
  
</section></br>


<!-- SECTION -->

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
