<?php
$url='';
 if(isset($_SESSION['login-user-id']) && ($_SESSION['login-user-id']!=''))
 {
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
				case 'EVENT':
                    $url = FILENAME_EVENT;
                    break;
				case 'CONTACT':
                    $url = FILENAME_CONTACT;
                    break;
				case 'LGP':
                    $url = FILENAME_LOGINPOST;
                    break;
				case 'LGO':
                    $url = FILENAME_LOGOUT;
                    break;
				case 'ACHIVE':
                    $url = FILENAME_ACHIVE;
                    break;
				case 'TEST':
                    $url = FILENAME_TESTIMONIAL;
                    break;
				default:
				$url= FILENAME_ACHIVE;
				break;
				
			}
	}
	else
	{
		$url=FILENAME_ACHIVE;
	}
	include_once($url);
}

else
{
	header("Location:login.php");
}
  
?>