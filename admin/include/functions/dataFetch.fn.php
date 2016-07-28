<?php
function getSelectCat($conn)
{
	$sqlFetch="SELECT `cat_id`,`parent_cat_id`,`cat_name` FROM `category_mst` where deleted_at='0000-00-00 00:00:00'";
	return $conn -> getResultArray($sqlFetch);
}
//fetch company data
function getSelectComp($conn)
{
	$sqlFetch="SELECT `company_id`,`company_name` FROM `company_mst` where deleted_at='0000-00-00 00:00:00'";
	return $conn -> getResultArray($sqlFetch);
}
//fetch record at product page
function getSelectCatId($conn)
{
	$sqlFetch="SELECT `cat_id`,`parent_cat_id`,`cat_name` FROM `category_mst` where `deleted_at` = '0000-00-00 00:00:00'";
	
	return $conn -> getResultArray($sqlFetch);
}
//fetch record at product page
function getSelectCompId($conn)
{
	$sqlFetch="SELECT `company_id`,`company_name` FROM `company_mst` where `deleted_at` = '0000-00-00 00:00:00' ";
	
	return $conn -> getResultArray($sqlFetch);
}
//fetch product 
function getProduct($conn)
{
	$sqlFetch="SELECT `prod_id`,`prod_name`,`prod_desc`,`prod_color`,`prod_size`,`prod_prize`,`cat_id`,`company_id` FROM `product_mst` where `deleted_at` = '0000-00-00 00:00:00'";
	
	return $conn -> getResultArray($sqlFetch);
}
//fetch product category on display
function getCategory($conn,$id)
{
	$sqlFetch="SELECT `cat_id`,`parent_cat_id`,`cat_name` FROM `category_mst` where `cat_id`='".$id."'";
	
	return $conn -> getResultArray($sqlFetch);
}
//fetch product company on display
function getCompany($conn,$id)
{
	$sqlFetch="SELECT `company_id`,`company_name` FROM `company_mst` where `company_id`='".$id."'";
	return $conn -> getResultArray($sqlFetch);
}

function getProductArray($conn,$id)
{
	$sqlFetch="select * from  prod_spec_dtl ps,product_technology_dtl pt,product_mst pm where pm.prod_id=pt.prod_id and pt.prod_id=ps.prod_id and pm.prod_id ='".$id."'";
	return $conn -> getResultArray($sqlFetch);
}
?>