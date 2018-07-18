<?php  
include_once "../core/init.php";
redirect();


$id = isset($_GET["id"]) ? $_GET["id"] : "";

if(deleteData($id)){
	header("Location:blog.php?berhasil=".$id);
} else {
	echo "gagal";
	header("Location:blog.php?gagal=".$id);
}

?>
