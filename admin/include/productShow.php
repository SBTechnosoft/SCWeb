<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	
</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">View Product</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Product</a></li>
      <li class="active">View Product</li>
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
					 <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Poduct Name</th>
								<th>Product Description</th>
								<th>Product Color</th>
								<th>Product Size</th>
								<th>Product Prize</th>
								<th>Category Name</th>
								<th>Company Name</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
						<tbody id="show_comp">
							<?php include('show_product.php');?>
						</tbody>
				</table>
               </section>
			  
           </article>
        </section>
      </div>
    </div>
  </div>
</main>
</br>

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
<script>
function removeprod(prod_id)
{
	var prod_id=prod_id;
	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'productPost.php';?>",
		  data: {
			  'remove' : 1,
			  'prod_id':prod_id,
		 },
		 success: function(data){
			  alert("Record deleted Successfully!!!");
			   $("#show_pro").html(data);
		 }
		});
	}
	else
	{
		return false;
	}
	 //window.location.reload();
}
</script>
</body>
</html>
