<?php
include('./header.php');	

//Insert Record
if(isset($_POST['add']))
{
	$resultArray = insertCategoryData($conn,$_REQUEST['cat_name'],$_REQUEST['parent_cat_name'],$cur_date);
	include('show_Category.php');
}
if(isset($_POST['edit']))
 {
   $resultArraycat = UpdateCategoryData($conn,$_REQUEST['cat_name'],$_REQUEST['parent_cat_name'],$cur_date,$_REQUEST['editcatid']);
   include('show_Category.php');
}
if(isset($_POST['remove']))
{
	$resultArray = removecatData($conn,$_POST['cat_id'],$cur_date);
	include('show_Category.php');
}
?>