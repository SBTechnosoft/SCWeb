<?php
// check support for register_globals & disable register_globals
if (function_exists('ini_get') && (ini_get('register_globals') == true) && (PHP_VERSION < 4.3) ) 
{
    ini_get('register_globals') == false;
}

// Include application configuration parameters
include_once('E:\\xampp\\htdocs\\SwaminarayanCycleStore\\SCWeb\\include\\config.php');
include_once(DIR_WS_INCLUDES.'configFileName.php');
include_once (DIR_WS_CLASSES.'mysqlDb.cls.php');
$conn=new mysqlDb();


?>