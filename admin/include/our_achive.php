<?php include("./include/header.php");?>
<!doctype html>
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
    <h3 class="page-title float-left">Add Achivement</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Home</a></li>
      <li class="active">Add Achivement</li>
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
						<form method="post" id="achive_form" name="achive_form" class="form-full-width">
						<input  id="txthidden" name="txthidden" type="hidden"  value="">
						<div class="col-md-6">
							<input type="text" placeholder="Enter Achivement Name" id="achive_name" name="achive_name" required >
							<img  id="txtimg"  />
							<input type="file" id="upload_img" name="upload_img" style="border:0;">
							<label style="">Do You Want To Display:</label></br>
							<div class="col-md-1">
									<input type="radio" value="0" name="is_display" id="is_display" checked="checked" class="chk1"/>Yes
								</div>
								<div class="col-md-1"><input type="radio" value="1" name="is_display" id="is_display" checked="checked" class="chk2"/>No
								</div>
						</div>
						<div class="col-md-6">
							<textarea id="achive_desc" name="achive_desc" required placeholder="Description"></textarea>
							
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								
							</div>
						</div>
													
										
						
								<?php
									if(isset($_POST['editid']))
									{
										$editid=$_POST['editid'];
									}
								?>
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="btn_submit" id=	"btn_submit" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section></br>
			   <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Achivement Name</th>
								<th>Achivement Description</th>
								<th>Image</th>
								<th>Is Display?</th>
								<th colspan="2"><center>Action</center></th>
							</tr>
						</thead>
						<tbody id="show_achive">
							<?php include('show_achive.php');?>
						</tbody>
				</table>
           </article>
        </section>
      </div>
    </div>
  </div>
</main>
</br>
</body>
<!-- SWITCHER --> 
<script src="plugins/switcher/js/bootstrap-select.js"></script> 
<script src="plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
<script src="plugins/switcher/js/dmss.js"></script> 
<!-- MAIN SCRIPTS--> 

<!--Blazy image--> 
<script type="text/javascript" src="js/blazy.min.js"></script> 
<!-- User Agent --> 
<script src="js/cssua.js"></script> 

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
	
	var achive_name=$('#achive_name').val();
	var achive_desc=$('#achive_desc').val();
	var is_display=$('#is_display').val();
	var file = new FormData();
        file.append('upload_img', $('#upload_img')[0].files[0]);
		 file.append('achive_name', achive_name);
		 file.append('achive_desc', achive_desc);
		  file.append('is_display', is_display);
		
		 
	var btnValue=document.getElementById('btn_submit').value;
	if(btnValue=="Save")
	{
		file.append('add', 1);
		$.ajax({
			
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'our_achive_post.php';?>',
		 cache: false,
		 contentType: false,
		 processData:false,
		 data: file,
         success: function(data){
			 
			  alert("Record Inserted Successfully!!!");
			  $("#show_achive").html(data);
			
		 }
		
		});
		 
	}

	
	else
	{
		var editid=$('#txthidden').val(); 
		file.append('editid', editid);		
		file.append('edit', 1);
		$.ajax({
		 type: "POST",
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'our_achive_post.php';?>',
		  data: file,
		   cache: false,
		  contentType: false,
		  processData:false,
		  success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#show_achive").html(data);
		 }
		});
	}
	 document.getElementById("achive_form").reset();
	document.getElementById('btn_submit').value="Save";

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
	 url: '<?php echo DIR_INCLUDES.'our_achive_post.php';?>',
	  data: {
		  'isDisplay' : 1,
		 'value':value,
		 'catId':catId,
	 },
	 success: function(data){
		  alert("Display Status Changed Successfully!!!");
		   $("#show_achive").html(data);
	 }
	});
	//window.location.reload();
}

//Remove Category
function removeachiv(achive_id)
{
	var achive_id=achive_id;
	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url:'<?php echo DIR_INCLUDES.'our_achive_post.php';?>',
		data:{
			  'remove' : 1,
			  'achive_id':achive_id,
		},		
		 success: function(data){
			 
			  alert("Record deleted Successfully!!!");
			   $("#show_achive").html(data);
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
function editachive(editid,name,desc,img,isd)
{
		
	$('#achive_name').val(name);
	$('#achive_desc').val(desc);
	$('#txtimg').attr({src:'<?php echo DIR_ACHIVEMENT ?>'+img,height:'150px',width:'150px'});
	if(isd==0)
	{
		$('.chk1').attr('checked',true);
	}
	if(isd==1)
	{
		$('.chk2').attr('checked',true);
	}
	$('#txthidden').val(editid);
	document.getElementById('btn_submit').value="Update";
	var editid=editid;
	$.post("index.php?url=ACHIVE", {"editid": editid});
}
</script>
</html>
