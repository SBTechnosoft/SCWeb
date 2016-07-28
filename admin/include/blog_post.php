<?php
include('./header.php');	

//Insert New Record
if(isset($_POST['add']))
{
		$blog_cat_id=$_POST['blog_cat_id'];
		$resultArray=insertblogPostData($conn,$_REQUEST['blog_name'],$_REQUEST['blog_desc'],$_REQUEST['blog_cat_id'],$_REQUEST['is_display'],$cur_date);
		$id_array = $_POST['vals']; 
		$id_count = count($_POST['vals']);
		$blog_id=mysql_insert_id();
		for($i=0; $i<$id_count;$i++) 
		{
			$tagid = $id_array[$i];
			$resultArray=insertBlogTagsrel($conn,$blog_id,$tagid);
		}
		include('show_blog.php');
} 

//delete Record
if(isset($_POST['remove']))
{	
	$resultArrayremove = removeBlogPostData($conn,$_POST['blog_id'],$cur_date);
	include('show_blog.php');
}

//Change Display Status
if(isset($_POST['isDisplay']))
{
	$resultArray1=UpdateBlogPostDisplay($conn,$_POST['value'],$_POST['catId'],$cur_date);
	include('show_blog.php');
}

//edit Record
 if(isset($_POST['edit']))
 {
   $resultArray2 = UpdateBlogPostData($conn,$_REQUEST['blog_name'],$_REQUEST['blog_desc'],$_REQUEST['blog_cat_id'],$_REQUEST['is_display'],$cur_date,$_REQUEST['editblogid']);
   include('show_blog.php');
}
	
?>