<?php 
session_start();
session_unset();
session_destroy();

$_SESSION["name"] = '';
header ('Location: index.php');
?>