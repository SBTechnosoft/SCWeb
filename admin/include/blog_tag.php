<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>


</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Blog Tag</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Blog</a></li>
      <li class="active">Add Blog Tag</li>
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
						<form method="post" id="blog_tag_form" name="blog_tag_form" class="form-full-width">
						<input  id="txthidden" name="txthidden" type="hidden"  value="">
							<div class="row">
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter Blog Tag Name" id="blog_tag_name" name="blog_tag_name" required >
										<label style="">Do You Want To Display:</label></br>
										<div class="col-md-1">
											<input type="radio" value="0" name="is_display" id="is_display" checked="checked" class="chk1"/>Yes</div>
											<div class="col-md-1"><input type="radio" value="1" name="is_display" id="is_display" checked="checked" class="chk2"/>No</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
											<textarea id="blog_tag_desc" name="blog_tag_desc" required placeholder="Description"></textarea>
									</div>
								</div>
								
										
									
							</div>
								<?php
									if(isset($_POST['editbtagcatid']))
									{
										$editbtagcatid=$_POST['editbtagcatid'];
									}
								?>
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="blog_tag_submit" id=	"blog_tag_submit" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section></br>
			   <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Tag Name</th>
								<th>Description</th>
								<th>Is Display?</th>
								<th colspan="2"><center>Action</center></th>
							</tr>
						</thead>
						<tbody id="show_blog_tag">
							<?php include('show_Blog_Tag.php');?>
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
//set checkbox value
window.onload=setValue;
function setValue()
{
	$('.chk1').attr('checked',true);
}
</script>
<script type="text/javascript">

function postData()
{
	var blog_tag_name=$('#blog_tag_name').val();
	var blog_tag_desc=$('#blog_tag_desc').val();
	var is_display=$('#is_display:checked').val();
	var btnValue=document.getElementById('blog_tag_submit').value;
	
	if(btnValue=="Save")
	{
		$.ajax({
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'blog_tag_post.php';?>',
		  data: {
			  'add' : 1,
			 'blog_tag_name':blog_tag_name,
			 'blog_tag_desc':blog_tag_desc,
			  'is_display':is_display,
		 },
		 success: function(data){
			  alert("Record Inserted Successfully!!!");
			  $("#show_blog_tag").html(data);
		 }
		});
		document.getElementById("blog_tag_form").reset();
	}
	else
	{
		
		var editbtagcatid=$('#txthidden').val(); 
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'blog_tag_post.php';?>",
		  data: {
			  'edit' : 1,
			 'blog_tag_name':blog_tag_name,
			 'blog_tag_desc':blog_tag_desc,
			  'is_display':is_display,
			 'editbtagcatid':editbtagcatid,
		 },
		 success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#show_blog_tag").html(data);
		 }
		});
	}
	 document.getElementById("blog_tag_form").reset();
	 document.getElementById('blog_tag_submit').value="Save";
}
//Change Display Status
function isDisplay(btagId,value)
{ 
	if(value==0)
	{
		var value=1;
	}
	else{
		var value=0;
	}
	$.ajax({
	 type: "POST",
	 async : false,
	 url: '<?php echo DIR_INCLUDES.'blog_tag_post.php';?>',
	  data: {
		  'isDisplay' : 1,
		 'value':value,
		 'btagId':btagId,
	 },
	 success: function(data){
		  alert("Display Status Changed Successfully!!!");
		   $("#show_blog_tag").html(data);
	 }
	});
	//window.location.reload();
}
//Remove Category
function removeblogtag(b_tag_id)
{
	var b_tag_id=b_tag_id;
	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'blog_tag_post.php';?>",
		  data: {
			  'remove' : 1,
			  'b_tag_id':b_tag_id,
		 },
		 success: function(data){
			  alert("Record deleted Successfully!!!");
			   $("#show_blog_tag").html(data);
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
function editBlogtag(editbtagcatid,name,desc,isd)
{
	$('#blog_tag_name').val(name);
	$('#blog_tag_desc').val(desc);
	if(isd==0)
	{
		$('.chk1').attr('checked',true);
	}
	if(isd==1)
	{
		$('.chk2').attr('checked',true);
	}
	$('#txthidden').val(editbtagcatid);
	
	document.getElementById('blog_tag_submit').value="Update";
	
	var editbtagcatid=editbtagcatid;
	$.post("index.php?url=BTAG", {"editbtagcatid": editbtagcatid});
}
</script>
</body>
</html>
