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
			$rowMainBlogPost=getSingleBlog($conn);
			$countPost=count($rowMainBlogPost);
			for($i=0;$i<$countPost;$i++)
			{ 
		?>
          <article class="post media-image   format-image animated" data-animation="bounceInUp">
            <div class="entry-media">
              <div class="box-date-post"> <span class="date-1"><?php echo date('d',strtotime($rowMainBlogPost[$i]['created_at'])); ?> </span> <span class="date-2"> <?php echo date('M',strtotime($rowMainBlogPost[$i]['created_at'])); ?></span> </div>
              <div class="entry-thumbnail">
                <div class="sticky-post"><i class="icon-pin"></i></div>
                <div class="post-type-media type-image"><i class="icon-picture"></i></div>
                <div class="img-overlay "> <a  href="media/830x400/1.jpg" class="link-view-more magnific"></a> </div>
                <a   href="media/830x400/1.jpg"><img src="media/830x400/1.jpg" width="830" height="400" alt=""/></a> </div>
            </div>
            <div class="entry-main">
              <h3 class="entry-title"> 
				<a href="post.html" data-hover="ALIQUAM MOLLIS NEQUE UT ULLAMCORPER TEMPOR DOLOR TORTOR VARIUS"><?php echo $rowMainBlogPost[$i]['blog_post_name']; ?></a> 
			  </h3>
              <div class="entry-content">
                 <p><?php echo $rowMainBlogPost[$i]['blog_post_desc']; ?></p>
              </div>
            </div>
           </article> 
		<?php }?>
      
      
      <div class="footer-panel">  
      
      
      <ul class="tag-cloud unstyled clearfix">
              <li><a href="#">Creative</a></li>
              <li><a href="#">Responsive</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">HTML</a></li>
              <li><a href="#">CSS</a></li>
              <li><a href="#">Retina</a></li>
              <li><a href="#">Clean</a></li>
            </ul>  
      
      
      
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
          
             <div class="comments-header"><span>About Author</span>  </div>
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
              <li><a href="#">Technology</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Photography</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Web Design</a></li>
            </ul>
          </div>
          <!-- // CATEGORY LIST WIDGET --> 
          
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
          <!-- // TABBED CONTENT WIDGET --> 
          
          <!-- FLICKR STREAM -->
          <div class="widget widget-flickr">
            <h3 class="widget-title"><span>FLICKR photos</span></h3>
            <ul id="flickr-feed2" class="flickr-feed">
            </ul>
          </div>
          <!-- // FLICKR STREAM --> 
          
          <!-- TAGS WIDGET -->
          <div class="widget widget-tags">
            <h3 class="widget-title"><span>Tags cloud</span></h3>
            <ul class="tag-cloud unstyled clearfix">
              <li><a href="#">Creative</a></li>
              <li><a href="#">Responsive</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">HTML</a></li>
              <li><a href="#">CSS</a></li>
              <li><a href="#">Retina</a></li>
              <li><a href="#">Clean</a></li>
            </ul>
          </div>
          <!-- // TAGS WIDGET -->
          
          <div class="widget widget-newsletter ">
            <h3 class="widget-title"><span>Search Blog</span></h3>
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
