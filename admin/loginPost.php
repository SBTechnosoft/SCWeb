<?php
include_once('/include/header.php');
session_start();
$admin=$_POST['admin_name'];
$pass=$_POST['admin_pass'];

$resultArray=getLoginData($conn,$admin,$pass);
print_r($resultArray);
$count=count($resultArray);
if($count!="")
{
	
	$userid=$resultArray[0]["admin_id"];
	$_SESSION['login-user-id']=$userid;	
	$ip_address=$_SERVER['REMOTE_ADDR'];
	header('location:'.HTTP_SERVER.'index.php?url=PROD');
	
}
else
{
	header('location:'.HTTP_SERVER.'login.php?error');
}
?>