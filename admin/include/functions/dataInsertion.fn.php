<?php


//insert category data
function insertCategoryData($conn,$name,$parent_cat_id,$cur_date)
{
	$sqlInsert = "INSERT INTO category_mst (cat_name,parent_cat_id,created_at) VALUES ('".$name."','".$parent_cat_id."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}

//insert company data
function insertCompanyData($conn,$name,$cur_date)
{
	$sqlInsert = "INSERT INTO company_mst (company_name,created_at) VALUES ('".$name."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert product data
function insertProductData($conn,$prod_name,$prod_desc,$prod_color,$prod_size,$prod_prize,$cat_id,$company_id,$cur_date)
{
	$sqlInsert = "INSERT INTO product_mst (prod_name,prod_desc,prod_color,prod_size,prod_prize,cat_id,company_id,created_at) VALUES ('".$prod_name."','".$prod_desc."','".$prod_color."','".$prod_size."','".$prod_prize."','".$cat_id."','".$company_id."','".$cur_date."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert technology data
function insertTechnologyData($conn,$prod_id,$tech_name,$tech_desc)
{
	$sqlInsert = "INSERT INTO product_technology_dtl (prod_id,prod_tech_name,prod_tech_desc) VALUES ('".$prod_id."','".$tech_name."','".$tech_desc."')";
	$resultArray = $conn -> insertQuery($sqlInsert);
}
//insert specs data
function insertSpecsData($conn,$prod_id,$prod_spec_frame,$prod_spec_travel,$prod_spec_fork,$prod_spec_rear_shock,$prod_spec_remote_system,$prod_spec_headset,$prod_spec_rear_drailleur,$prod_spec_front_drailleur,$prod_spec_shifters,$prod_spec_brakes,$prod_spec_crankset,$prod_spec_bb_set,$prod_spec_handelbar,$prod_spec_hstem,$prod_spec_seat_post,$prod_spec_seat,$prod_spec_hub_front,$prod_spec_hub_rear,$prod_spec_chain,$prod_spec_cassets,$prod_spec_spokes,$prod_spec_rims,$prod_spec_tires,$prod_spec_weight)
 {
	 $sqlInsert = "INSERT INTO prod_spec_dtl (prod_id,prod_spec_frame,prod_spec_travel,prod_spec_fork,prod_spec_rear_shock,prod_spec_remote_system,prod_spec_headset, prod_spec_rear_drailleur,prod_spec_front_drailleur,prod_spec_shifters,prod_spec_brakes,prod_spec_crankset,prod_spec_bb_set,prod_spec_handelbar,prod_spec_hstem,prod_spec_seat_post,prod_spec_seat,prod_spec_hub_front,prod_spec_hub_rear,prod_spec_chain,prod_spec_cassets,prod_spec_spokes,prod_spec_rims,prod_spec_tires,prod_spec_weight) VALUES ('".$prod_id."','".$prod_spec_frame."','".$prod_spec_travel."','".$prod_spec_fork."','".$prod_spec_rear_shock."','".$prod_spec_remote_system."','".$prod_spec_headset."','".$prod_spec_rear_drailleur."','".$prod_spec_front_drailleur."','".$prod_spec_shifters."','".$prod_spec_brakes."','".$prod_spec_crankset."','".$prod_spec_bb_set."','".$prod_spec_handelbar."','".$prod_spec_hstem."','".$prod_spec_seat_post."', '".$prod_spec_seat."','".$prod_spec_hub_front."','".$prod_spec_hub_rear."','".$prod_spec_chain."','".$prod_spec_cassets."','".$prod_spec_spokes."','".$prod_spec_rims."','".$prod_spec_tires."','".$prod_spec_weight."')";
	 $resultArray = $conn -> insertQuery($sqlInsert);
	
}
// insert pic data
function insertPic($prod_id,$conn,$new_img)
{
	 $sqlInsert = "INSERT INTO `product_img`(`prod_id`,`prod_img_dtl`) VALUES ('".$prod_id."','".$new_img."')";
	$resultArraypic= $conn -> insertQuery($sqlInsert);
}
?>