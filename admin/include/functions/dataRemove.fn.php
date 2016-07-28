<?php
function removecatData($conn,$id,$cur_date)
{
	$sqlremove="update `category_mst` set deleted_at='".$cur_date."' where cat_id='".$id."'";
	return $conn -> insertQuery($sqlremove);
}
//remove company data
function removeCompanyData($conn,$id,$cur_date)
{
	$sqlremove="update `company_mst` set deleted_at='".$cur_date."' where company_id='".$id."'";
	return $conn -> insertQuery($sqlremove);
}
//remove Blog Category Data
function removeBlogCategoryData($conn,$id,$cur_date)
{
	 $sqlremove="update `blog_category_mst` set deleted_at='".$cur_date."' where  blog_cat_id='".$id."'";
	return $conn -> insertQuery($sqlremove);
}
//remove tag data
function removeTagData($conn,$id,$cur_date)
{
	 $sqlremove="update `blog_tag_mst` set deleted_at='".$cur_date."' where  blog_tag_id='".$id."'";
	return $conn -> insertQuery($sqlremove);
}
//remove blog
function removeBlogPostData($conn,$id,$cur_date)
{
	 $sqlremove="update `blog_post` set deleted_at='".$cur_date."' where blog_post_id='".$id."'";
	return $conn -> insertQuery($sqlremove);
}
?>