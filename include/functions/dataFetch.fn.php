<?php


// Details category
function getCatName($conn)
{
	$sqlFetch = "SELECT `cat_id`,`cat_name` FROM `category_mst` where deleted_at='0000-00-00 00:00:00'";
	return $conn->getResultArray($sqlFetch);
}
// Details company
function getCompanyName($conn)
{
	$sqlFetch = "SELECT `company_id`,`company_name` FROM `company_mst` where deleted_at='0000-00-00 00:00:00'";
	return $conn->getResultArray($sqlFetch);
}

function getProdImg($conn)
{
	 $sqlFetch="select prod_id,prod_img_id,prod_img_dtl from product_img where prod_id in(select prod_id from product_mst where deleted_at='0000-00-00 00:00:00')";
	 return $conn -> getResultArray($sqlFetch);
}

function singlecatprod($conn,$id)
{
	
	$sqlFetch = "select prod_id,prod_img_id,prod_img_dtl from product_img where prod_id in (select prod_id from product_mst where cat_id in (select cat_id from category_mst where deleted_at='0000-00-00 00:00:00' and cat_id='".$id."'))";
	 return $conn -> getResultArray($sqlFetch);
}

function singlecompprod($conn,$id)
{
	
	$sqlFetch = "select prod_id,prod_img_id,prod_img_dtl from product_img where prod_id in (select prod_id from product_mst where company_id in (select company_id from company_mst where deleted_at='0000-00-00 00:00:00' and company_id='".$id."'))";
	 return $conn -> getResultArray($sqlFetch);
}

//get detail of single product
function getSingleProduct($conn)
{
	$sqlFetch="SELECT * FROM company_mst cm,category_mst c,product_mst pm,product_img pi where pi.prod_id=pm.prod_id and pm.cat_id=c.cat_id and pm.company_id=cm.company_id and prod_img_id=".$_REQUEST['id'];
	return $conn -> getResultArray($sqlFetch);
}
?>