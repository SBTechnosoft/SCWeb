<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>


</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Gallery</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Gallery</a></li>
      <li class="active">Add Gallery</li>
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
						<form method="post" id="gall_form" name="gall_form" class="form-full-width" enctype="multipart/form-data" >
						<input  id="txthidden" name="txthidden" type="hidden"  value="">
							<div class="col-md-3">
								<div class="form-group">
								<img  id="txtimg"  />
								</br><span>Select Product Image </span>
								<input style="border:0;" type="file" name="upload_img[]" id="upload_img" multiple="mutiple" />
								</div>
							</div>		
								<div class=" col-md-6">
									<div class="form-group">
										
										</br><label style="">Do You Want To Display:</label></br>
										<div class="col-md-1">
											<input type="radio" value="0" name="is_display" id="is_display" checked="checked" class="chk1"/>Yes</div>
											<div class="col-md-1"><input type="radio" value="1" name="is_display" id="is_display" checked="checked" class="chk2"/>No</div>
									</div>
								</div>
														
								<?php
									if(isset($_POST['gallery_id']))
									{
										$gallery_id=$_POST['gallery_id'];
									}
								?>
							<div class="row">
								<div class="col-md-1">
									</br><input type="button" class="btn-primary" value="Save" name="btn_gall" id=	"btn_gall" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section></br>
			   <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Iamge</th>
								
								<th>Is Display?</th>
								<th colspan="2"><center>Action</center></th>
							</tr>
						</thead>
						<tbody id="showgallery">
							<?php include('show_gallery.php');?>
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
	var is_display=$('#is_display').val();
	var file = new FormData();
        
		for(var i = 0; i < $('#upload_img').get(0).files.length; ++i) 
	{
		var img_name=$('#upload_img').prop('files')[i];
		file.append('upload_img['+i+']', img_name);	
	}
		
		 file.append('is_display', is_display);
		
		 
	var btnValue=document.getElementById('btn_gall').value;
	if(btnValue=="Save")
	{
		file.append('add', 1);
		$.ajax({
			
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'gallery_post.php';?>',
		 cache: false,
		 contentType: false,
		 processData:false,
		 data: file,
        
		 success: function(data){
			 
			  alert("Record Inserted Successfully!!!");
			  $("#showgallery").html(data);
			
		 }
		
		});
		 
	}

	
	else
	{
		var gallery_id=$('#txthidden').val(); 
		file.append('gallery_id', gallery_id);		
		file.append('edit', 1);
		 file.append('is_display', is_display);
		$.ajax({
		 type: "POST",
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'gallery_post.php';?>',
		  data: file,
		  cache: false,
		 contentType: false,
		 processData: false,
		 success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#showgallery").html(data);
		 }
		});
	}
	 document.getElementById("gall_form").reset();
	document.getElementById('btn_gall').value="Save";
	window.location="<?php echo HTTP_SERVER.'index.php?url=GALLERY';?>";
}
</script>
<script type="text/javascript">
//Edit Category
function editCategory(gallery_id,img,isd)
{
	$('#txthidden').val(gallery_id);
	$('#txtimg').attr({src:'<?php echo DIR_GALLERY ?>'+img,height:'150px',width:'150px'});
	if(isd==0)
	{
		$('.chk1').attr('checked',true);
	}
	if(isd==1)
	{
		$('.chk2').attr('checked',true);
	}
	
	$('#txthidden').val(gallery_id);
	document.getElementById('btn_gall').value="Update";
	var gallery_id=gallery_id;
	$.post("index.php?url=GALLERY", {"gallery_id": gallery_id});
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
	 url: '<?php echo DIR_INCLUDES.'gallery_post.php';?>',
	  data: {
		  'isDisplay' : 1,
		 'value':value,
		 'catId':catId,
	 },
	 success: function(data){
		  alert("Display Status Changed Successfully!!!");
		   $("#showgallery").html(data);
	 }
	});
	//window.location.reload();
}
</script>
</body>
</html>
