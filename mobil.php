

<body class="page__fleet">
	<main id="page-content">
		<div style="text-align: center;">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="breadcrumbs__title">Mobil</div>
						<div class="breadcrumbs__items">
							<div class="breadcrumbs__wrap">
								<div class="breadcrumbs__item">
									<a href="#" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="#" class="breadcrumbs__item-link">Mobil</a>
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
					$tampil=$koneksi->query("SELECT * FROM tbmobil INNER JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk ORDER BY no_polisi");
					?>
					<?php
                    if($tampil->num_rows>0){
                    	while($data = $tampil->fetch_object()){
					?>
						<div class="gallery gallery-isotope" id="gallery">
							<div class="gallery__item category2 category5">
								<figure class="gallery__item__image" >
									<a class="hover" href="index.php?hal=sewa&id=<?php echo $data->no_polisi?>">
										<img src="admin/img/gambar/<?php echo $data->foto_mobil?>" alt=""/>
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
	
</body>