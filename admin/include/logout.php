<?php	
include('./header.php');	
session_start();
unset($_SESSION['login-user-id']);
//session_destroy();
header('location:'.HTTP_SERVER.'login.php');
exit();
?>