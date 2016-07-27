<!DOCTYPE html>
<?php include("include/header.php");?>
<html lang="en">
<head>


<!-- jQuery-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>

</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Shop</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Shop</a></li>
      <li class="active">catalog</li>
    </ol>
  </div>
</div>
<main class="section layout-col-2" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar-resize"    >
        <aside class="sidebar ">
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
          
          <!-- ARCHIVE WIDGET -->
          <div class="widget widget-filter">
            <div class="block_content">
              <h3 class="widget-title"><span>Filter</span></h3>
              <div class="list-group">
                <div class="list-content">
                  <ul class="unstyled">
                    <li>
                      <select  tabindex="1">
                        <option value="">SELECT model</option>
                        <option value="1">USA</option>
                        <option value="9">Canada</option>
                        <option value="2">France</option>
                        <option value="3">Spain</option>
                        <option value="6">Bulgaria</option>
                        <option value="8">Italy</option>
                        <option value="7" >Greece</option>
                        <option value="5">Japan</option>
                        <option value="11">China</option>
                        <option value="4">Brazil</option>
                        <option value="10">South Africa</option>
                      </select>
                    </li>
                    <li>
                      <select  tabindex="1">
                        <option value="">SELECT  Color</option>
                        <option value="1">Red</option>
                        <option value="9">Blue</option>
                        <option value="2">White</option>
                        <option value="3">Black</option>
                      </select>
                    </li>
                  </ul>
                </div>
                <div class="list-group-heading"> <span  class="list-group-heading-inner"> <span> TYPE</span> </span> </div>
                <div class="list-content">
                  <ul class="check-list">
                    <li>
                      <div class="roundedOne">
                        <input type="checkbox" name="check" id="roundedOne" value="None">
                        <label for="roundedOne"></label>
                      </div>
                      <label>Running Sneaker</label>
                    </li>
                    <li>
                      <div class="roundedOne">
                        <input type="checkbox" name="check" id="roundedOne2" value="None">
                        <label for="roundedOne2"></label>
                      </div>
                      <label> Bicycles & Accessories</label>
                    </li>
                    <li>
                      <div class="roundedOne">
                        <input type="checkbox" name="check" id="roundedOne3" value="None">
                        <label for="roundedOne3"></label>
                      </div>
                      <label>Badminton</label>
                    </li>
                    <li>
                      <div class="roundedOne">
                        <input type="checkbox" name="check" id="roundedOne4" value="None">
                        <label for="roundedOne4"></label>
                      </div>
                      <label>Fitness Accessories</label>
                    </li>
                    <li>
                      <div class="roundedOne">
                        <input type="checkbox" name="check" id="roundedOne5" value="None">
                        <label for="roundedOne5"></label>
                      </div>
                      <label>Outdoor Adventure Gear</label>
                    </li>
                    <li>
                      <div class="roundedOne">
                        <input type="checkbox" name="check" id="roundedOne6" value="None">
                        <label for="roundedOne6"></label>
                      </div>
                      <label>Active Wear</label>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="list-group">
                <div class="list-group-heading"> <span class="list-group-heading-inner"> <span> PRICE RANGE</span> </span> </div>
                <div id="slider-start"></div>
              </div>
            </div>
          </div>
          <div class="widget widget-banner"> <a href="#"><img src="media/promo/1.jpg" width="270" height="230" alt="img"/></a> </div>
          
          <!-- OUR SOCIAL NETWORK WIDGET -->
          <div class="widget widget-special">
            <h3 class="widget-title"><span>Special Products</span></h3>
            <ul class="entry-list unstyled verticale-carousel">
              <li>
                <div class="entry-thumbnail"> <a href="#" class="img"> <img src="media/item/4/1.jpg" width="600" height="700" alt=""/></a> </div>
                <div class="entry-main">
                  <div class="entry-header">
                    <h5 class="entry-title"><a href="#">Phasellus vehicula</a></h5>
                  </div>
                  <div class="entry-meta">
                    <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-reduction">70%</span> </div>
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
                    <div class="price-box"> <span class="price-regular">$120.00</span> </div>
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
                    <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-old">$200.00</span> </div>
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
                    <div class="price-box"> <span class="price-regular">$120.00</span> <span class="price-reduction">70%</span> </div>
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
                    <div class="price-box"> <span class="price-regular">$120.00</span> </div>
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
          <!-- // TAGS WIDGET --> 
          
        </aside>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9  col-resize ">
        <section class="main-content" role="main">
          <div class="points-wrap"> <img src="media/1200x520/1.jpg" width="1920" height="1080" alt=""/>
            <ul>
              <li class="cd-single-point" style="left:16%; top:46%;"><a class="cd-img-replace" href="#0">More</a>
                <div class="cd-more-info cd-right"> <a href="produc" class="points-product-image"> <img width="600" height="700" alt="img" src="media/item/4/1.jpg" ></a>
                  <h2 class="points-name">QUECHUA FORCLAZ 500 SOFTSHELL HIKING WEAR</h2>
                  <a href="#0" class="cd-close-info cd-img-replace">Close</a> </div>
              </li>
              <li class="cd-single-point" style="left:33%; top:57%;"> <a class="cd-img-replace" href="#0">More</a>
                <div class="cd-more-info cd-left"> <a href="product.html" class="points-product-image"> <img width="600" height="700" alt="img" src="media/item/4/2.jpg" ></a>
                  <h2 class="points-name">QUECHUA FORCLAZ 500 SOFTSHELL HIKING WEAR</h2>
                  <a href="#0" class="cd-close-info cd-img-replace">Close</a> </div>
              </li>
              <li class="cd-single-point" style="left:54%; top:50%;"> <a class="cd-img-replace" href="#0">More</a>
                <div class="cd-more-info cd-top"> <a href="product.html" class="points-product-image"> <img width="600" height="700" alt="img" src="media/item/5/1.jpg" ></a>
                  <h2 class="points-name">QUECHUA FORCLAZ 500 SOFTSHELL HIKING WEAR</h2>
                  <a href="#0" class="cd-close-info cd-img-replace">Close</a> </div>
              </li>
              <li class="cd-single-point" style="left:73%; top:46%;"> <a class="cd-img-replace" href="#0">More</a>
                <div class="cd-more-info cd-bottom"> <a href="product.html" class="points-product-image"> <img width="600" height="700" alt="img" src="media/item/8/2.jpg" ></a>
                  <h2 class="points-name">QUECHUA FORCLAZ 500 SOFTSHELL HIKING WEAR</h2>
                  <a href="#0" class="cd-close-info cd-img-replace">Close</a> </div>
              </li>
            </ul>
          </div>
          <div class="subcategory-list" id="subcategories">
            <ul>
              <li class="x-hover sub-heading"> <span  class="x-hover-text">Subcategories</span></li>
              <li class="x-hover"> <a href="#" class="x-hover-text"> Bicycles &amp; Accessories</a></li>
              <li class="x-hover"> <a href="#" class="x-hover-text">Badminton</a></li>
              <li class="x-hover"> <a href="#" class="x-hover-text">Fitness Accessories</a></li>
              <li class="x-hover"> <a href="#" class="x-hover-text">Fitness Equipment</a></li>
              <li class="x-hover"> <a href="#" class="x-hover-text">Outdoor Adventure Gear</a></li>
              <li class="x-hover"> <a href="#" class="x-hover-text">Active Wear</a></li>
              <li class="x-hover"> <a href="#" class="x-hover-text">Swimming Equipments</a></li>
              <li class="x-hover"> <a href="#" class="x-hover-text">Water Sports</a></li>
            </ul>
          </div>
          <div class="filter-panel">
            <div class="panel panel-line">
              <div class="panel-body">
                <form class="form-inline" role="form">
                  <div class="form-group float-left">
                    <label class="filter-col" style="margin-right:0;" for="pref-perpage">Sort By:</label>
                    <select id="pref-perpage" class="form-control">
                      <option value="2">Sale</option>
                      <option value="3">Bestseller</option>
                      <option value="4">Date</option>
                      <option value="5">Rating</option>
                    </select>
                  </div>
                  
                  <!-- form group [rows] -->
                  <div class="form-group float-left ">
                    <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
                    <input type="text" class="form-control input-sm" id="pref-search">
                  </div>
                  <!-- form group [search] -->
                  
                  <div class="form-group float-right">
                    <label class="filter-col" style="margin-right:0;" for="pref-perpage">VIEW</label>
                    <div class="btn-group switcher-view"> <a href="#" id="grid" class="btn btn-default btn-sm active-btn"> <span  class="glyphicon glyphicon-th-large"></span></a> <a href="#" id="list" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-th-list"></span></a></div>
                  </div>
                  <div  class="form-group float-right btn-resize">
                    <div id="resize-anchor"></div>
                    <label class="filter-col" >Resize</label>
                    <a href="#resize-anchor" class="toggle_sidebar btn btn-default btn-sm"> <i class="fa fa-arrows-h"></i></a> </div>
                </form>
              </div>
              <div class="panel-body">
                <div class="form-group float-left"> Showing 1 - 9 of 15 items </div>
                <div class="form-group float-right"> <a href="#" class="btn">Compare  (0)</a> </div>
              </div>
            </div>
          </div>
          <div class="catalog-grid">
            <ul class=" product-grid">
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <span class="label-sale">sale</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product_detail.php"> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container ">
                  <div class="product-image"> <span class="label-hot">HOT</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img class=""  
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <span class="label-sale">sale</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image">
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/6/26.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img class=""  
         src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container label-hot-active">
                  <div class="product-image"> <span class="label-best">BESTSELLER</span> <div class="label-star">
                    <div  class="starrr" data-rating='4'></div>
                    </div>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/8/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img class=""  
         src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image">
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/7/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <span class="label-sale">sale</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image">
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img class=""  
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container label-not-available-active">
                  <div class="product-image"> <span class="label-not-available">not available</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container label-hot-active ">
                  <div class="product-image"> <span class="label-hot">HOT</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/8/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img class=""  
         src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image">
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/6/26.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img class=""  
         src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image">
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/7/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <span class="label-sale">sale</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container ">
                  <div class="product-image"> <span class="label-hot">HOT</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/5.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <img class=""  
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
              <li class="  animated"   data-animation="bounceInUp" >
                <div class="product-container">
                  <div class="product-image"> <span class="label-sale">sale</span>
                    <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/5/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                    <a href="product.html"> <img class=""  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
