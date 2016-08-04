<!DOCTYPE html>
<?php include("./include/header.php");?>

<html lang="en">
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
    <h3 class="page-title float-left">Add Event</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Event</a></li>
      <li class="active">Add Event</li>
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
                 <form method="post" id="event_form" name="event_form" class="form-full-width" enctype="multipart/form-data">
				 <input id="txthidden" name="txthidden" type="hidden" value=""/>
					<div class="row">
						<div class=" col-md-6">
							<div class="form-group">
							<input type="text" placeholder="Enter Event Name" id="event_name" name="event_name" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" id="event_place" name="event_place" required placeholder="Enter Event Place" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea id="event_desc" name="event_desc" required placeholder="Description"></textarea>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<span> Start Date</span><input type="datetime-local" name="start_date" id="start_date"/>
							</div>
					</div>
					<div class="col-md-3">
							<div class="form-group">
								<span> End Date</span><input type="datetime-local" name="end_date" id="end_date"/>
							</div>
					</div>
				</div>
					<div class="col-md-3">
							<div class="form-group">
							<img  id="txtimg"  />
								<span>Select Event Logo </span><input style="border:0;" type="file" name="logo_dtl" id="logo_dtl" />
							</div>
					</div>
					<div class="col-md-3">
							<div class="form-group">
							<img  id="txtimg1"  />
								<span>Select Event Banner </span><input style="border:0;" type="file" name="baner_dtl" id="baner_dtl" />
							</div>
					</div>
						<div class="col-md-3">
							<div class="form-group">
							<img  id="txtimg5"  />
								<span>Select Event Gallery </span><input style="border:0;" type="file" name="gallery_dtl[]" id="gallery_dtl" multiple />
							</div>
						</div>
					
					<div class="page-header">
						<div class="container">
						<h4 class="page-title float-left">Add Organization Detail</h4>
					</div>
					</div>
					<div class="row">
						<div class=" col-md-6">
							<div class="form-group">
							<input type="text" placeholder="Enter Organization Name" id="org_name" name="org_name" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" id="org_website" name="org_website" required placeholder="Enter Website" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" id="org_no" name="org_no" required placeholder="Enter Contact No" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<img  id="txtimg3"  />
								
								<span>Select Organization Logo </span><input style="border:0;" type="file" name="org_logo" id="org_logo" />
								
							</div>
						</div>
					</div>
						<div class="page-header">
							<div class="container">
								<h4 class="page-title float-left">Add Sponser Detail</h4>
							</div>
						</div>
					<div class="row">
						<div id="sponserdiv">
							<div class=" col-md-6">
								<div class="form-group">
									<input type="text" placeholder="Enter Sponser Name" id="spon_name" name="spon_name" required />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="spon_website" name="spon_website" required placeholder="Enter Website" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="number" id="spon_no" name="spon_no" required placeholder="Enter Contact No" >
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<img  id="txtimg4"  />
										<span>Select Sponser Logo </span><input style="border:0;" type="file" name="spon_logo" id="spon_logo" />
								</div>
							</div>
						</div>
						<div class="col-md-1">
							<input type="button" class="btn-primary" value="Add" id="sponcer" name="sponcer" onclick="addSponsers();"/>
						</div>
					<table class="table table-responsive"> 
						<thead>
							<tr>
								<th>SR.No</th>
								<th>Sponcer Name</th>							
								<th>Sponcer website</th>
								<th>Sponcer No</th>
								<th>Sponcer Logo</th>
								
							</tr>
						</thead>
						<tbody id="showSponersData">
							
						</tbody>
				</table>
					</div>
					<div class=" col-md-12">
									<div class="form-group">
										
										</br><label style="">Do You Want To Display:</label></br>
										<div class="col-md-1">
											<input type="radio" value="0" name="is_display" id="is_display" checked="checked" class="chk1"/>Yes</div>
											<div class="col-md-1"><input type="radio" value="1" name="is_display" id="is_display" checked="checked" class="chk2"/>No</div>
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
							<input type="button" class="btn-primary" value="Save" id="event_btn" name="event_btn" onclick="postData()"/>
						</div>
					</div>
               </form>
			   </div>
             </section></br>
			 <table class="table table-responsive"> 
						<thead>
							<tr>
								<th>Event Name</th>							
								<th>Event Logo</th>
								<th>Event Baner</th>
								<th>Event Description</th>
								<th>Is Display?</th>
								<th>Action</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="showEvent">
							<?php include('show_event.php');?>
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
//Add Sponsers
var sponserCount=1;
function addSponsers()
{
	var spon_name=$('#spon_name').val();
	var spon_website=$('#spon_website').val();
	var spon_no=$('#spon_no').val();
	var spon_logo=$('#spon_logo').prop('files')[0];
	if(spon_name=="")
	{
		alert("Please enter required fields");
	}
	else
	{
		var div = '<tr id="sponserrow'+sponserCount+'" ><td>'+sponserCount+'</td><td>'+spon_name+'</td><td>'+spon_website+'</td><td>'+spon_no+'</td><td>'+spon_logo+'</td><td><a href="#" id="'+sponserCount+'" class="removesponser">Remove</a></td><td><input type="hidden" name="sponsernamehidden" class="sponsernameclass" value="'+spon_name+'"/><input type="hidden" name="sponserwebsitehidden" class="sponserwebsiteclass" value="'+spon_website+'"/><input type="hidden" name="sponsernohidden" class="sponsernoclass" value="'+spon_no+'"/><input type="hidden" name="sponserlogohidden" class="sponserlogoclass" value="'+spon_logo+'"/></td></tr>';	
		sponserCount=sponserCount+1;
		$('#showSponersData').append(div);
		$('#spon_name').val("");
		$('#spon_website').val("");
		$('#spon_no').val("");
		$('#spon_logo').val("");
	}
}
//Remove Sponsers
$(document).on('click','.removesponser',function() {
    
	var button_id = $(this).attr("id");
    $("#sponserrow"+button_id+"").remove();
});

