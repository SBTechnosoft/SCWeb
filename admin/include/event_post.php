<?php
include('./header.php');	
//Insert Record
  
if(isset($_POST['add']) )
{
	
	$a = array();	
	$fileName=$_FILES['logo_dtl']['name'];
	$fileType=$_FILES['logo_dtl']['type'];
	$fileError=$_FILES['logo_dtl']['error'];
	$fileContent=$_FILES['logo_dtl']['tmp_name'];

	$path = "../upload/event";
	$new_img=date('ymdhis').".".pathinfo($_FILES['logo_dtl']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent,$path."/".$new_img);
  
   echo json_encode($a);
   
   $b = array();	
	$fileName1=$_FILES['baner_dtl']['name'];
	$fileType1=$_FILES['baner_dtl']['type'];
	$fileError1=$_FILES['baner_dtl']['error'];
	$fileContent1=$_FILES['baner_dtl']['tmp_name'];

	$path1 = "../upload/eventbaner";
	$new_img1=date('ymdhis').".".pathinfo($_FILES['baner_dtl']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent1,$path1."/".$new_img1);
  
   echo json_encode($b);
		 
	 $resultArray = insertEventData($conn,$_REQUEST['event_name'],$_REQUEST['start_date'],$_REQUEST['end_date'],$new_img,$new_img1,$_REQUEST['event_desc'],$_REQUEST['event_place'],$_REQUEST['is_display'],$cur_date);
	 $event_id=mysql_insert_id();
	 
	 if(isset($_FILES['gallery_dtl']['name']))
		{
			for($i=0;$i<count($_FILES['gallery_dtl']['name']);$i++)
				{	
					$event_img_name=$_FILES['gallery_dtl']['name'][$i];
					$event_imgtemp_name=$_FILES['gallery_dtl']['tmp_name'][$i];
					$event_img_type=$_FILES['gallery_dtl']['type'][$i];
					if (!file_exists('..upload/eventgallary'))
					{
						mkdir('../upload/eventgallary', 0777, true);
						$location = '../upload/eventgallary/';
					}
				else
					{	
						$location = '../upload/eventgallary/';
					}		
					$event_img_name1=uploadimage($event_img_name,$event_img_name,$event_imgtemp_name,$event_img_type,$location,2000,2000,"");
					$resultArrayGallery=insertGalleryData($conn,$event_id,$event_img_name1);
				}
		}
 
	$c = array();	
	$fileName2=$_FILES['org_logo']['name'];
	$fileType2=$_FILES['org_logo']['type'];
	$fileError2=$_FILES['org_logo']['error'];
	$fileContent2=$_FILES['org_logo']['tmp_name'];

	$path2 = "../upload/organizerlogo";
	$new_img2=date('ymdhis').".".pathinfo($_FILES['org_logo']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent2,$path2."/".$new_img2);
	 
	echo json_encode($c);
	 	 
	 $resultArrayorg=insertOrganizerData($conn,$event_id,$_REQUEST['org_name'],$new_img2,$_REQUEST['org_no'],$_REQUEST['org_website']);
	 //Sponsers
	if(isset($_POST['spon_name']))
	{
		for($i=0;$i<count($_POST['spon_name']);$i++)
		{
			$spon_name=$_POST['spon_name'][$i];
			$spon_website=$_POST['spon_website'][$i];
			$spon_no=$_POST['spon_no'][$i];
			$sponserlogo_name="";
			if(isset($_FILES['spon_logo']['name'][$i]))
			 {
				for($i=0;$i<count($_FILES['spon_logo']['name']);$i++)
				{	
					
				$sponserlogo_name=$_FILES['spon_logo']['name'][$i];
				$sponserlogo_tmp_name=$_FILES['spon_logo']['tmp_name'][$i];
				$sponserlogo_type=$_FILES['spon_logo']['type'][$i];
				if (!file_exists('../upload/sponserlogo'))
				{
					mkdir('../upload/sponserlogo', 0777, true);
					$location = '../upload/sponserlogo';
					
				}
				else
				{	
					$location = '../upload/sponserlogo';
				}	
				$sponserlogo_name=uploadimage($sponserlogo_name,$sponserlogo_name,$sponserlogo_tmp_name,$sponserlogo_type,$location,2000,2000,"");
			 }
			 }
			$resultArraysponser=insertsponserData($conn,$event_id,$spon_name,$sponserlogo_name,$spon_no,$spon_website);
			
		}
	}
	
	include('show_event.php'); 
			
}

