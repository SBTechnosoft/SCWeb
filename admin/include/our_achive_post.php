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

	$path = "../upload/achivement";
	$new_img=date('ymdhis').".".pathinfo($_FILES['upload_img']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent,$path."/".$new_img);
  
   echo json_encode($a);
		$achive_name=$_POST['achive_name'];
		$achive_desc=$_POST['achive_desc'];
		$is_display=$_POST['is_display'];
		$resultArray=insertachiveData($conn,$_REQUEST['achive_name'],$_REQUEST['achive_desc'],$new_img,$_REQUEST['is_display'],$cur_date);
		
		include('show_achive.php');
} 

//delete Record
if(isset($_POST['remove']))
{	
	$resultArrayremove = removeachiveData($conn,$_POST['achive_id'],$cur_date);
	include('show_achive.php');
}

//Change Display Status
if(isset($_POST['isDisplay']))
{
	$resultArray1=UpdateachiveDisplay($conn,$_POST['value'],$_POST['catId'],$cur_date);
	include('show_achive.php');
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

		$path1 = "../upload/achivement";
		$new_img1=date('ymdhis').".".pathinfo($_FILES['upload_img']['name'], PATHINFO_EXTENSION);
		move_uploaded_file($fileContent1,$path1."/".$new_img1);
  
		echo json_encode($a);
		$resultArray22 = UpdateAchiveData1($conn,$new_img1,$cur_date,$_REQUEST['editid']);
	 }
   $resultArray2 = UpdateachiveData($conn,$_REQUEST['achive_name'],$_REQUEST['achive_desc'],$_REQUEST['is_display'],$cur_date,$_REQUEST['editid']);
   include('show_achive.php');
}
	
?>