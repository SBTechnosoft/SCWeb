<?php
include('./header.php');	

//Insert New Record
if(isset($_POST['add']))
{
	$a = array();	
	$fileName=$_FILES['upload_img']['name'];
	$fileType=$_FILES['upload_img']['type'];
	$fileError=$_FILES['upload_img']['error'];
	$fileContent=$_FILES['upload_img']['tmp_name'];

	$path = "../upload/testimonial";
	$new_img=date('ymdhis').".".pathinfo($_FILES['upload_img']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent,$path."/".$new_img);
  
   echo json_encode($a);
		
		$testimonial_desc=$_POST['testimonial_desc'];
		$is_display=$_POST['is_display'];
		$resultArray=inserttestData($conn,$_REQUEST['testimonial_desc'],$new_img,$_REQUEST['is_display'],$cur_date);
		
		include('show_testimonial.php');
} 

//delete Record
if(isset($_POST['remove']))
{	
	$resultArrayremove = removetestData($conn,$_POST['test_id'],$cur_date);
	include('show_testimonial.php');
}

//Change Display Status
if(isset($_POST['isDisplay']))
{
	$resultArray1=UpdatetestDisplay($conn,$_POST['value'],$_POST['catId'],$cur_date);
	include('show_testimonial.php');
}

//edit Record
 if(isset($_POST['edit']))
 {
	 if(isset($_FILES['upload_img']) && count($_FILES['upload_img']['error']) == 1 && $_FILES['upload_img']['error'][0] > 0)
	 {
		
	 }
	 else if(isset($_FILES['upload_img']))
	 {
		$a = array();	
		$fileName1=$_FILES['upload_img']['name'];
		$fileType1=$_FILES['upload_img']['type'];
		$fileError1=$_FILES['upload_img']['error'];
		$fileContent1=$_FILES['upload_img']['tmp_name'];

		$path1 = "../upload/testimonial";
		$new_img1=date('ymdhis').".".pathinfo($_FILES['upload_img']['name'], PATHINFO_EXTENSION);
		move_uploaded_file($fileContent1,$path1."/".$new_img1);
  
		echo json_encode($a);
		$resultArray22 = UpdatetestData1($conn,$new_img1,$cur_date,$_REQUEST['editid']);
	 }
   $resultArray2 = UpdatetestData($conn,$_REQUEST['testimonial_desc'],$_REQUEST['is_display'],$cur_date,$_REQUEST['editid']);
   include('show_testimonial.php');
}
	
?>