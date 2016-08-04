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
		 <?php
						$rowslider=getSingleEvent($conn);
						$countslider=count($rowslider);
						for($i=0;$i<$countslider;$i++)
						{ ?>
          <article class="post media-image   format-image animated" data-animation="">
		 
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
			
			<div class="col-md-9  col-sm-9 product-info animated" data-animation="bounceInUp">
              <div id="tab-info-anchore"></div>
              
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">DESCRIPTION</a></li>
               
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1">
                  
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                      <h4><i class="fa fa-flag"></i>Palce</h4>
                     <?php echo $rowslider[$i]['event_place']; ?>
                      <hr>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                      <h4><i class="fa fa-pencil"></i>Time</h4>
                      <?php echo date('h-i A',strtotime($rowslider[$i]['start_date_time'])); ?>
                      <hr>
                    </div>
                   
                </div>
                
               
              </div>
            </div>
			
    
        <section class="about-autor">
          
             <div class="comments-header"><span>Organizer</span> </div>
				<article class="comment img">
                    <div class="avatar-placeholder"> <img width="269" height="345" alt="img" src="<?php echo DIR_EVENTORG.$rowslider[$i]['org_logo_dtl'];?>"></div>
                    <header class="comment-header"> <cite class="comment-author"><?php echo $rowslider[$i]['org_name']; ?></cite>
                      
                    </header>
                    <div class="comment-body">
                      <p><?php echo $rowslider[$i]['org_contact']; ?></p></br>
					  <p><?php echo $rowslider[$i]['org_website']; ?></p>
                      
                    </div>
                 </article>
				 <div class="comments-header"><span>Sponcer</span> </div>
				<article class="comment img">
                    <div class="avatar-placeholder"> <img width="269" height="345" alt="img" src="<?php echo DIR_EVENTSPON.$rowslider[$i]['spon_logo'];?>"></div>
                    <header class="comment-header"> <cite class="comment-author"><?php echo $rowslider[$i]['spon_name']; ?></cite>
                      
                    </header>
                    <div class="comment-body">
                      <p><?php echo $rowslider[$i]['spon_no']; ?></p></br>
					  <p><?php echo $rowslider[$i]['spon_website']; ?></p>
                      
                    </div>
                 </article>
          
          </section>
         
         
            
            
          </article>
          
          <?php }?>
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
              <li class="active"><a data-toggle="tab" href="#tab-popular">Upcoming</a></li>
              <li><a data-toggle="tab" href="#tab-recent2">recent</a></li>
              
            </ul>
            <div class="tab-content">
              <div id="tab-popular" class="tab-pane active">
                <ul class="entry-list unstyled">
				<?php
			$rowMainEventUp=getEventUp($conn);
			$countEvent=count($rowMainEventUp);
			for($i=0;$i<$countEvent;$i++)
			{ 
		?>
              <li>
                 <div class="entry-thumbnail"> <a class="img" href=""> <img src="<?php echo DIR_EVENTBANER.$rowMainEventUp[$i]['event_baner_dtl'];?>" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="event_detail.php?id=<?php echo $rowMainEventUp[$i]['event_id'];?>"><?php echo $rowMainEventUp[$i]['event_name']; ?> </a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="" datetime="" class="entry-datetime"><span class="icon-clock" aria-hidden="true"></span> <?php echo date('d-m-y',strtotime($rowMainEventUp[$i]['start_date_time'])); ?> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
			<?php }?>
                 
                </ul>
              </div>
              <div id="tab-recent2" class="tab-pane">
                <ul class="entry-list unstyled">
				<?php
			$rowMainEventnow=getEventNow($conn);
			$countEvent=count($rowMainEventnow);
			for($i=0;$i<$countEvent;$i++)
			{ 
		?>
                  <li>
                    <div class="entry-thumbnail"> <a class="img" > <img src="<?php echo DIR_EVENTBANER.$rowMainEventnow[$i]['event_baner_dtl'];?>" width="269" height="345" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="event_detail.php?id=<?php echo $rowMainEventnow[$i]['event_id'];?>"> <?php echo $rowMainEventnow[$i]['event_name']; ?></a></h5>
                      </div>
                      <div class="entry-meta">
                        <time title="2020-10-27" datetime="2020-10-27" class="entry-datetime"> <span class="icon-clock" aria-hidden="true"></span><?php echo date('d-m-y',strtotime($rowMainEventnow[$i]['start_date_time'])); ?> </time>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </li>
			<?php }?>
                 
                  
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
