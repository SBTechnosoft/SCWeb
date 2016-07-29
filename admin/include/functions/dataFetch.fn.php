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
//Get Blog Category Data
function showBlogCategoryData($conn)
{
	$sqlFetch="select blog_cat_id,blog_cat_name,blog_cat_desc,is_display from blog_category_mst where deleted_at='0000-00-00 00:00:00'";
	return $conn -> getResultArray($sqlFetch);
}
//get tag data
function showTagData($conn)
{
	$sqlFetch="select blog_tag_id,blog_tag_name,blog_tag_desc,is_display from blog_tag_mst where deleted_at='0000-00-00 00:00:00'";
	return $conn -> getResultArray($sqlFetch);
}
//Get Blog Category At Blog page
function showBlogCatData($conn)
{
	$sqlFetch="select blog_cat_id,blog_cat_name,blog_cat_desc,is_display from blog_category_mst where deleted_at='0000-00-00 00:00:00'";
	return $conn -> getResultArray($sqlFetch);
}
//get tag data
function showTagData1($conn)
{
	$sqlFetch="select blog_tag_id,blog_tag_name,blog_tag_desc,is_display from blog_tag_mst where deleted_at='0000-00-00 00:00:00'";
	return $conn -> getResultArray($sqlFetch);
}
//get blog data
function showBlogPostData($conn)
{
	$sqlFetch="select blog_post_id,blog_post_name,blog_post_desc,blog_cat_id,is_display from blog_post where deleted_at='0000-00-00 00:00:00'";
	return $conn -> getResultArray($sqlFetch);
}
function getBlogTags($conn)
{
	$sqlFetch="SELECT `blog_tag_id`,`blog_tag_name` FROM `blog_tag_mst`";
	
	return $conn -> getResultArray($sqlFetch);
}
function getSelectblogId($conn,$id)
{
	$sqlFetch="SELECT `blog_cat_id`,`blog_cat_name` FROM `blog_category_mst` where `blog_cat_id`='".$id."'";
	
	return $conn -> getResultArray($sqlFetch);
}
function getBlogTagsId($conn,$id)
{
	$sqlFetch="select blog_post_id,blog_tag_id from blog_real_tag where blog_post_id='".$id."'";
	return $conn -> getResultArray($sqlFetch);
}
function getSelecttagId($conn,$id)
{
	$sqlFetch="SELECT `blog_tag_id`,`blog_tag_name` FROM `blog_tag_mst` where `blog_tag_id`='".$id."'";
	
	return $conn -> getResultArray($sqlFetch);
}

function latestGallery($conn)
{
	$sqlFetch="select * from gallery_mst";
	 return $conn -> getResultArray($sqlFetch);
}

//select services data

function getSelectservices($conn)
{
	$sqlFetch="SELECT `services_id`,`services_name`,`services_price`,`services_detail`,`is_display`,`created_at`,`update_at`,`deleted_at` FROM `services_dtl` where `deleted_at` = '0000-00-00 00:00:00' ";
	
	return $conn -> getResultArray($sqlFetch);
}
//fetch event data
function latestevent($conn)
{
	$sqlFetch="select * from event_mst e,event_organizer o,event_sponcer s where s.event_id=o.event_id and o.event_id=e.event_id and  deleted_at='0000-00-00 00:00:00'";
	
	
	 return $conn -> getResultArray($sqlFetch);
}
function latestevent1($conn)
{
	$sqlFetch="select * from event_mst e,event_gallery g where g.event_id=e.event_id LIMIT 1";
	 return $conn -> getResultArray($sqlFetch);
}
?>