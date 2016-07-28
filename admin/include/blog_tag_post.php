<?php
include('./header.php');	
//Insert New Record
if(isset($_POST['add']))
{
	$resultArray=insertTagData($conn,$_REQUEST['blog_tag_name'],$_REQUEST['blog_tag_desc'],$_REQUEST['is_display'],$cur_date);
	include('show_Blog_Tag.php');
} 
//delete Record
if(isset($_POST['remove']))
{
	$resultArrayREM = removeTagData($conn,$_POST['b_tag_id'],$cur_date);
	include('show_Blog_Tag.php');
}
//Change Display Status
if(isset($_POST['isDisplay']))
{
	$resultArray1=UpdateTagDisplay($conn,$_POST['value'],$_POST['btagId'],$cur_date);
	include('show_Blog_Tag.php');
}
//edit Record
 if(isset($_POST['edit']))
 {
   $resultArray2 = UpdateTagData($conn,$_REQUEST['blog_tag_name'],$_REQUEST['blog_tag_desc'],$_REQUEST['is_display'],$cur_date,$_REQUEST['editbtagcatid']);
   include('show_Blog_Tag.php');
 }
?>