<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>


</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Company</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Company</a></li>
      <li class="active">Add Company</li>
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
					<div id="comment-reply-form">
						<form method="post" id="company_form" name="company_form" class="form-full-width">
							<div class="row">
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter Company Name" id="comp_name" name="comp_name" required >
									</div>
								</div>
								
							</div>
                      
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="comp_submit" id=	"comp_submit" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
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
<script type="text/javascript">

function postData()
{
	var comp_name=$('#comp_name').val();
	var btnValue=document.getElementById('comp_submit').value;
	
	if(btnValue=="Save")
	{
		$.ajax({
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'company_post.php';?>',
		  data: {
			  'add' : 1,
			 'comp_name':comp_name,
			
			 
		 },
		 success: function(data){
			  alert("Record Inserted Successfully!!!");
			  //$("#show_cat").html(data);
		 }
		});
		document.getElementById("company_form").reset();
	}
	else
	{
		
		//var editcatid=$('#txthidden').val(); 
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'company_post.php';?>",
		  data: {
			  'edit' : 1,
			 'comp_name':comp_name,
			 // 'editcatid':editcatid,
		 },
		 success: function(data){
			  alert("Record Updated Successfully!!!");
			  //$("#show_cat").html(data);
		 }
		});
	}
	 document.getElementById("company_form").reset();
	 document.getElementById('comp_submit').value="Save";
}

</script>
</body>
</html>
