<?php

if(!isset($_GET["p"])){
    $_GET["p"] = "home";
}

include_once "../core/init.php";
include_once ROOT_PATH . "admin/template/header.php";

switch ($_GET["p"]) {
    case "home":
        include_once "home.php";
        break;
    // case "about":
    //  include_once "about.php";
    //  break;
    // case "struktur":
    //  include_once "struktur.php";
    //  break;
    case "blog":
        include_once "blog.php";
        break;
    // case "jadwal":
    //  include_once "jadwal.php";
    //  break;
    // case "info":
    //  include_once 'info.php';
    // default:
    //  include_once '404.php';
    //  break;
}

include_once ROOT_PATH . "admin/template/footer.php";
?>