<?php
include('./header.php');	

//Insert Record
if(isset($_POST['add']))
{
	$desc=json_encode($_REQUEST['desc']);
	$resultArray = insertServicesData($conn,$_REQUEST['services_name'],$_REQUEST['services_price'],$desc,$_REQUEST['is_display'],$cur_date);
	include('show_services.php');
}
if(isset($_POST['edit']))
 {
   $resultArrayser = UpdateServicesData($conn,$_REQUEST['services_name'],$_REQUEST['services_price'],$_REQUEST['is_display'],$cur_date,$_REQUEST['editservid']);
   include('show_services.php');
}
//Change Display Status
if(isset($_POST['isDisplay']))
{
	$resultArray1=UpdateservicesDisplay($conn,$_POST['value'],$_POST['catId'],$cur_date);
	include('show_services.php');
}

if(isset($_POST['remove']))
{
	$resultRmService = removeservicesData($conn,$_POST['ser_id'],$cur_date);
	include('show_services.php');
}
?>