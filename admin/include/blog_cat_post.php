<?php
include('./header.php');	
//Insert New Record
if(isset($_POST['add']))
{
	$resultArray=insertBlogCategoryData($conn,$_REQUEST['blog_cat_name'],$_REQUEST['blog_cat_desc'],$_REQUEST['is_display'],$cur_date);
	include('show_blog_cat.php');
} 

//delete Record

if(isset($_POST['remove']))
{
	$resultArray = removeBlogCategoryData($conn,$_POST['b_cat_id'],$cur_date);
	include('show_blog_cat.php');
}
//Change Display Status
if(isset($_POST['isDisplay']))
{
	$resultArray1=UpdateBlogCategoryDisplay($conn,$_POST['value'],$_POST['bcatId'],$cur_date);
	include('show_blog_cat.php');
}

//edit Record
 if(isset($_POST['edit']))
 {
   $resultArray2 = UpdateBlogCategoryData($conn,$_REQUEST['blog_cat_name'],$_REQUEST['blog_cat_desc'],$_REQUEST['is_display'],$cur_date,$_REQUEST['editbcatid']);
   include('show_blog_cat.php');
}
?>