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
    <h3 class="page-title float-left">Shop</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Shop</a></li>
      <li class="active">catalog</li>
    </ol>
  </div>
</div>
<div class="product-paging">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
        <div class="pull-left"> <a href="shop.html" class="btn-arrow"> BACK TO CATEGORY</a> </div>
        <div class="pull-right"> <a href="#" class="btn btn-arrow-left"><span class="icomoon-arrow-left"></span></a><a class="btn btn-arrow-right" href="#"><span class="icomoon-arrow-right"></span></a> </div>
      </div>
    </div>
  </div>
</div>
<main class="section layout-col-1" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12  ">
        <section class="main-content" role="main">
          <div class="row">
            <div class="col-md-5">
              <div class="product-image-left animated" data-animation="bounceInUp">
                <div class="clearfix" id="image-block">
				<?php
					$rowMainCategory=getSingleProduct($conn);
					$countCat=count($rowMainCategory);
					for($i=0;$i<$countCat;$i++)
						{ ?>
                  <div id="slider-product" class="flexslider">
                    <ul class="slides">
						
                      <li> <a href="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>"> <img src="<?php echo DIR_PRODUCT.$rowMainCategory[$i]['prod_img_dtl'];?>" width="600" height="700" alt="img"/></a> </li>
						
                    </ul>
                  </div>
				  <?php }?>
                  <div id="carousel" class="flexslider">
                    <ul class="slides">
                      <li> <img src="media/item/4/1.jpg" width="600" height="700" alt="img"/> </li>
                      <li> <img src="media/item/4/2.jpg" width="600" height="700" alt="img"/> </li>
                      <li> <img src="media/item/4/3.jpg" width="600" height="700" alt="img"/> </li>
                      <li> <img src="media/item/4/4.jpg" width="600" height="700" alt="img"/></li>
                      <li> <img src="media/item/4/5.jpg" width="600" height="700" alt="img"/></li>
                      <li> <img src="media/item/4/1.jpg" width="600" height="700" alt="img"/> </li>
                      <li> <img src="media/item/4/2.jpg" width="600" height="700" alt="img"/> </li>
                      <li> <img src="media/item/4/3.jpg" width="600" height="700" alt="img"/> </li>
                      <li> <img src="media/item/4/4.jpg" width="600" height="700" alt="img"/></li>
                      <li> <img src="media/item/4/5.jpg" width="600" height="700" alt="img"/></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-7">
              <div class="product-right animated" data-animation="bounceInUp">
                <h3 class="product-title">QUECHUA FORCLAZ500 SOFTSHELL HIKING WEAR</h3>
                <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
                <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> 16 Review (s)  / <a class="add-rev-link" href="#tab-info-anchore">Add a Review </a></div>
                <hr>
                <div class="price-box"> <span class="price-regular-single">$120.00</span> <span class="price-old">$200.00</span> <span class="price-reduction">70%</span> </div>
                <hr>
                <div class="product-button-group">
                  <div class="qty"> <a class="minus_btn"><i class="fa fa-minus"></i> </a>
                    <input type="text" class="txtbox" placeholder="1" >
                    <a class="plus_btn"><i class="fa fa-plus"></i></a> </div>
                  <div class="btn-group cart">
                    <button type="button" class="btn btn-success"> Add to cart </button>
                  </div>
                  <div class="btn-group wishlist">
                    <button type="button" class="btn btn-danger"> Add to wishlist </button>
                  </div>
                </div>
                <hr>
                <div class="shorty-desc">
                  <p> Pergo coctione, aliter atque fructuosa negotium structura. Malo B. Option.  Ille vivere. Ut ad te id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium. img  Suspicio? Bere conatus sum ad te in omni tempore.</p>
                </div>
                <hr>
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
                  <hr>
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
                <div class="product-label"> <img src="media/label/guarantee.png" alt="img"/> </div>
              </div>
            </div>
             </div>
            
             <div class="row">
            <div class="col-md-9  col-sm-9 product-info animated" data-animation="bounceInUp">
              <div id="tab-info-anchore"></div>
              
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">DESCRIPTION</a></li>
                <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">PRODUCT INFO</a></li>
                <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab">REVIEWS</a></li>
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
                <div role="tabpanel" class="tab-pane" id="tab2">
                  <p>Pergo coctione, et ego, et tu oblivisci Pinkman. Obliviscendum hoc unquam factum. Intelligamus hoc in sola SINGULTO multo aliter atque fructuosa negotium structura. Malo B. Option. </p>
                  <p>Ille vivere. Ut ad te quaerebam ... purgare caeli. Sunt uh ... nonnullus propter errorem qui de rebus inter nos et iacere puto suus in causa, id est in mensa. Levir meus, priusquam oppugnarent tempus quis, admonere dicitur. Credo quod idem mihi praesidium.</p>
                  <img src="media/item/info-item.jpg" width="300" height="207"  class="size-medium  alignright"  alt="img"/>
                  <p>Suspicio? Bene ... tunc ibimus? Quis uh ... CONEXUS locus his diebus? Quisque semper aliquid videtur, in volutpat mauris. Nolo enim dicere. Vobis neque ab aliis. Ego feci memetipsum explicans. Gus mortuus est. Lorem opus habeo. </p>
                  <p>Jackson Isai? Tu quoque ... A te quidem a ante. Vos scitis quod blinking res Ive 'been vocans super vos? Et conteram illud, et conteram hoc. Maledicant druggie excors. Iam hoc tu facere conatus sum ad te in omni tempore? </p>
                  <p>Ludum mutavit. Verbum est ex. Et ... sunt occidat. Videtur quod est super omne oppidum. Quis transfretavit tu iratus es contudit cranium cum dolor apparatus. Qui curis! Modo nobis certamen est, qui non credunt at. </p>
                  <p>Nonne vides quid sit? Tu es ... Jesse me respice. Tu ... blowfish sunt. A blowfish! Cogitare. Statura pusillus, nec sapientium panem, nec artificum. Sed predators facile prædam blowfish secretum telum non se habet. Non ille? Quid faciam blowfish, Isai. Blowfish quid faciat? In blowfish inflat, purus? </p>
                  <p>Blowfish librantur in se quatuor, quinquies maior quam normalis, et quare? Quare id faciam? Ut terrorem facit, qui quid. Terrent! Ut alter, scarier pisces agminis off. Et quod tu es? Vos blowfish. Tu iustus in omnibus visio. Vides ... suus ' suus 'non aliud aerem. Nunc ... qui cum partibus blowfish Isai? Tu damnare ius. Vos blowfish. Dicere iterum. Dicere illam quasi velis eam. Es BLOWFISH! </p>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab3">
                  <div class="rew_blk clearfix">
                    <h5>Excellent </h5>
                    <div class="top_row clearfix">
                      <div class="date"><span class="fa fa-calendar"></span>1/3/2020</div>
                      <a class="user" href="#"><span class="fa fa-user"></span>Sheldon</a>
                      <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                    </div>
                    <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in. Etiam interdum felis sed consequat varius. Aliquam erat volutpat. </p>
                  </div>
                  <div class="rew_blk clearfix">
                    <h5>Awesome!</h5>
                    <div class="top_row clearfix">
                      <div class="date"><span class="fa fa-calendar"></span>3/12/2020</div>
                      <a class="user" href="#"><span class="fa fa-user"></span>Sasha</a>
                      <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> </div>
                    </div>
                    <p>Etiam pretium, arcu id mattis aliquet, est neque sagittis quam, id mollis leo urna non dui. Phasellus lacinia facilisis ipsum, a tempor nibh. Aliquam nec interdum mi. Nunc laoreet molestie massa, at euismod ipsum fringilla id. Vivamus vehicula metus velit, sit amet congue turpis suscipit in.</p>
                  </div>
                  <form accept-charset="UTF-8" action="action.php" method="post">
                    <input id="ratings-hidden" name="rating" type="hidden">
                    <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                    <div class="text-right form-star-box">
                      <div  class="starrr" data-rating='0'></div>
                      <button class="btn btn-success btn-lg" type="submit">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-3   col-sm-3  product-carousel-right animated" data-animation="bounceInUp">
              <div class="widget widget-special">
                <h3 class="widget-title"><span>Similar Products</span></h3>
                <ul class="entry-list unstyled verticale-carousel">
                  <li>
                    <div class="entry-thumbnail"> <a href="#" class="img"> <img src="media/item/4/1.jpg" width="600" height="700" alt=""/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                      </div>
                      <div class="entry-meta">
                        <div class="price-box"> <span class="price-regular-single">$120.00</span> <span class="price-reduction">70%</span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a href="#" class="img"> <img src="media/item/4/4.jpg" width="600" height="700" alt=""/></a> </div>
                    <div class="entry-header">
                      <h5 class="entry-title"><a href="#">Cras temnpus.</a></h5>
                    </div>
                    <div class="entry-main">
                      <div class="entry-meta">
                        <div class="price-box"> <span class="price-regular-single">$120.00</span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a href="#" class="img"> <img src="media/item/5/1.jpg" width="600" height="700" alt=""/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#"> Aliquam interdum .</a></h5>
                      </div>
                      <div class="entry-meta">
                        <div class="price-box"> <span class="price-regular-single">$120.00</span> <span class="price-old">$200.00</span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a href="#" class="img"> <img src="media/item/5/1.jpg" width="600" height="700" alt=""/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                      </div>
                      <div class="entry-meta">
                        <div class="price-box"> <span class="price-regular-single">$120.00</span> <span class="price-reduction">70%</span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a href="#" class="img"> <img src="media/item/5/2.jpg" width="600" height="700" alt=""/></a> </div>
                    <div class="entry-header">
                      <h5 class="entry-title"><a href="#">Cras temnpus.</a></h5>
                    </div>
                    <div class="entry-main">
                      <div class="entry-meta">
                        <div class="price-box"> <span class="price-regular-single">$120.00</span> </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="entry-thumbnail"> <a href="#" class="img"> <img src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> </div>
                    <div class="entry-main">
                      <div class="entry-header">
                        <h5 class="entry-title"><a href="#"> Aliquam interdum .</a></h5>
                      </div>
                      <div class="entry-meta">
                        <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
                      </div>
                    </div>
                  </li>
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
            <li>
              <div class="product-container">
                <div class="product-image"> <span class="label-sale">sale</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/4/3.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                    500 SOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
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
            <li>
              <div class="product-container ">
                <div class="product-image"> <span class="label-hot">HOT</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <img   
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
         src="media/item/4/5.jpg" width="600" height="700" alt="img"/> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                    GOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$5420.00</span> <span class="price-reduction">70%</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image"> <span class="label-sale">sale</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">SOFTSHELL HIKING 300 WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$220.00</span> <span class="price-old">$700.00</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image">
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/6/26.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <img   
         src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
         src="media/item/6/27.jpg" width="600" height="700" alt="img"/> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">Paenitet me789 quod tultus plastic</span></h3>
                  <div class="price-box"> <span class="price-regular">$220.00</span> </div>
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
            <li>
              <div class="product-container label-hot-active">
                <div class="product-image"> <span class="label-best">BESTSELLER</span> <div class="label-star">
                    <div  class="starrr" data-rating='4'></div>
                    </div>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/8/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img   
         src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
         src="media/item/8/2.jpg" width="600" height="700" alt="img"/> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                    500 SOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$820.00</span> <span class="price-reduction">70%</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image">
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/7/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/7/2.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                    500LL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$170.00</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image"> <span class="label-sale">sale</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/4/3.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="only-list-view">
                  <div class="product-desc">
                    <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger"> Add to cart </button>
                  </div>
                  <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                    500 SOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
                </div>
              </div>
            </li>
            <li>
              <div class="product-container">
                <div class="product-image">
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <img   
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
         src="media/item/4/5.jpg" width="600" height="700" alt="img"/> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                    500 SOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-reduction">70%</span> </div>
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
            <li>
              <div class="product-container label-not-available-active">
                <div class="product-image"> <span class="label-not-available">not available</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">SOFTSHELL HIKING 300 WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$420.00</span> <span class="price-old">$700.00</span> </div>
                  <div class="only-list-view">
                    <div class="product-desc">
                      <p>Quod satis pecuniae sempiternum. Ut sciat oportet motum. Nunquam invenies eum. Hic de tabula. Ego vivere, ut debui, et nunc fiant. Istuc quod opus non est. Lorem ipsum occurrebat pragmaticam semper ut, si quis ita velim tibi bene recognoscere. Quorum duo te mihi videtur. </p>
                    </div>
                    <div class="btn-group">
                      <button type="button" disabled class="btn btn-danger"> Add to cart </button>
                    </div>
                    <div class="btn-group"> <a class="btn "  href="#product.html">View more</a> </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="product-container label-hot-active ">
                <div class="product-image"> <span class="label-hot">HOT</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/8/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <img   
         src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
         src="media/item/8/2.jpg" width="600" height="700" alt="img"/> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                    500 SOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-reduction">70%</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image">
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/6/26.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <img   
         src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
         src="media/item/6/27.jpg" width="600" height="700" alt="img"/> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">Paenitet me789 quod tultus plastic</span></h3>
                  <div class="price-box"> <span class="price-regular">$220.00</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image">
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/7/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/7/2.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                    500LL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$170.00</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image"> <span class="label-sale">sale</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/4/3.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">QUECHUA FORCLAZ 
                    500 SOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
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
            <li>
              <div class="product-container ">
                <div class="product-image"> <span class="label-hot">HOT</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <img   
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class="b-lazy slider_img"  
         src="media/item/4/5.jpg" width="600" height="700" alt="img"/> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">FORCLAZ 
                    GOFTSHELL HIKING WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$5420.00</span> <span class="price-reduction">70%</span> </div>
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
            <li>
              <div class="product-container">
                <div class="product-image"> <span class="label-sale">sale</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img   
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class="b-lazy slider_img"  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> </div>
                <div class="product-bottom">
                  <h3 class="product-name x-hover"><span class="x-hover-text">SOFTSHELL HIKING 300 WEAR</span></h3>
                  <div class="price-box"> <span class="price-regular">$220.00</span> <span class="price-old">$700.00</span> </div>
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
          </ul>
        </div>
        <div class="x-navigation navigation"> <a href="javascript:void(0);" class="btn slider-direction prev-page disabled"><i class="icomoon-arrow-left2"></i></a> <a href="javascript:void(0);" class="btn  slider-direction next-page"><i class="icomoon-arrow-right2"></i></a> </div>
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
<div class="footer-absolute">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mobile-center"> <img src="img/pay.png" width="244" height="23" alt="pay"/> </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right  mobile-center"> <img src="img/fot-logo-small.png" width="175" height="38" alt="logo"/> </div>
    </div>
  </div>
  <a href="#" class="scroll-top "><span class="icomoon-arrow-up2"></span></a> </div>



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