<section  class="x-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading-wrap">
          <div class="small-logo"><img width="106" height="36" alt="logo" src="img/logo-black.png"></div>
          <h2 class="section-heading " >RELATED PRODUCTS</h2>
        </div>
      </div>
    </div>
    
   
    
    <div class="row text-center">
      <section class="xcarousel-4" >
        <div class="x-frame" >
          <ul class="x-slider product-grid">
            <li>
              <div class="product-container">
                <div class="product-image"> <span class="label-sale">sale</span>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/4/2.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <a href="product.html"> <img class=""  
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
                  <img class=""  
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
                  <a href="product.html"> <img class=""  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
                  <img class=""  
         src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
                    <div   class="starrr" data-rating='4'></div>
                    </div>
                  <div class="btn-action-item"> <a href="product.html" class="btn-cart  x-hover"> <i class="fa fa-shopping-cart"></i></a> <a href="product.html"> <i class="icomoon-heart"></i></a> <a  href="include/product-only-content.html" data-toggle="modal" data-target="#quick-view-id47" > <i class="icomoon-search"></i></a> <a href="media/item/8/1.jpg" class="magnific"> <i class="icomoon-eye-open"></i></a> </div>
                  <img class=""  
         src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
                  <a href="product.html"> <img class=""  
         src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
                  <a href="product.html"> <img class=""  
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
                  <img class=""  
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
                  <a href="product.html"> <img class=""  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
                  <img class=""  
         src="media/item/8/1.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
                  <img class=""  
         src="media/item/6/26.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
                  <a href="product.html"> <img class=""  
         src="media/item/7/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
                  <a href="product.html"> <img class=""  
         src="media/item/4/2.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
                  <img class=""  
         src="media/item/4/4.jpg" width="600" height="700" alt="img"/> <img  class=" slider_img"  
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
                  <a href="product.html"> <img class=""  
         src="media/item/5/1.jpg" width="600" height="700" alt="img"/></a> <a href="product.html"> <img  class=" slider_img"  
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
      <section class="xcarousel-5 animated" data-animation="bounceInRight" >
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
