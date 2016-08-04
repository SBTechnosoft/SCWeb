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
	
	$sqlFetch = "SELECT * FROM category_mst c,company_mst cm,product_mst pm,product_img pi where pi.prod_id=pm.prod_id and  pm.company_id=cm.company_id and pm.cat_id=c.cat_id and c.cat_id='".$id."'";
	 return $conn -> getResultArray($sqlFetch);
}

function singlecompprod($conn,$id)
{
	
	$sqlFetch = "SELECT * FROM company_mst cm,category_mst c,product_mst pm,product_img pi where pi.prod_id=pm.prod_id and pm.cat_id=c.cat_id and pm.company_id=cm.company_id and cm.company_id='".$id."'";
	 return $conn -> getResultArray($sqlFetch);
}

//get detail of single product
function getSingleProduct($conn)
{
	$sqlFetch="SELECT * FROM company_mst cm,category_mst c,product_mst pm,product_img pi where pi.prod_id=pm.prod_id and pm.cat_id=c.cat_id and pm.company_id=cm.company_id and prod_img_id=".$_REQUEST['id'];
	return $conn -> getResultArray($sqlFetch);
}

//get detail of similiar product on company
function getsimilarProduct($conn,$id)
{
	$sqlFetch="SELECT * FROM product_mst s,product_img p where p.prod_id=s.prod_id and s.company_id='".$id."'";
	return $conn -> getResultArray($sqlFetch);
}
//get detail of similiar product on category
function getsimilarCatProduct($conn,$id)
{
	$sqlFetch="SELECT * FROM product_img p,product_mst s where s.prod_id=p.prod_id and s.cat_id='".$id."'";
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
//get gallery image
function getGallery($conn)
{
	$sqlFetch="select * from gallery_mst where is_display=0";
	return $conn -> getResultArray($sqlFetch);
}


//get services
function getservice($conn)
{
	$sqlFetch="SELECT `services_id`,`services_name`,`services_price`,`services_detail`,`is_display`,
				`created_at`,`update_at`,`deleted_at`  FROM `services_dtl` where `deleted_at` = '0000-00-00 00:00:00' and is_display=0 LIMIT 1";
	return $conn -> getResultArray($sqlFetch);
}

//get services by click
function getserviceId($conn,$id)
{
	$sqlFetch="SELECT `services_id`,`services_name`,`services_price`,`services_detail`,`is_display`,
				`created_at`,`update_at`,`deleted_at`  FROM `services_dtl` where `deleted_at` = '0000-00-00 00:00:00' and is_display=0 and services_id='".$id."'";
	return $conn -> getResultArray($sqlFetch);
}
//get services category
function getserviceCat($conn)
{
	$sqlFetch="SELECT `services_id`,`services_name`,`services_price`,`services_detail`,`is_display`,
				`created_at`,`update_at`,`deleted_at`  FROM `services_dtl` where `deleted_at` = '0000-00-00 00:00:00' and is_display=0";
	return $conn -> getResultArray($sqlFetch);
}
//get event 
function getEventPost($conn)
{
	$sqlFetch="SELECT * FROM event_mst where deleted_at='0000-00-00 00:00:00' and is_display=0 and start_date_time > now()";
	return $conn -> getResultArray($sqlFetch);
}


function getSingleEvent($conn)
{
	$sqlFetch="SELECT * FROM event_mst m,event_organizer o,event_sponcer s where s.event_id=o.event_id and o.event_id=m.event_id and m.event_id=".$_REQUEST['id'];
	return $conn -> getResultArray($sqlFetch);
}

//get event upcoming
function getEventUp($conn)
{
	$sqlFetch="SELECT * FROM event_mst  where deleted_at = '0000-00-00 00:00:00' and is_display=0 and start_date_time > now()";
	return $conn -> getResultArray($sqlFetch);
}

//get event recent
function getEventNow($conn)
{
	$sqlFetch="SELECT * FROM event_mst  where deleted_at = '0000-00-00 00:00:00' and is_display=0 and start_date_time<now() ORDER BY event_id DESC LIMIT 3";
	return $conn -> getResultArray($sqlFetch);
}
function getContactDetail($conn)
{
	$sqlFetch="select * from contact_dtl LIMIT 1";
	 return $conn -> getResultArray($sqlFetch);
}
// Details color
function getColor($conn)
{
	$sqlFetch = "SELECT `prod_color` FROM `product_mst` GROUP BY prod_color";
	return $conn->getResultArray($sqlFetch);
}
//get event on index page
function getEventIndex($conn)
{
	$sqlFetch="SELECT * FROM event_mst where deleted_at='0000-00-00 00:00:00' and is_display=0 and start_date_time > now()  LIMIT 5";
	return $conn -> getResultArray($sqlFetch);
}
// Details achivement detail
function getAchive($conn)
{
	$sqlFetch = "SELECT * FROM `achivement_mst` where deleted_at='0000-00-00 00:00:00' and is_display=0";
	return $conn->getResultArray($sqlFetch);
}
// Details testimonial detail
function gettest($conn)
{
	$sqlFetch = "SELECT * FROM `testimonial_mst` where deleted_at='0000-00-00 00:00:00' and is_display=0";
	return $conn->getResultArray($sqlFetch);
}

// Details achivement detail on page
function getAchiveDetail($conn)
{
	$sqlFetch = "SELECT * FROM `achivement_mst` where achive_id=".$_REQUEST['id'];
	return $conn->getResultArray($sqlFetch);
}
?>