<?php
function get_file_extension($filename)
{
	return pathinfo($filename, PATHINFO_EXTENSION);
}
function uploadimage($generatedfilename,$filename,$filename_tmpname,$filename_type,$uploadpath,$uploadwidth,$uploadheight,$imageprefix)
{
				$fileextension=get_file_extension($filename);
				//$fileextension=strtolower($fileextension);
				$generatedfilename=$generatedfilename.".".$fileextension;
				
				if (($filename_type == "image/gif")
				|| ($filename_type == "image/png")
				|| ($filename_type == "image/jpeg")
				|| ($filename_type == "image/pjpeg")
				|| ($filename_type == "image/jpg"))				
				{
						$saveuploadedimage=$generatedfilename;														
						copy($filename_tmpname,$uploadpath.$saveuploadedimage);					
				}
				
				if($filename_type=='image/jpg' ||$filename_type=='image/jpeg')
				{
					$image = imagecreatefromjpeg($uploadpath.$saveuploadedimage);
				}
				else if($filename_type=='image/gif')
				{
					$image = imagecreatefromgif($uploadpath.$saveuploadedimage);
				}
				else if($filename_type=='image/png')
				{
					$image = imagecreatefrompng($uploadpath.$saveuploadedimage);
				}
				
				$width = imagesx($image);
				$height = imagesy($image);
		
				$twidth = $uploadwidth;
				$theight = $uploadheight;
				
				$im = imagecreatetruecolor($twidth,$theight);
				imagecopyresampled($im,$image,0,0,0,0,$twidth,$theight,imagesx($image),imagesy($image));
	
				if($filename_type=='image/jpg' ||$filename_type=='image/jpeg')
				{
					imagejpeg($im,$uploadpath.$imageprefix.$saveuploadedimage);
				}
				else if($filename_type=='image/gif')
				{
					imagegif($im,$uploadpath.$imageprefix.$saveuploadedimage);
				}
				else if($filename_type=='image/png')
				{
					imagepng($im,$uploadpath.$imageprefix.$saveuploadedimage);
				}	
				
				return $saveuploadedimage;
}
?>