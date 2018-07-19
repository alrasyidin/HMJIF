<?php  
function escapeString(&$data){
	global $db;

	if(gettype($data) === "array"){
		foreach ($data as $key => $value) {
			$value = mysqli_escape_string($db, $value);
		}
	}else{
		$data = mysqli_escape_string($db, $data);
	}
}

function implode_sql($array, $pemisah = "`, `", $awal_akhir = "`"){
	return $awal_akhir . implode($pemisah, $array) . $awal_akhir;
}

function getPublishedPost($filter = ""){
	global $db;
	// die("SELECT judul, slug, views, image, isi, tgl_dibuat FROM post WHERE published=true $filter");
	return mysqli_query($db, "SELECT judul, slug, views, image, isi, tgl_dibuat FROM post WHERE published=true $filter");
}

function getData($result){
	global $db;
	$dataArray = array();

	while ($row = mysqli_fetch_assoc($result)) {
	    $dataArray[] = $row;
	}
	return $dataArray;
}

function getUserData($data = array(), $klausa = "", $table = "post"){
	global $db;
	escapeString($data);

	$fields = null;
	if(gettype($data) === "array"){
		$data = array_values($data);
		$fields = implode($data, "`, `");
	}
	// echo "SELECT `$fields` FROM `$table` $klausa";
	return mysqli_fetch_all( mysqli_query($db, "SELECT `$fields` FROM `$table` $klausa"), MYSQLI_ASSOC );
}

function loginAdmin($data){
	global $db;
	escapeString($data["username"]);

	$password_hash = mysqli_fetch_assoc(mysqli_query($db, "SELECT `password` FROM `user` WHERE username = '$data[username]' LIMIT 1") );
	
	if( password_verify($data["password"], $password_hash["password"]) ){
		return $data["username"];
	} else {
		return false;
	}
}

function insertData($data = array(), $table = "post"){
	global $db;

	escapeString($data);

	$fields = implode_sql(array_keys($data));
	$kolom = implode_sql(array_values($data), "', '", "'");
	
	$hasil = mysqli_query($db, "INSERT INTO `$table` ($fields) VALUES ($kolom)");
	return $hasil;
}

function deleteData($id){
	global $db;
	escapeString($id);
	return mysqli_query($db, "DELETE FROM post WHERE id = '$id'");
}

function updateData($data = array(), $klausa = "", $table = "post"){
	global $db;
	escapeString($data);

	if(isset($data["image"])){
		return mysqli_query($db, "UPDATE `$table` SET judul = '$data[judul]', slug = '$data[slug]', image = '$data[image]', published = '$data[published]', isi = '$data[isi]' WHERE id = $data[id]");
	} else {
		echo "yang disini";
		return mysqli_query($db, "UPDATE `$table` SET judul = '$data[judul]', slug = '$data[slug]', published = '$data[published]', isi = '$data[isi]' WHERE id = $data[id]");
	}
}
?>