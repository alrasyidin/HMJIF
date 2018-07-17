<?php  
$db = mysqli_connect("localhost", "root", "", "hmjif");

if(!$db){
	die("Connect Error (". mysqli_connect_errno() . ")" . mysqli_connect_error() );
}

// $password_hash = password_hash("admin", PASSWORD_DEFAULT);
// if( mysqli_query($db, "INSERT INTO user(username, password) VALUES ('admin','$password_hash')") ){
// 	echo "berhasil";
// }else{
// 	echo "gagal";
// }
?>