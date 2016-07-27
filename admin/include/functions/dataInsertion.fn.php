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
?>