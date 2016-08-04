<?php include("./include/header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

<!-- jQuery-->

<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>

</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Services</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Services</a></li>
      <li class="active">Add Services</li>
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
						<form method="post" id="service_form" name="service_form" class="form-full-width">
						<input  id="txthidden" name="txthidden" type="hidden"  value="">
							<div class="row">
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter Service Name" id="services_name" name="services_name" required >
									</div>
								</div>
								<div class=" col-md-6">
									<div class="form-group">
										<input type="text" placeholder="Enter Service price" id="services_price" name="services_price" required >
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<div class="col-md-6">
											<div class="inputs">
												<input type="text" class="field" name="desc" value="" placeholder="Enter Service Detail"/>
											</div>
										</div>
										<div class="col-md-1">
											<input type="button" value="add" id="multiple1" name="multiple1" ></br>
										</div>
									</div>
								</div>
								
								<label style="">Do You Want To Display:</label></br>
										<div class="col-md-1">
											<input type="radio" value="0" name="is_display" id="is_display" checked="checked" class="chk1"/>Yes</div>
											<div class="col-md-1"><input type="radio" value="1" name="is_display" id="is_display" checked="checked" class="chk2"/>No</div>
										
									
							</div>
								<?php
									if(isset($_POST['editservid']))
									{
										$editservid=$_POST['editservid'];
									}
								?>
							<div class="row">
								<div class="col-md-1">
									<input type="button" class="btn-primary" value="Save" name="service_submit" id=	"service_submit" onclick="postData()" />
								</div>
							</div>
						</form>
					</div>
               </section></br>
			   <table class="table table-responsive"> 
						<thead>
							<tr>
							<th>Service Name</th>
							<th>Price</th>
							<th>Service Detail</th>
							<th>Is Display?
							<th colspan="2">Action</th>
							</tr>
						</thead>
						<tbody id="show_services">
							<?php include('show_services.php');?>
						</tbody>
				</table>
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
//set checkbox value
window.onload=setValue;
function setValue()
{
	$('.chk1').attr('checked',true);
}
</script>
<script type="text/javascript">
$(document).ready(function(){

var i = $('input').size() + 1;

$('#multiple1').click(function() {
$('<input type="text" class="field" name="desc" value=""' + i + '" />').fadeIn('slow').appendTo('.inputs');
i++;
});

});

</script>
<script type="text/javascript">

function postData()
{
	var services_name=$('#services_name').val();
	var services_price=$('#services_price').val();
	
	var is_display=$('#is_display:checked').val();
	var btnValue=document.getElementById('service_submit').value;
	var desc = [];
     $.each($("input[name='desc']"), function(){            
       desc.push($(this).val());
     });
	if(btnValue=="Save")
	{
		$.ajax({
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'services_post.php';?>',
		  data: {
			  'add' : 1,
			 'services_name':services_name,
			 'services_price':services_price,
			 'desc':desc,
			 'is_display':is_display,	
		 },
		 success: function(data){
			  alert("Record Inserted Successfully!!!");
			  $("#show_services").html(data);
		 }
		});
		document.getElementById("service_form").reset();
	}
	else
	{
		
		var editservid=$('#txthidden').val(); 
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'services_post.php';?>",
		  data: {
			  'edit' : 1,
			 'services_name':services_name,
			 'services_price':services_price,
			 'is_display':is_display,
			 'editservid':editservid,
		 },
		 success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#show_services").html(data);
		 }
		});
	}
	 document.getElementById("service_form").reset();
	 document.getElementById('service_submit').value="Save";
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
	 url: '<?php echo DIR_INCLUDES.'services_post.php';?>',
	  data: {
		  'isDisplay' : 1,
		 'value':value,
		 'catId':catId,
	 },
	 success: function(data){
		  alert("Display Status Changed Successfully!!!");
		   $("#show_services").html(data);
	 }
	});
	//window.location.reload();
}




//Remove Category
function removeservice(ser_id)
{
	var ser_id=ser_id;
	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'services_post.php';?>",
		  data: {
			  'remove' : 1,
			  'ser_id':ser_id,
		 },
		 success: function(data){
			  alert("Record deleted Successfully!!!");
			   $("#show_services").html(data);
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
function editServices(editservid,service_name,service_price,isd)
{
	$('#services_name').val(service_name);
	$('#services_price').val(service_price);
	//$('#desc').val(desc);
	if(isd==0)
	{
		$('.chk1').attr('checked',true);
	}
	if(isd==1)
	{
		$('.chk2').attr('checked',true);
	}
	$('#txthidden').val(editservid);
	
	document.getElementById('service_submit').value="Update";
	
	var editservid=editservid;
	$.post("index.php?url=SERV", {"editservid": editservid});
}
</script>
</body>
</html>
