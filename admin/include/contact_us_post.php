<?php
include('./header.php');
if(isset($_POST['add']))
{
	$resultArray=insertContactData($conn,$_REQUEST['con_dtl'],$_REQUEST['con_address'],$_REQUEST['con_phone'],$_REQUEST['con_email']);
}
?>