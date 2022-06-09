<?php
	define('NAMA_HOST', 'localhost');
	define('USER_DB', 'root');
	define('PASS_DB', '');
	define('NAMA_DB', 'db_rentalmobil');

	$koneksi = new mysqli(NAMA_HOST,USER_DB,PASS_DB,NAMA_DB);
	if (mysqli_connect_errno()){

die("Error : ->".$koneksi->connect_error);
exit();

}else{


}
?>
	
	
	
	