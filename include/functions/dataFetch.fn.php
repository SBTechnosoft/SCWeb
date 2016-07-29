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
	 $sqlFetch="select * from product_img i,product_mst m where m.prod_id=i.prod_id and m.deleted_at='0000-00-00 00:00:00'";
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
//get technology data
function getTechnologyDtl($conn)
{
	$sqlFetch="SELECT * FROM product_technology_dtl c,product_mst pm,product_img pi where pi.prod_id=pm.prod_id and pm.prod_id=c.prod_id and prod_img_id=".$_REQUEST['id'];
	return $conn -> getResultArray($sqlFetch);
}
//get specification data
function getSpecData($conn)
{
	$sqlFetch="SELECT * FROM prod_spec_dtl c,product_mst pm,product_img pi where pi.prod_id=pm.prod_id and pm.prod_id=c.prod_id and prod_img_id=".$_REQUEST['id'];
	return $conn -> getResultArray($sqlFetch);
}
//get product  at home menu
function getProd($conn)
{
	 $sqlFetch="select * from product_img i,product_mst m where m.prod_id=i.prod_id and m.deleted_at='0000-00-00 00:00:00' ORDER BY m.prod_id DESC LIMIT 10";
	 return $conn -> getResultArray($sqlFetch);
}
//get blog data
function getBlogPost($conn)
{
	$sqlFetch="SELECT * FROM `blog_post` where `deleted_at` = '0000-00-00 00:00:00' and is_display=0";
	return $conn -> getResultArray($sqlFetch);
}
//get single blog
function getSingleBlog($conn)
{
	$sqlFetch="SELECT * FROM `blog_post` where blog_post_id=".$_REQUEST['id'];
	return $conn -> getResultArray($sqlFetch);
}
//get blog category
function getBlogCat($conn)
{
	$sqlFetch="SELECT * FROM `blog_category_mst` where `deleted_at` = '0000-00-00 00:00:00' and is_display=0";
	return $conn -> getResultArray($sqlFetch);
}
//get blog tag
function getBlogTag($conn)
{
	$sqlFetch="SELECT * FROM `blog_tag_mst` where `deleted_at` = '0000-00-00 00:00:00' and is_display=0";
	return $conn -> getResultArray($sqlFetch);
}

//get tag wise blog
function singletagblog($conn,$id)
{
	$sqlFetch = "select * from blog_post p,blog_real_tag r WHERE r.blog_post_id=p.blog_post_id and r.blog_tag_id='".$id."'";
	 return $conn -> getResultArray($sqlFetch);
}

//get category wise blog
function singleCatblog($conn,$id)
{
	$sqlFetch = "select * from blog_post where is_display=0 and deleted_at='0000-00-00 00:00:00' and blog_cat_id='".$id."'";
	 return $conn -> getResultArray($sqlFetch);
}
?>