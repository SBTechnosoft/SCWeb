<!DOCTYPE html>
<?php include("./include/header.php");?>
<html lang="en">
<head>


<!-- jQuery-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="plugins/smart-menu/smart-menu.js"></script> 



<!--Scripts-->
<script type="text/javascript" src="js/scripts.js"></script> 
</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Product</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Product</a></li>
      <li class="active">Add Product</li>
    </ol>
  </div>
</div>
<main class="section" id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <section class="main-content" role="main">
          <article class="" data-animation="">
              <section class="section-comment">
                 <form action="#" method="post" id="comment-reply-form" class="form-full-width">
                
                <div class="row">
                  <div class=" col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Product Name" id="" name="author" required >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" id="" name="email" required placeholder="Enter Product Size">
                    </div>
                  </div>
				  <div class="col-md-6">
                    <div class="form-group">
                      <textarea id="" name="comment" required placeholder="Description"></textarea>
                    </div>
                   </div>
                  <div class="col-md-6">
                      <select class="form-control">
						<option>Select Category</option>
					  </select>
                  </div>
				  <div class="col-md-6">
					<div class="form-group">
					</br>
				       <span>Select Product Image </span><input type="file" />
					  </div>
	              </div>
                </div>
               <div class="row">
				  <div class="col-md-6">
				     <select class="form-control">
						<option>Select Company</option>
					  </select>
                  </div>
				  <div class="col-md-6">
					<div class="form-group">
						<input type="color" id="" />
					</div>
                  </div>
			   </div></br>

                  
               
                 <div class="row"> 
				  <div class="col-md-1">
                   <input type="button" class="btn-primary" value="Save"/>
				    </div>
                 </div>
               
              </form>
              <!-- // COMMENT REPLY --> 
              
            </section>
            
            
          </article>
          
          
          
        </section>
      </div>
      
    </div>
  </div>
</main>
</br>

  










</body>
</html>
