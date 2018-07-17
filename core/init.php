<?php  
session_start();

include_once "../function/config.php";
include_once "../function/database.php";
include_once "../function/function.php";

define("ROOT_PATH",  dirname(dirname(__FILE__)) .'/' );
define("BASE_URL", "localhost:8080/PHP/HMJIF_WEBSITE");

$error = array();
?>