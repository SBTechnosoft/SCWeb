<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>


</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Category</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Category</a></li>
      <li class="active">Add Category</li>
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
						<form method="post" id="cat_form" name="cat_form" class="form-full-width">
						<input  id="txthidden" name="txthidden" type="hidden"  value="">
							<div class="row">
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter Category Name" id="cat_name" name="cat_name" required >
									</div>
								</div>
								<div class="col-md-6">
									
									<select style="" name="parent_cat_name" id="parent_cat_name" class="form-control">
										<option value="0">Select Category</option>
										<option value="0"></option>
									</select>
								</div>
							</div>
								<?php
									if(isset($_POST['editcatid']))
									{
										$editcatid=$_POST['editcatid'];
									}
								?>
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="cat_submit" id=	"cat_submit" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section></br>
			   <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Category Name</th>
								
								<th colspan="2"><center>Action</center></th>
							</tr>
						</thead>
						<tbody id="show_cat">
							<?php include('show_Category.php');?>
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
	var cat_name=$('#cat_name').val();
	var parent_cat_name=$('#parent_cat_name').val();
	var btnValue=document.getElementById('cat_submit').value;
	
	if(btnValue=="Save")
	{
		$.ajax({
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'category_post.php';?>',
		  data: {
			  'add' : 1,
			 'cat_name':cat_name,
			 'parent_cat_name':parent_cat_name,
			 
		 },
		 success: function(data){
			  alert("Record Inserted Successfully!!!");
			  $("#show_cat").html(data);
		 }
		});
		document.getElementById("cat_form").reset();
	}
	else
	{
		
		var editcatid=$('#txthidden').val(); 
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'category_post.php';?>",
		  data: {
			  'edit' : 1,
			 'cat_name':cat_name,
			 'parent_cat_name':parent_cat_name,
			 'editcatid':editcatid,
		 },
		 success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#show_cat").html(data);
		 }
		});
	}
	 document.getElementById("cat_form").reset();
	 document.getElementById('cat_submit').value="Save";
}
//Remove Category
function removeCat(cat_id)
{
	var cat_id=cat_id;
	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'category_post.php';?>",
		  data: {
			  'remove' : 1,
			  'cat_id':cat_id,
		 },
		 success: function(data){
			  alert("Record deleted Successfully!!!");
			   $("#show_cat").html(data);
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
//Edit Category
function editCategory(editcatid,name,parent_cat_name)
{
	$('#cat_name').val(name);
	$('#parent_cat_name').val(parent_cat_name);
	$('#txthidden').val(editcatid);
	
	document.getElementById('cat_submit').value="Update";
	
	var editcatid=editcatid;
	$.post("index.php?url=CAT", {"editcatid": editcatid});
}
</script>
</body>
</html>
