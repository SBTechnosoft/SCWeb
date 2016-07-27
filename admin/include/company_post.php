<?php
include('./header.php');	

//Insert Record
if(isset($_POST['add']))
{
	$resultArray = insertCompanyData($conn,$_REQUEST['comp_name'],$cur_date);
	
}

?>