<!DOCTYPE html>
<?php include("./include/header.php");?>
<?php

if(isset($_REQUEST['prod_id']))
{
	echo $_REQUEST['prod_id'];
	$resultArray=getProductArray($conn,$_REQUEST['prod_id']);
	
		 $prod_name=$resultArray[0]['prod_name'];
		$prod_desc=$resultArray[0]['prod_desc'];
		$prod_color=$resultArray[0]['prod_color'];
		$prod_size=$resultArray[0]['prod_size'];
		$prod_prize=$resultArray[0]['prod_prize'];
		$cat_id=$resultArray[0]['cat_id'];
		$company_id=$resultArray[0]['company_id'];
		$prod_tech_name=$resultArray[0]['prod_tech_name'];
		$prod_tech_desc=$resultArray[0]['prod_tech_desc'];
		$prod_spec_frame=$resultArray[0]['prod_spec_frame'];
		$prod_spec_travel=$resultArray[0]['prod_spec_travel'];
		$prod_spec_fork=$resultArray[0]['prod_spec_fork'];
		$prod_spec_rear_shock=$resultArray[0]['prod_spec_rear_shock'];
		$prod_spec_remote_system=$resultArray[0]['prod_spec_remote_system'];
		$prod_spec_headset=$resultArray[0]['prod_spec_headset'];
		$prod_spec_rear_drailleur=$resultArray[0]['prod_spec_rear_drailleur'];
		$prod_spec_front_drailleur=$resultArray[0]['prod_spec_front_drailleur'];
		$prod_spec_shifters=$resultArray[0]['prod_spec_shifters'];
		$prod_spec_brakes=$resultArray[0]['prod_spec_brakes'];
		$prod_spec_crankset=$resultArray[0]['prod_spec_crankset'];
		$prod_spec_bb_set=$resultArray[0]['prod_spec_bb_set'];
		$prod_spec_handelbar=$resultArray[0]['prod_spec_handelbar'];
		$prod_spec_hstem=$resultArray[0]['prod_spec_hstem'];
		$prod_spec_seat_post=$resultArray[0]['prod_spec_seat_post'];
		$prod_spec_seat=$resultArray[0]['prod_spec_seat'];
		$prod_spec_hub_front=$resultArray[0]['prod_spec_hub_front'];
		$prod_spec_hub_rear=$resultArray[0]['prod_spec_hub_rear'];
		$prod_spec_chain=$resultArray[0]['prod_spec_chain'];
		$prod_spec_cassets=$resultArray[0]['prod_spec_cassets'];
		$prod_spec_spokes=$resultArray[0]['prod_spec_spokes'];
		$prod_spec_rims=$resultArray[0]['prod_spec_rims'];
		$prod_spec_tires=$resultArray[0]['prod_spec_tires'];
		$prod_spec_weight=$resultArray[0]['prod_spec_weight'];
			
	
}
?>
<html lang="en">
<head>


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
</head>
<body class="animated-all">

