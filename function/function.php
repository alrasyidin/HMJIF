<?php  
function logged_in(){
	if( isset($_SESSION["admin"]) ){
		header("Location:index.php");
		exit;
	}
}

function redirect(){
	if( !isset($_SESSION["admin"]) ){
		header("Location:login.php");
		exit;
	}	
}

function ambilKata($kata, $berapa, $pemisah = " "){
	$arrayKata = explode(" ", $kata, $berapa);
	// print_r($arrayKata);
	// echo "<br>";
	// echo implode($arrayKata, $pemisah);
	return implode($arrayKata, $pemisah);
}
?>