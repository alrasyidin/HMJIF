<?php

if(!isset($_GET["p"])){
	$_GET["p"] = "home";
}
include_once "../core/init.php";
include_once ROOT_PATH . "/template/header.php";
// echo ROOT_PATH . '/assets/css/style.css';

switch ($_GET["p"]) {
	case "home":
		include "home.php";
		break;
	// case "about":
	// 	include "about.php";
	// 	break;
	// case "struktur":
	// 	include "struktur.php";
	// 	break;
	// case "blog":
	// 	include "blog.php";
	// 	break;
	// case "blog":
	// 	include "blog.php";
	// 	break;
	// case "jadwal":
	// 	include "jadwal.php";
	// 	break;
	// case "info":
	// 	include 'info.php';
	// default:
	// 	include '404.php';
	// 	break;
}

include_once ROOT_PATH . "/template/footer.php";
?>