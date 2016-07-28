<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>


</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Blog</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Blog</a></li>
      <li class="active">Add Blog</li>
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
						<form method="post" id="blog_form" name="blog_form" class="form-full-width">
						<input  id="txthidden" name="txthidden" type="hidden"  value="">
						<div class="col-md-6">
							<select class="form-control" name="blog_cat_name" id="blog_cat_id">
								<option>Select Category</option>
								<?php
									$rowSelectCat= showBlogCategoryData($conn);
									$count = count($rowSelectCat);
									for($i=0;$i<$count;$i++)
									{
								?>
								<option value="<?php echo $rowSelectCat[$i]["blog_cat_id"];?>" <?php if(isset($blog_cat_id)){ if($rowSelectCat[$i]["blog_cat_id"]==$blog_cat_id) {?> selected="selected" <?php } }?> >
								<?php echo $rowSelectCat[$i]["blog_cat_name"];?>
								</option>
								<?php 
									} 
								?>
							</select>
						</div>
						<div class="col-md-6">
							<select name="blog_tag_name[]" id="blog_tag_id" multiple="multiple"  class="form-control">
								<option>Select Multiple Tag</option>
									<?php
										$rowSelectTag= showTagData1($conn);
										$counttag= count($rowSelectTag);
										for($i=0;$i<$counttag;$i++)
										{
									?>
								<option value="<?php echo $rowSelectTag[$i]["blog_tag_id"];?>" <?php if(isset($blog_tag_id)){ if($rowSelectTag[$i]["blog_tag_id"]==$blog_tag_id) {?> selected="selected" <?php } }?> >
								 <?php echo $rowSelectTag[$i]["blog_tag_name"];?>
								</option>
									<?php 
										} 
									?>
					    	</select> 
						</div>
							
								<div class=" col-md-6">
									<div class="form-group">
										</br><input type="text" placeholder="Enter Blog Name" id="blog_name" name="blog_name" required >
										<label style="">Do You Want To Display:</label></br>
										<div class="col-md-1">
											<input type="radio" value="0" name="is_display" id="is_display" checked="checked" class="chk1"/>Yes</div>
											<div class="col-md-1"><input type="radio" value="1" name="is_display" id="is_display" checked="checked" class="chk2"/>No</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
											</br><textarea id="blog_desc" name="blog_desc" required placeholder="Description"></textarea>
									</div>
								</div>
								
										
						
								<?php
									if(isset($_POST['editblogid']))
									{
										$editblogid=$_POST['editblogid'];
									}
								?>
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="blog_submit" id=	"blog_submit" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section></br>
			   <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Post Name</th>
								<th>Post Description</th>
								<th>Category Name</th>
								<th>Tag Name</th>
								<th>Is Display?</th>
								<th colspan="2"><center>Action</center></th>
							</tr>
						</thead>
						<tbody id="show_blog">
							<?php include('show_Blog.php');?>
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

<!--Post Ajax Data-->
<script type="text/javascript">

function postData()
{
	var blog_cat_id=$('#blog_cat_id').val();
	
	//blog_tag_id=$('#blog_tag_id').val();
	//console.log($('#blog_tag_id').val());
	var blog_name=$('#blog_name').val();
	var blog_desc=$('#blog_desc').val();
	var is_display=$('#is_display:checked').val();
	var btnValue=document.getElementById('blog_submit').value;
	var vals=[];
	$.each($("#blog_tag_id option:selected"),function(){
		
		vals.push($(this).val());
	});
	
	if(btnValue=="Save")
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url:'<?php echo DIR_INCLUDES.'blog_Post.php';?>',
		  data: {
			  'add' : 1,
			 'blog_cat_id':blog_cat_id,
		//	 'blog_tag_id':blog_tag_id,
				'vals':vals,
			 'blog_name':blog_name,
			 'blog_desc':blog_desc,
			 'is_display':is_display,
		 },
		 success: function(data){
			  alert("Record Inserted Successfully!!!");
			  $("#show_blog").html(data);
		 }
		});
	}
	else
	{
		var editblogid=$('#txthidden').val(); 
		$.ajax({
		 type: "POST",
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'blog_Post.php';?>',
		  data: {
			  'edit' : 1,
			 'blog_cat_id':blog_cat_id,
			 //'vals':vals,
			 //'blog_tag_id':blog_tag_id,
			 'blog_name':blog_name,
			 'blog_desc':blog_desc,
			 'is_display':is_display,
			 'editblogid':editblogid,
		 },
		 success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#show_blog").html(data);
		 }
		});
	}
	 document.getElementById("blog_form").reset();
	document.getElementById('blog_submit').value="Save";
}

//Change Display Status
function isDisplay(catId,value)
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
	 url: '<?php echo DIR_INCLUDES.'blog_Post.php';?>',
	  data: {
		  'isDisplay' : 1,
		 'value':value,
		 'catId':catId,
	 },
	 success: function(data){
		  alert("Display Status Changed Successfully!!!");
		   $("#show_blog").html(data);
	 }
	});
	//window.location.reload();
}

//Remove Category
function removeBlog(blog_id)
{
	var blog_id=blog_id;
	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url:'<?php echo DIR_INCLUDES.'blog_Post.php';?>',
		data:{
			  'remove' : 1,
			  'blog_id':blog_id,
		},		
		 success: function(data){
			 
			  alert("Record deleted Successfully!!!");
			   $("#show_blog").html(data);
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
<script type="text/javascript">
//Edit Category
function editBlog(editblogid,name,desc,blog_cat_id,isd)
{
		
	$('#blog_name').val(name);
	$('#blog_desc').val(desc);
	$('#blog_cat_id').val(blog_cat_id);
	
	
	//$('#blog_tag_id').val(blog_tag_id);	
	if(isd==0)
	{
		$('.chk1').attr('checked',true);
	}
	if(isd==1)
	{
		$('.chk2').attr('checked',true);
	}
	$('#txthidden').val(editblogid);
	document.getElementById('blog_submit').value="Update";
	var editblogid=editblogid;
	$.post("index.php?url=BLOG", {"editblogid": editblogid});
}
</script></body>
</html>