<div class="page-header">
  <div class="container">
    <h3 class="page-title float-left">Add Product</h3>
    <ol class="breadcrumb float-right">
      <li><a href="#">Product</a></li>
      <li class="active">Add Product</li>
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
                 <form method="post" id="prod_form" name="prod_form" class="form-full-width">
				 <input id="txthidden" name="txthidden" type="hidden" value="<?php echo $_REQUEST['prod_id']; ?>"/>
					<div class="row">
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Enter Product Name" id="prod_name" name="prod_name" required value="<?php if(isset($prod_name))echo $prod_name; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" id="prod_size" name="prod_size" required placeholder="Enter Product Size" value="<?php if(isset($prod_size))echo $prod_size; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea id="prod_desc" name="prod_desc" required placeholder="Description"><?php if(isset($prod_desc))echo $prod_desc; ?></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<select class="form-control" name="cat_name" id="cat_id">
								<option>Select Category</option>
								<?php
									$rowSelectCat= getSelectCatId($conn);
									$count = count($rowSelectCat);
									for($i=0;$i<$count;$i++)
									{
								?>
								<option value="<?php echo $rowSelectCat[$i]["cat_id"];?>" <?php if(isset($cat_id)){ if($rowSelectCat[$i]["cat_id"]==$cat_id) {?> selected="selected" <?php } }?> >
								<?php echo $rowSelectCat[$i]["cat_name"];?>
								</option>
								<?php 
									} 
								?>
							</select>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								</br><span>Select Product Image </span><input type="file" name="file" id="file" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<select class="form-control" name="company_name" id="company_id">
								<option>Select Company</option>
								<?php
									$rowSelectCom= getSelectCompId($conn);
									$count = count($rowSelectCom);
									for($i=0;$i<$count;$i++)
									{
								?>
								<option value="<?php echo $rowSelectCom[$i]["company_id"];?>"<?php if(isset($company_id)){if($rowSelectCom[$i]["company_id"]==$company_id) {?> selected="selected" <?php }} ?> >
								<?php echo $rowSelectCom[$i]["company_name"];?>
								</option>
								<?php 
									} 
								?>
							</select>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="color" id="prod_color" name="prod_color" value="<?php if(isset($prod_color))echo $prod_color; ?>"/>
							</div>
						</div>
						
							<div class="col-md-6">
								<div class="form-group">
									</br><input type="text" id="prod_prize" name="prod_prize" value="<?php if(isset($prod_prize))echo $prod_prize; ?>" placeholder="Enter Prize"/>
								</div>
							</div>
						
					</div></br>
					<div class="page-header">
						<div class="container">
							<h4 class="page-title float-left">Add Product Technology</h4>
						</div>
					</div>
					<div class="row">
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Enter Technology Name" id="tech_name" name="tech_name" required value="<?php if(isset($prod_tech_name))echo $prod_tech_name; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea id="tech_desc" name="tech_desc" required placeholder="Technology Description"><?php if(isset($prod_tech_desc))echo $prod_tech_desc; ?></textarea>
							</div>
						</div>
					</div></br>
					<div class="page-header">
						<div class="container">
							<h4 class="page-title float-left">Add Product Specification</h4>
						</div>
					</div>
					<div class="row">
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Frame" id="spec_frame" name="spec_frame" required value="<?php if(isset($prod_spec_frame))echo $prod_spec_frame; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Travel" id="spec_travel" name="spec_travel" required value="<?php if(isset($prod_spec_travel))echo $prod_spec_travel; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Fork" id="spec_fork" name="spec_fork" required value="<?php if(isset($prod_spec_fork))echo $prod_spec_fork; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Rear Shock" id="spec_rear_shock" name="spec_rear_shock" required value="<?php if(isset($prod_spec_rear_shock))echo $prod_spec_rear_shock; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Remote System" id="spec_remote" name="spec_remote" required value="<?php if(isset($prod_spec_remote_system))echo $prod_spec_remote_system; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Headset" id="spec_headset" name="spec_headset" required value="<?php if(isset($prod_spec_headset))echo $prod_spec_headset; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Rear Derailleur" id="spec_rear_derail" name="spec_rear_derail" required value="<?php if(isset($prod_spec_rear_drailleur))echo $prod_spec_rear_drailleur; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Front Derailleur" id="spec_front_derail" name="spec_front_derail" required value="<?php if(isset($prod_spec_front_drailleur))echo $prod_spec_front_drailleur; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Shifters" id="spec_shifter" name="spec_shifter" required value="<?php if(isset($prod_spec_shifters))echo $prod_spec_shifters; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Brakes" id="spec_brakes" name="spec_brakes" required value="<?php if(isset($prod_spec_brakes))echo $prod_spec_brakes; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Crankset" id="spec_crankset" name="spec_crankset" required value="<?php if(isset($prod_spec_crankset))echo $prod_spec_crankset; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="BB-Set" id="spec_bbset" name="spec_bbset" required value="<?php if(isset($prod_spec_bb_set))echo $prod_spec_bb_set; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Handelbar" id="spec_handelbar" name="spec_handelbar" required value="<?php if(isset($prod_spec_handelbar))echo $prod_spec_handelbar; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="H'stem" id="spec_hstem" name="spec_hstem" required value="<?php if(isset($prod_spec_hstem))echo $prod_spec_hstem; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="SeatPost" id="spec_seatpost" name="spec_seatpost" required value="<?php if(isset($prod_spec_seat_post))echo $prod_spec_seat_post; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Seat" id="spec_seat" name="spec_seat" required value="<?php if(isset($prod_spec_seat))echo $prod_spec_seat; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Hub(Front)" id="spec_hub_front" name="spec_hub_front" required value="<?php if(isset($prod_spec_hub_front))echo $prod_spec_hub_front; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Hub(Rear)" id="spec_hub_rear" name="spec_hub_rear" required value="<?php if(isset($prod_spec_hub_rear))echo $prod_spec_hub_rear; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Chain" id="spec_chain" name="spec_chain" required value="<?php if(isset($prod_spec_chain))echo $prod_spec_chain; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Cassette" id="spec_cassette" name="spec_cassette" required value="<?php if(isset($prod_spec_cassets))echo $prod_spec_cassets; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Spokes" id="spec_spokes" name="spec_spokes" required value="<?php if(isset($prod_spec_spokes))echo $prod_spec_spokes; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Rims" id="spec_rims" name="spec_rims" required value="<?php if(isset($prod_spec_rims))echo $prod_spec_rims; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Tires" id="spec_tires" name="spec_tires" required value="<?php if(isset($prod_spec_tires))echo $prod_spec_tires; ?>">
							</div>
						</div>
						<div class=" col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Weight" id="spec_weight" name="spec_weight" required value="<?php if(isset($prod_spec_weight))echo $prod_spec_weight; ?>">
							</div>
						</div>
					</div>
					<div class="row"> 
						<div class="col-md-1">
							<?php
								if(isset($_REQUEST['prod_id']))
									{ ?>
								<input type="button" class="btn-primary" value="Update" id="pro_update" name="pro_update" onclick="postUpdate()"/>
							<?php } 
								else { ?>
									<input type="button" class="btn-primary" value="Save" id="pro_submit" name="pro_submit" onclick="postData()"/>
							<?php } ?>
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
<script type="text/javascript">

