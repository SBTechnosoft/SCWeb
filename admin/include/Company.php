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
							<input  id="txthidden" name="txthidden" type="hidden"  value="">
							<div class="row">
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter Company Name" id="comp_name" name="comp_name" required >
									</div>
								</div>
							</div>
							<?php
								if(isset($_POST['editcompid']))
								{
									$editcompid=$_POST['editcompid'];
								}
							?>
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="comp_submit" id=	"comp_submit" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section>
			   <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Company Name</th>
								
								<th colspan="2"><center>Action</center></th>
							</tr>
						</thead>
						<tbody id="show_comp">
							<?php include('show_Company.php');?>
						</tbody>
				</table>
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
			  $("#show_comp").html(data);
		 }
		});
		document.getElementById("company_form").reset();
	}
	else
	{
		
		var editcompid=$('#txthidden').val(); 
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'company_post.php';?>",
		  data: {
			  'edit' : 1,
			 'comp_name':comp_name,
			 'editcompid':editcompid,
		 },
		 success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#show_comp").html(data);
		 }
		});
	}
	 document.getElementById("company_form").reset();
	 document.getElementById('comp_submit').value="Save";
}
//Remove Company
function removeComp(comp_id)
{
	var comp_id=comp_id;
	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'company_post.php';?>",
		  data: {
			  'remove' : 1,
			  'comp_id':comp_id,
		 },
		 success: function(data){
			  alert("Record deleted Successfully!!!");
			   $("#show_comp").html(data);
		 }
		});
	}
	else
	{
		return false;
	}
	
}
</script>
<script type="text/javascript">
//Edit Company
function editCompany(editcompid,name)
{
	$('#comp_name').val(name);
	$('#txthidden').val(editcompid);
	
	document.getElementById('comp_submit').value="Update";
	
	var editcompid=editcompid;
	$.post("index.php?url=COMP", {"editcompid": editcompid});
}
</script>
</body>
</html>
