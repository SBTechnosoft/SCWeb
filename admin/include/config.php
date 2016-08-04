<?php
// HTTP server path
define('HTTP_SERVER', 'http://localhost/SwaminarayanCycleStore/SCWeb/admin/');
define('HTTP_SERVER_INCLUDES',HTTP_SERVER.'include/');
// document root
define('DIR_WS_DOCUMENT_ROOT', "E:\\xampp\\htdocs\\SwaminarayanCycleStore\\SCWeb\\admin\\");
// user section directory structure
define('DIR_INCLUDES',HTTP_SERVER.'include/');
define('DIR_CSS',HTTP_SERVER.'css/');
define('DIR_JS',HTTP_SERVER.'js/');
define('DIR_PLUG',HTTP_SERVER.'plugins/');
define('DIR_WS_INCLUDES', DIR_WS_DOCUMENT_ROOT.'include\\');
define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES .'functions\\');
define('DIR_WS_CLASSES', DIR_WS_INCLUDES.'classes\\');
define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES.'languages\\');
define('DIR_PRODUCT',HTTP_SERVER.'upload/product/');
define('DIR_GALLERY',HTTP_SERVER.'upload/gallery/');
define('DIR_EVENT',HTTP_SERVER.'upload/event/');
define('DIR_EVENTGALL',HTTP_SERVER.'upload/eventgallary/');
define('DIR_EVENTORG',HTTP_SERVER.'upload/organizerlogo/');
define('DIR_EVENTSPON',HTTP_SERVER.'upload/sponserlogo/');
define('DIR_EVENTBANER',HTTP_SERVER.'upload/eventbaner/');
define('DIR_ACHIVEMENT',HTTP_SERVER.'upload/achivement/');
define('DIR_TESTIMONIAL',HTTP_SERVER.'upload/testimonial/');
//Databse Access
define('TNS','localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD','');
define('DB_NAME','swaminarayancycle_db');

$cur_date=date('Y-m-d H:i:s');
?>