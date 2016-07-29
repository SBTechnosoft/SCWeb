<?php
// HTTP server path
define('HTTP_SERVER', 'http://localhost/SwaminarayanCycleStore/SCWeb/');
// document root
define('DIR_WS_DOCUMENT_ROOT', "E:\\xampp\\htdocs\\SwaminarayanCycleStore\\SCWeb\\");
// user section directory structure
define('DIR_INCLUDES',HTTP_SERVER.'include/');
define('DIR_CSS',HTTP_SERVER.'css/');
define('DIR_JS',HTTP_SERVER.'js/');
define('DIR_WS_INCLUDES', DIR_WS_DOCUMENT_ROOT.'include\\');
define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES .'functions\\');
define('DIR_WS_CLASSES', DIR_WS_INCLUDES.'classes\\');
define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES.'languages\\');
define('DIR_PRODUCT',HTTP_SERVER.'admin/upload/product/');
define('DIR_GALLERY',HTTP_SERVER.'admin/upload/gallery/');
//Databse Access
define('TNS','localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD','');
define('DB_NAME','swaminarayancycle_db');
?>