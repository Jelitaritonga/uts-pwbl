<?php 
include('admin/koneksi.php');
session_start();
$act = $_GET['act'];
$username= $_POST['username'];
$password= md5 ($_POST['password']);
if(isset($_GET['act'])){
	if($act == 1){
		$result=$koneksi->query("SELECT * FROM tbcostumer WHERE username_cs = '$username' AND password_cs = '$password'");
		$data=$result->num_rows;
		if ($data == 1) {
			$row = $result->fetch_object();
			$_SESSION['kd_cs'] 				= $row->kd_cs;
		 	$_SESSION['nama_cs'] 			= $row->nama_cs;
		 	$_SESSION['kelamin_cs'] 		= $row->kelamin_cs;
		 	$_SESSION['alamat_cs'] 			= $row->alamat_cs;
		 	$_SESSION['tlp_cs']				= $row->tlp_cs;
		 	$_SESSION['username_cs']		= $row->username_cs;
		 	$_SESSION['password_cs']		= $row->password_cs;
		 	$_SESSION['level_cs']			= $row->level_cs;
			echo"<script>alert ('Selamat datang ".$username."');
	                   window.location='index.php?hal=home'</script>";
			
	}else{
		echo"<script>alert ('Anda Gagal Login');
	window.location='index.php?hal=login'</script>";
	}
}
}

?>