//Change Display Status
if(isset($_POST['isDisplay']))
{
	$resulteventdisplay=UpdateventDisplay($conn,$_POST['value'],$_POST['catId'],$cur_date);
	include('show_event.php');
}
//edit event data
 if(isset($_POST['edit']))
 {
	 if(isset($_FILES['logo_dtl']) && count($_FILES['logo_dtl']['error']) == 1 && $_FILES['logo_dtl']['error'][0] > 0)
	 {
		
	 }
	 else if(isset($_FILES['logo_dtl']))
	 {

		$h = array();	
		$fileName4=$_FILES['logo_dtl']['name'];
		$fileType4=$_FILES['logo_dtl']['type'];
		$fileError4=$_FILES['logo_dtl']['error'];
		$fileContent4=$_FILES['logo_dtl']['tmp_name'];

		$path4 = "../upload/event";
		$new_img4=date('ymdhis').".".pathinfo($_FILES['logo_dtl']['name'], PATHINFO_EXTENSION);
		move_uploaded_file($fileContent4,$path4."/".$new_img4);
  
		echo json_encode($h);
		$resultArray22 = UpdateEventData12($conn,$new_img4,$cur_date,$_REQUEST['editid']);
	 }
	 if(isset($_FILES['baner_dtl']) && count($_FILES['baner_dtl']['error']) == 1 && $_FILES['baner_dtl']['error'][0] > 0)
	 {
		
	 }
	 else if(isset($_FILES['baner_dtl']))
	 {
	$i = array();	
	$fileName5=$_FILES['baner_dtl']['name'];
	$fileType5=$_FILES['baner_dtl']['type'];
	$fileError5=$_FILES['baner_dtl']['error'];
	$fileContent5=$_FILES['baner_dtl']['tmp_name'];

	$path5 = "../upload/eventbaner";
	$new_img5=date('ymdhis').".".pathinfo($_FILES['baner_dtl']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent5,$path5."/".$new_img5);
  
	echo json_encode($i);
	$resultArray23 = UpdateEventData13($conn,$new_img5,$cur_date,$_REQUEST['editid']);
	 }
	 if(isset($_FILES['org_logo']) && count($_FILES['org_logo']['error']) == 1 && $_FILES['org_logo']['error'][0] > 0)
	 {
		
	 }
	 else if(isset($_FILES['org_logo']))
	 {
   $j = array();	
	$fileName6=$_FILES['org_logo']['name'];
	$fileType6=$_FILES['org_logo']['type'];
	$fileError6=$_FILES['org_logo']['error'];
	$fileContent6=$_FILES['org_logo']['tmp_name'];

	$path6 = "../upload/organizerlogo";
	$new_img6=date('ymdhis').".".pathinfo($_FILES['org_logo']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent6,$path6."/".$new_img6);
  
   echo json_encode($j);
   $resultArray24 = UpdateOrgData14($conn,$new_img6,$_REQUEST['editid']);
	 }
	 
	 if(isset($_FILES['spon_logo']) && count($_FILES['spon_logo']['error']) == 1 && $_FILES['spon_logo']['error'][0] > 0)
	 {
		
	 }
	 else if(isset($_FILES['spon_logo']))
	 {
   $k = array();	
	$fileName7=$_FILES['spon_logo']['name'];
	$fileType7=$_FILES['spon_logo']['type'];
	$fileError7=$_FILES['spon_logo']['error'];
	$fileContent7=$_FILES['spon_logo']['tmp_name'];

	$path7 = "../upload/sponserlogo";
	$new_img7=date('ymdhis').".".pathinfo($_FILES['spon_logo']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($fileContent7,$path7."/".$new_img7);
  
   echo json_encode($k);
    $resultArray25 = UpdateOrgData15($conn,$new_img7,$_REQUEST['editid']);
	 }
    // $l = array();	
	// $fileName8=$_FILES['gallery_dtl']['name'];
	// $fileType8=$_FILES['gallery_dtl']['type'];
	// $fileError8=$_FILES['gallery_dtl']['error'];
	// $fileContent8=$_FILES['gallery_dtl']['tmp_name'];

	// $path8 = "../upload/eventgallary";
	// $new_img8=date('ymdhis').".".pathinfo($_FILES['gallery_dtl']['name'], PATHINFO_EXTENSION);
	// move_uploaded_file($fileContent8,$path8."/".$new_img8);
  
   //echo json_encode($l);
    if(isset($_FILES['gallery_dtl']) && count($_FILES['gallery_dtl']['error']) == 0 && $_FILES['gallery_dtl']['error'][0] > 0)
	 {
		
	 }
	 else if(isset($_FILES['gallery_dtl']))
	 {
		if(isset($_FILES['gallery_dtl']['name']))
		{
			for($i=0;$i<count($_FILES['gallery_dtl']['name']);$i++)
				{	
					$event_img=$_FILES['gallery_dtl']['name'][$i];
					$event_imgtemp=$_FILES['gallery_dtl']['tmp_name'][$i];
					$event_img_type1=$_FILES['gallery_dtl']['type'][$i];
					if (!file_exists('..upload/eventgallary'))
					{
						mkdir('../upload/eventgallary', 0777, true);
						$location123 = '../upload/eventgallary/';
					}
				else
					{	
						$location123 = '../upload/eventgallary/';
					}		
					$event_img=uploadimage($event_img,$event_img,$event_imgtemp,$event_img_type1,$location123,2000,2000,"");
					$resultArrayGallery1=UpdateGalleryData1($conn,$event_img,$_REQUEST['editid']);
				}
		}
	 }
				
   $resultArray2 = UpdateEventData($conn,$_REQUEST['event_name'],$_REQUEST['start_date'],$_REQUEST['end_date'],$_REQUEST['event_desc'],$_REQUEST['event_place'],$_REQUEST['is_display'],$cur_date,$_REQUEST['editid']);
				
   $resultArray3 = UpdateOrgData($conn,$_REQUEST['org_name'],$_REQUEST['org_no'],$_REQUEST['org_website'],$_REQUEST['editid']);
    $resultArray4= UpdateSponData($conn,$_REQUEST['spon_name'],$_REQUEST['spon_no'],$_REQUEST['spon_website'],$_REQUEST['editid']);
   include('show_event.php');
}

if(isset($_POST['remove']))
{
	$resultremove = removeEventData($conn,$_POST['E_Id'],$cur_date);
	 include('show_event.php');
}
//header("Location: ".HTTP_SERVER."index.php?url=EVENT");
?>