function postData()
{
	
	var prod_name=$('#prod_name').val();
	var prod_desc=$('#prod_desc').val();
	var prod_color=$('#prod_color').val();
	var prod_size=$('#prod_size').val();
	var prod_prize=$('#prod_prize').val();
	var cat_id=$('#cat_id').val();
	var company_id=$('#company_id').val();
	var tech_name=$('#tech_name').val();
	var tech_desc=$('#tech_desc').val();
	var spec_frame=$('#spec_frame').val();
	var spec_travel=$('#spec_travel').val();
	var spec_fork=$('#spec_fork').val();
	var spec_rear_shock=$('#spec_rear_shock').val();
	var spec_remote=$('#spec_remote').val();
	var spec_headset=$('#spec_headset').val();
	var spec_rear_derail=$('#spec_rear_derail').val();
	var spec_front_derail=$('#spec_front_derail').val();
	var spec_shifter=$('#spec_shifter').val();
	var spec_brakes=$('#spec_brakes').val();
	var spec_crankset=$('#spec_crankset').val();
	var spec_bbset=$('#spec_bbset').val();
	var spec_handelbar=$('#spec_handelbar').val();
	var spec_hstem=$('#spec_hstem').val();
	var spec_seatpost=$('#spec_seatpost').val();
	var spec_seat=$('#spec_seat').val();
	var spec_hub_front=$('#spec_hub_front').val();
	var spec_hub_rear=$('#spec_hub_rear').val();
	var spec_chain=$('#spec_chain').val();
	var spec_cassette=$('#spec_cassette').val();
	var spec_spokes=$('#spec_spokes').val();
	var spec_rims=$('#spec_rims').val();
	var spec_tires=$('#spec_tires').val();
	var spec_weight=$('#spec_weight').val();
	var file = new FormData();
        file.append('file', $('#file')[0].files[0]);
		file.append('add', 1);
		 file.append('prod_name', prod_name);
		 file.append('prod_desc', prod_desc);
		 file.append('prod_color', prod_color);
		 file.append('prod_size', prod_size);
		 file.append('prod_prize', prod_prize);
		 file.append('cat_id', cat_id);
		 file.append('company_id', company_id);
		 file.append('tech_name', tech_name);
		 file.append('tech_desc', tech_desc);
		 file.append('spec_frame', spec_frame);
		 file.append('spec_travel', spec_travel);
		 file.append('spec_fork', spec_fork);
		 file.append('spec_rear_shock', spec_rear_shock);
		 file.append('spec_remote', spec_remote);
		 file.append('spec_headset', spec_headset);
		 file.append('spec_rear_derail', spec_rear_derail);
		 file.append('spec_front_derail', spec_front_derail);
		 file.append('spec_shifter', spec_shifter);
		 file.append('spec_brakes', spec_brakes);
		 file.append('spec_crankset', spec_crankset);
		 file.append('spec_bbset', spec_bbset);
		 file.append('spec_handelbar', spec_handelbar);
		 file.append('spec_hstem', spec_hstem);
		 file.append('spec_seatpost', spec_seatpost);
		 file.append('spec_seat', spec_seat);
		 file.append('spec_hub_front', spec_hub_front);
		 file.append('spec_hub_rear', spec_hub_rear);
		 file.append('spec_chain', spec_chain);
		 file.append('spec_cassette', spec_cassette);
		 file.append('spec_spokes', spec_spokes);
		 file.append('spec_rims', spec_rims);
		 file.append('spec_tires', spec_tires);
		 file.append('spec_weight', spec_weight);
		 
	var btnValue=document.getElementById('pro_submit').value;
	if(btnValue=="Save")
	{
		$.ajax({
			
		 type: 'POST',
		 async : false,
		 url: '<?php echo DIR_INCLUDES.'productPost.php';?>',
		 cache: false,
		 contentType: false,
		 processData:false,
		 data: file,
        
		 success: function(data){
			 
			  alert("Record Inserted Successfully!!!");
			
			
		 }
		
		});
		 
	}
		document.getElementById("prod_form").reset();
	 document.getElementById('pro_submit').value="Save";
	window.location="<?php echo HTTP_SERVER.'index.php?url=PRODALL';?>";
	
}
</script>
<script type="text/javascript">
function postUpdate()
{
	
	var prod_name=$('#prod_name').val();
	var prod_desc=$('#prod_desc').val();
	var prod_color=$('#prod_color').val();
	var prod_size=$('#prod_size').val();
	var prod_prize=$('#prod_prize').val();
	var cat_id=$('#cat_id').val();
	var company_id=$('#company_id').val();
	var tech_name=$('#tech_name').val();
	var tech_desc=$('#tech_desc').val();
	var spec_frame=$('#spec_frame').val();
	var spec_travel=$('#spec_travel').val();
	var spec_fork=$('#spec_fork').val();
	var spec_rear_shock=$('#spec_rear_shock').val();
	var spec_remote=$('#spec_remote').val();
	var spec_headset=$('#spec_headset').val();
	var spec_rear_derail=$('#spec_rear_derail').val();
	var spec_front_derail=$('#spec_front_derail').val();
	var spec_shifter=$('#spec_shifter').val();
	var spec_brakes=$('#spec_brakes').val();
	var spec_crankset=$('#spec_crankset').val();
	var spec_bbset=$('#spec_bbset').val();
	var spec_handelbar=$('#spec_handelbar').val();
	var spec_hstem=$('#spec_hstem').val();
	var spec_seatpost=$('#spec_seatpost').val();
	var spec_seat=$('#spec_seat').val();
	var spec_hub_front=$('#spec_hub_front').val();
	var spec_hub_rear=$('#spec_hub_rear').val();
	var spec_chain=$('#spec_chain').val();
	var spec_cassette=$('#spec_cassette').val();
	var spec_spokes=$('#spec_spokes').val();
	var spec_rims=$('#spec_rims').val();
	var spec_tires=$('#spec_tires').val();
	var spec_weight=$('#spec_weight').val();
	
	var btnValue=document.getElementById('pro_update').value;
	
	if(btnValue=="Update")
	{
		
		var prod_id=$('#txthidden').val(); 
		
		 $.ajax({
		 type: "POST",
		 async : false,
		 url: "<?php echo DIR_INCLUDES.'productPost.php';?>",
		 data: {
			 'edit' : 1,
			 'prod_name':prod_name,
			 'prod_desc':prod_desc,
			 'prod_color':prod_color,
			 'prod_size':prod_size,
			 'prod_prize':prod_prize,
			 'cat_id':cat_id,
			 'company_id':company_id,
			 'prod_id':prod_id,
			 'tech_name':tech_name,
			'tech_desc':tech_desc,
		 'spec_frame':spec_frame,
		 'spec_travel':spec_travel,
		 'spec_fork':spec_fork,
		 'spec_rear_shock':spec_rear_shock,
		 'spec_remote':spec_remote,
		 'spec_headset':spec_headset,
		 'spec_rear_derail':spec_rear_derail,
		 'spec_front_derail':spec_front_derail,
		 'spec_shifter':spec_shifter,
		 'spec_brakes':spec_brakes,
		 'spec_crankset':spec_crankset,
		 'spec_bbset':spec_bbset,
		 'spec_handelbar':spec_handelbar,
		 'spec_hstem':spec_hstem,
		 'spec_seatpost':spec_seatpost,
		 'spec_seat':spec_seat,
		 'spec_hub_front':spec_hub_front,
		 'spec_hub_rear':spec_hub_rear,
		 'spec_chain':spec_chain,
		 'spec_cassette':spec_cassette,
		'spec_spokes':spec_spokes,
		 'spec_rims':spec_rims,
		 'spec_tires':spec_tires,
		 'spec_weight':spec_weight,
			 
		 },
		
		 success: function(data){
			 
			  alert("Record Updated Successfully!!!");
			  //$("#show_pro").html(data);
		 }
		 
		});
		
		
	}
	document.getElementById("prod_form").reset();
	//document.getElementById('pro_update').value="Save";
	window.location="<?php echo HTTP_SERVER.'index.php?url=PRODALL';?>";
}

</script>
</body>
</html>
