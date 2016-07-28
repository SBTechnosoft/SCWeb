<?php
include('./header.php');	

//Insert Record
if(isset($_POST['add']))
{
	$resultArray = insertCompanyData($conn,$_REQUEST['comp_name'],$cur_date);
	include('show_Company.php');
}
//edit record
if(isset($_POST['edit']))
 {
   $resultArraycat = UpdateCompanyData($conn,$_REQUEST['comp_name'],$cur_date,$_REQUEST['editcompid']);
   include('show_Company.php');
}
//remove record
if(isset($_POST['remove']))
{
	$resultArray = removeCompanyData($conn,$_POST['comp_id'],$cur_date);
	include('show_Company.php');
}
?>