function postData()
{
	
	var event_name=$('#event_name').val();
	var start_date=$('#start_date').val();
	var end_date=$('#end_date').val();
	var event_desc=$('#event_desc').val();
	var event_place=$('#event_place').val();
	var org_name=$('#org_name').val();	
	var org_no=$('#org_no').val();
	var org_website=$('#org_website').val();
	//var spon_name=$('#spon_name').val();	
	//var spon_no=$('#spon_no').val();
	//var spon_website=$('#spon_website').val();	
	var is_display=$('#is_display').val();
	var file = new FormData();
	//Sponser's details
	var spon_name=[];
	$("input[name='sponsernamehidden']").each(function() {
		spon_name.push($(this).val());
	});
	
	for(var i = 0; i < spon_name.length; ++i) 
	{
		file.append('spon_name['+i+']', spon_name[i]);
		
	}
	var spon_website=[];
	$("input[name='sponserwebsitehidden']").each(function() {
		spon_website.push($(this).val());
	});
	for(var i = 0; i < spon_website.length; ++i) 
	{
		file.append('spon_website['+i+']', spon_website[i]);
	}
	var spon_no=[];
	$("input[name='sponsernohidden']").each(function() {
		spon_no.push($(this).val());
	});
	for(var i = 0; i < spon_no.length; ++i) 
	{
		file.append('spon_no['+i+']', spon_no[i]);
	}
	var spon_logo=[];	
	$("input[name='sponserlogohidden']").each(function() {
		spon_logo.push($(this).val());
	});
	for(var i = 0; i < spon_logo.length; ++i) 
	{
		file.append('spon_logo['+i+']', spon_logo[i]);	
	}
	

        file.append('logo_dtl', $('#logo_dtl')[0].files[0]);
		file.append('baner_dtl', $('#baner_dtl')[0].files[0]);
		file.append('org_logo', $('#org_logo')[0].files[0]);
		//file.append('gallery_dtl', $('#gallery_dtl')[0].files[0]);
		for(var i = 0; i < $('#gallery_dtl').get(0).files.length; ++i) 
	{
		var img_name=$('#gallery_dtl').prop('files')[i];
		file.append('gallery_dtl['+i+']', img_name);	
	}
		//file.append('spon_logo', $('#spon_logo')[0].files[0]);
		
		 file.append('event_name', event_name);
		 file.append('start_date', start_date);
		 file.append('end_date', end_date);
		 file.append('event_desc', event_desc);
		 file.append('event_place', event_place);
		 file.append('org_name', org_name);
		 file.append('org_no', org_no);
		 file.append('org_website', org_website);
		// file.append('spon_name', spon_name);
		// file.append('spon_no', spon_no);
		// file.append('spon_website', spon_website);
		 file.append('is_display', is_display);
		
		 
	var btnValue=document.getElementById('event_btn').value;
	if(btnValue=="Save")
	{
		file.append('add', 1);
		$.ajax({
			
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'event_post.php';?>',
		 cache: false,
		 contentType: false,
		 processData:false,
		 data: file,
         success: function(data){
			 
			  alert("Record Inserted Successfully!!!");
			  $("#showEvent").html(data);
			
		 }
		
		});
		 
	}

	
	else
	{
		var editid=$('#txthidden').val(); 
		file.append('editid', editid);		
		file.append('edit', 1);
		for(var i = 0; i < $('#gallery_dtl').get(0).files.length; ++i) 
		{
		var img_name=$('#gallery_dtl').prop('files')[i];
		file.append('gallery_dtl['+i+']', img_name);	
		}
		$.ajax({
		 type: "POST",
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'event_post.php';?>',
		  data: file,
		   cache: false,
		  contentType: false,
		  processData:false,
		  success: function(data){
			  alert("Record Updated Successfully!!!");
			  $("#showEvent").html(data);
		 }
		});
	}
	 document.getElementById("event_form").reset();
	document.getElementById('event_btn').value="Save";
	window.location="<?php echo HTTP_SERVER.'index.php?url=EVENT';?>";
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
	 url: '<?php echo DIR_INCLUDES.'event_post.php';?>',
	  data: {
		  'isDisplay' : 1,
		 'value':value,
		 'catId':catId,
	 },
	 success: function(data){
		  alert("Display Status Changed Successfully!!!");
		   $("#showEvent").html(data);
	 }
	});
	//window.location.reload();
}

