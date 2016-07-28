<?php
include('./header.php');	

//Insert Record
  
if(isset($_POST['add']) )
{
	$cat_id=$_POST['cat_id'];
	 $company_id=$_POST['company_id'];
	
	 $resultArray = insertProductData($conn,$_REQUEST['prod_name'],$_REQUEST['prod_desc'],$_REQUEST['prod_color'],$_REQUEST['prod_size'],$_REQUEST['prod_prize'],$_REQUEST['cat_id'],$_REQUEST['company_id'],$cur_date);
	 $prod_id=mysql_insert_id();
	
	$resultArrayTech=insertTechnologyData($conn,$prod_id,$_REQUEST['tech_name'],$_REQUEST['tech_desc']);
	
	 $resultArraySpec=insertSpecsData($conn,$prod_id,$_REQUEST['spec_frame'],$_REQUEST['spec_travel'],$_REQUEST['spec_fork'],
	 $_REQUEST['spec_rear_shock'],$_REQUEST['spec_remote'],$_REQUEST['spec_headset'],$_REQUEST['spec_rear_derail'],
	 $_REQUEST['spec_front_derail'],$_REQUEST['spec_shifter'],$_REQUEST['spec_brakes'],$_REQUEST['spec_crankset'],$_REQUEST['spec_bbset'],$_REQUEST['spec_handelbar'],$_REQUEST['spec_hstem'],$_REQUEST['spec_seatpost'],$_REQUEST['spec_seat'],$_REQUEST['spec_hub_front'],$_REQUEST['spec_hub_rear'],$_REQUEST['spec_chain'],$_REQUEST['spec_cassette'],$_REQUEST['spec_spokes'],$_REQUEST['spec_rims'],$_REQUEST['spec_tires'],$_REQUEST['spec_weight']);
	$a = array();
	//print_r($_FILES);
	$fileName = $_FILES['file']['name'];
	$fileType = $_FILES['file']['type'];
	$fileError = $_FILES['file']['error'];
	$fileContent = $_FILES['file']['tmp_name'];

	$path = "../upload/product";
	$new_img=date('ymdhis').".".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent,$path."/".$new_img);
 
	echo json_encode($a);
	$resultArrayPic=insertPic($prod_id,$conn,$new_img);
//		include('show_product.php');	
}

if(isset($_POST['edit']))
 {
	$resultArrayProdUpd =UpdateProductData($conn,$_REQUEST['prod_name'],$_REQUEST['prod_desc'],$_REQUEST['prod_color'],$_REQUEST['prod_size'],$_REQUEST['prod_prize'],$_REQUEST['cat_id'],$_REQUEST['company_id'],$cur_date,$_REQUEST['prod_id']);
   
   $resultArrayTechUpd=UpdateTechnologyData($conn,$_REQUEST['tech_name'],$_REQUEST['tech_desc'],$_REQUEST['prod_id']);
   
   $resultArraySpecUpd=UpdateSpecData($conn,$_REQUEST['spec_frame'],$_REQUEST['spec_travel'],$_REQUEST['spec_fork'],
	 $_REQUEST['spec_rear_shock'],$_REQUEST['spec_remote'],$_REQUEST['spec_headset'],$_REQUEST['spec_rear_derail'],
	 $_REQUEST['spec_front_derail'],$_REQUEST['spec_shifter'],$_REQUEST['spec_brakes'],$_REQUEST['spec_crankset'],$_REQUEST['spec_bbset'],$_REQUEST['spec_handelbar'],$_REQUEST['spec_hstem'],$_REQUEST['spec_seatpost'],$_REQUEST['spec_seat'],$_REQUEST['spec_hub_front'],$_REQUEST['spec_hub_rear'],$_REQUEST['spec_chain'],$_REQUEST['spec_cassette'],$_REQUEST['spec_spokes'],$_REQUEST['spec_rims'],$_REQUEST['spec_tires'],$_REQUEST['spec_weight'],$_REQUEST['prod_id']);
   //include('show_product.php');
     
}

if(isset($_POST['remove']))
{
	$resultArray = removeProductData($conn,$_POST['prod_id'],$cur_date);
	include('show_product.php');
}

?>