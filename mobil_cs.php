<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="html 5 template">
	<meta name="author" content="tonytemplates.com">
	<link rel="icon" href="favicon.ico">
	<title>Rental Mobil</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/plugins/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<link href="assets/css/plugins/swiper.min.css" rel="stylesheet">
	<link href="assets/css/plugins/intlTelInput.min.css" rel="stylesheet" >
	<link href="assets/css/plugins/remodal.min.css" rel="stylesheet" >
	<link href="assets/css/main-style.css" rel="stylesheet">
	<link href="iconfont/style.css" rel="stylesheet">
</head>
<body class="page__fleet">
<div class="plash">
	<div id="scene">
		<span></span>
		<div id="road">
			<div id="stripes"></div>
		</div>
	</div>
	<div class="loading">Loading<span>...</span></div>
</div>
	<main id="page-content">
		<div style="text-align: center;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Mobil</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="#" class="breadcrumbs__item-link">Beranda</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Mobil</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="isotop-box">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					<?php
					$tampil=$koneksi->query("SELECT * FROM tbmobil INNER JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk ORDER BY tarif_mobil DESC");
				    $jumlah_data=$tampil->num_rows;
				    if($jumlah_data>0){
				      while($data=$tampil->fetch_object()){
					?>
						<div class="gallery gallery-isotope" id="gallery">
							<div class="gallery__item category2 category5">
								<figure class="gallery__item__image" >
									<a class="hover" href="index.php?page=sewa&no_polisi='.$no_polisi.'" name="idmobil">
										<img src="../admin/img/gambar/<?php echo $data->foto_mobil?>" alt=""/>
										<i class="icon-arrow-down-sign-to-navigate2"></i>
									</a>
								</figure>
								<div class="gallery__item__content">
									<h6><?php echo $data->merk_mobil?> <?php echo $data->jenis_mobil?></h6>
									<span class="cost" ><span style="text-align: center;"><?php echo $data->tarif_mobil?> /day</span></span>
									<span class="btn btn-mini" ><?php echo $data->status?></span>
								</div>
							</div>
						</div>
					<?php 
					}
					}
					?>
					</div>
				</div> <!-- //row -->
			</div> <!-- //Container -->
		</section>
	</main>
	<script src="assets/js/jquery.1.12.4.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.min.js"></script>
	<script src="assets/js/plugins/jquery.smartmenus.bootstrap.js"></script>
	<script src="assets/js/plugins/swiper.min.js"></script>
	<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
	<script src="assets/js/plugins/stickup.min.js"></script>
	<script src="assets/js/plugins/intlTelInput.min.js"></script>
	<script src="assets/js/plugins/remodal.js"></script>
	<script src="assets/js/plugins/tool.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>
<?php
	if(isset($_POST['idmobil'])){
		$no_polisi		=$_POST['no_polisi'];
		$kd_merk		=$_POST['kd_merk'];
		$foto_mobil		=$_POST['foto_mobil'];
		$tarif_mobil	=$_POST['tarif_mobil'];
		$querymasuk="INSERT INTO tbmobil(no_polisi,kd_merk, foto_mobil, tarif_mobil) value ('$no_polisi','$kd_merk','$foto_mobil', '$tarif_mobil')";
		$masuk=$koneksi->query($querymasuk);
		if($masuk){
			echo "<script>window.location='index.php?page=sewa&no_polisi=".$no_polisi."'</script>";
		}
	}
?>