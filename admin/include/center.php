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
				case 'PRODALL':
                    $url = FILENAME_PRODUCTSHOW;
                    break;
				case 'BCAT':
                    $url = FILENAME_BLOGCAT;
                    break;
				case 'BTAG':
                    $url = FILENAME_BLOGTAG;
                    break;
				case 'BLOG':
                    $url = FILENAME_BLOG;
                    break;
				case 'GALLERY':
                    $url = FILENAME_GALLERY;
                    break;
				case 'SERV':
                    $url = FILENAME_SERVICES;
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