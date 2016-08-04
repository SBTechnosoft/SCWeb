<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
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
    <h3 class="page-title float-left">Add Contact Us Detail</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Contact Us</a></li>
      <li class="active">Add Contact Us Detail</li>
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
						<form method="post" id="contact_form" name="contact_form" class="form-full-width">
						
							<div class="row">
								<div class=" col-md-6">
									<div class="form-group">
										<textarea id="con_dtl" name="con_dtl" required placeholder="Enter Detail"></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
											<textarea id="con_address" name="con_address" required placeholder="Enter Address"></textarea>
									</div>
								</div>
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter phone number" id="con_phone" name="con_phone" required >
									</div>
								</div>	
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter Email" id="con_email" name="con_email" required >
									</div>
								</div>
									
							</div>
								
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="btn_contact" id=	"btn_contact" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section></br>
			  
           </article>
        </section>
      </div>
    </div>
  </div>
</main>
</br>


<script src="plugins/smart-menu/smart-menu.js"></script> 
<!--Scripts-->
<script type="text/javascript" src="js/scripts.js"></script> 
<script type="text/javascript">

function postData()
{
	var con_dtl=$('#con_dtl').val();
	var con_address=$('#con_address').val();
	var con_phone=$('#con_phone').val();
	var con_email=$('#con_email').val();
	var btnValue=document.getElementById('btn_contact').value;
	
	if(btnValue=="Save")
	{
		$.ajax({
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'contact_us_post.php';?>',
		  data: {
			  'add' : 1,
			 'con_dtl':con_dtl,
			 'con_address':con_address,
			 'con_phone':con_phone,
			 'con_email':con_email,
			 
		 },
		 success: function(data){
			  alert("Record Inserted Successfully!!!");
			  //$("#show_cat").html(data);
		 }
		});
		document.getElementById("contact_form").reset();
	}
	
}

</script>
</body>
</html>