function removeCat(catId)
{
	var catId=catId;

	if (confirm("Are you sure you want to delete this?"))
	{
		$.ajax({
		 type: "POST",
		 async : false,
		 url:'<?php echo DIR_INCLUDES.'event_post.php';?>',
		
			  'remove' : 1,
			  'catId':catId,
		
		 success: function(data){
			  alert("Record deleted Successfully!!!");
			   $("#showEvent").html(data);
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
function editevent(editid,name,s_date,e_date,img,img1,desc,e_place,isd,org,img3,orgcon,orgwe,spname,img4,spno,spwe,img5)
{
		
	$('#event_name').val(name);
	$('#start_date').val(s_date);
	$('#end_date').val(e_date);
	$('#txtimg').attr({src:'<?php echo DIR_EVENT ?>'+img,height:'150px',width:'150px'});
	$('#txtimg1').attr({src:'<?php echo DIR_EVENTBANER ?>'+img1,height:'150px',width:'150px'});
	$('#event_desc').val(desc);
	$('#event_place').val(e_place);
	
	if(isd==0)
	{
		$('.chk1').attr('checked',true);
	}
	if(isd==1)
	{
		$('.chk2').attr('checked',true);
	}
	$('#org_name').val(org);
	$('#txtimg3').attr({src:'<?php echo DIR_EVENTORG ?>'+img3,height:'150px',width:'150px'});
	$('#org_no').val(orgcon);
	$('#org_website').val(orgwe);
	$('#spon_name').val(spname);
	$('#txtimg4').attr({src:'<?php echo DIR_EVENTSPON ?>'+img4,height:'150px',width:'150px'});
	$('#spon_no').val(spno);
	$('#spon_website').val(spwe);
	$('#txtimg5').attr({src:'<?php echo DIR_EVENTGALL ?>'+img5,height:'150px',width:'150px'});
	$('#txthidden').val(editid);
	document.getElementById('event_btn').value="Update";
	var editid=editid;
	$.post("index.php?url=EVENT", {"editid": editid});
}
</script>

</body>
</html>
