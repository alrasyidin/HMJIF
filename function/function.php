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
	$arrayKata = explode($pemisah, $kata, $berapa);
	// echo "<br>";
	// echo implode($arrayKata, $pemisah);
	return implode($arrayKata, $pemisah);
}

function kasihNamaImage($image){
	$array = explode(".", $image);
	$array[0] = $array[0] ."_". time();
	return implode($array, ".");	
}

function uploadImage($image, &$error){
	$namaImage = kasihNamaImage($image["gambar"]["name"]);
	// var_dump($namaImage);
	// die();
	$targetImage = '../upload/' . basename($namaImage);
	$type = $image["gambar"]["type"];
	if( !file_exists($targetImage) ){
		if($image["gambar"]["error"] == 0){
			if($type === "image/jpeg" OR $type === "image/png" OR $type === "image/jpg") {
				if ($image["gambar"]["size"] < 5000000) {
					if(move_uploaded_file($image["gambar"]["tmp_name"], $targetImage) ){
						return true;
					} else {
						return false;
					}
				} else {
					$error[] = "Ukuran gambar harus kurang dari 5mb";
				}
			} else {
				$error[] = "Tipe gambar yang diijinkan hanya jpg dan png";
			} 
		} else {
			$error[] = "Terjadi error saat mengupload";
		}
	} else {
		$error[] = "Sorry, gambar sudah ada";
	}
}
?>