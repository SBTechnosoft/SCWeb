<?php
$url='';
 
if (isset($_GET['url']))
{
	switch(strtoupper($_GET['url']))
      {
				case 'PROD':
                    $url = FILENAME_PRODUCT;
                    break;
				case 'CAT':
                    $url = FILENAME_CATEGORY;
                    break;
				case 'COMP':
                    $url = FILENAME_COMPANY;
                    break;
				default:
				$url= FILENAME_PRODUCT;
				break;
				
		}
}
else
{
	$url=FILENAME_PRODUCT;
}

include_once($url);
 
  
?>