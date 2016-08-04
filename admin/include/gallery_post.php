<?php
include('./header.php');	


?>

<?php
 if(isset($_POST['remove']))
{

	$resultArray = removegallery($conn,$_POST['gallery_id']);
include('show_gallery.php');	
}
//header("Location: ".HTTP_SERVER."index.php?url=GALLERY");
?>

<?php
if(isset($_POST['isDisplay']))
{
	$resultgallerydisplay=UpdateGallery($conn,$_POST['value'],$_POST['catId']);
	include('show_gallery.php');
}

?>

<?php
if(isset($_POST['add']) )
{

if(isset($_FILES['upload_img']['name']))
		{
			for($i=0;$i<count($_FILES['upload_img']['name']);$i++)
				{	
					$img_name=$_FILES['upload_img']['name'][$i];
					$imgtemp_name=$_FILES['upload_img']['tmp_name'][$i];
					$img_type=$_FILES['upload_img']['type'][$i];
					if (!file_exists('../upload/gallery/'))
					{
						mkdir('../upload/gallery/', 0777, true);
						$location = '../upload/gallery/';
					}
				else
					{	
						$location = '../upload/gallery/';
					}		
					$img_name1=uploadimage($img_name,$img_name,$imgtemp_name,$img_type,$location,2000,2000,"");
					$resultArrayGallery=insertGalleryMstData($conn,$img_name1,$_REQUEST['is_display']);
					
				}
		}
	include('show_gallery.php');	
}
if(isset($_POST['edit']) )
{

if(isset($_FILES['upload_img']['name']))
		{
			for($i=0;$i<count($_FILES['upload_img']['name']);$i++)
				{	
					$img_name1=$_FILES['upload_img']['name'][$i];
					$imgtemp_name1=$_FILES['upload_img']['tmp_name'][$i];
					$img_type1=$_FILES['upload_img']['type'][$i];
					if (!file_exists('../upload/gallery/'))
					{
						mkdir('../upload/gallery/', 0777, true);
						$location1 = '../upload/gallery/';
					}
				else
					{	
						$location1 = '../upload/gallery/';
					}		
					$img_name11=uploadimage($img_name1,$img_name1,$imgtemp_name1,$img_type1,$location1,2000,2000,"");
					$resultArrayslider=updateGalleryMstData($conn,$img_name11,$_REQUEST['is_display'],$_REQUEST['gallery_id']);
					
				}
		}
		include('show_gallery.php');
}
?>

