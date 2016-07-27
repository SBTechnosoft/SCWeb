<?php
// check support for register_globals & disable register_globals
if (function_exists('ini_get') && (ini_get('register_globals') == true) && (PHP_VERSION < 4.3) ) 
{
    ini_get('register_globals') == false;
}

// Include application configuration parameters
include_once('E:\\xampp\\htdocs\\SwaminarayanCycleStore\\SCWeb\\admin\\include\\config.php');
include_once(DIR_WS_INCLUDES.'configFileName.php');
include_once (DIR_WS_CLASSES.'mysqlDb.cls.php');
include_once (DIR_WS_FUNCTIONS.'dataFetch.fn.php');
include_once (DIR_WS_FUNCTIONS.'dataInsertion.fn.php');
include_once (DIR_WS_FUNCTIONS.'dataEdit.fn.php');
include_once (DIR_WS_FUNCTIONS.'dataRemove.fn.php');

$conn=new mysqlDb();


?>