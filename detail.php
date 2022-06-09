				<?php
					$id=$_GET['id'];
					$result=$koneksi->query("SELECT * FROM tbsewa INNER JOIN tbmobil ON tbsewa.no_polisi=tbmobil.no_polisi INNER JOIN tbmerk ON tbmobil.kd_merk=tbmerk.kd_merk WHERE kd_sewa='".$id."'");
                    $row = $result->fetch_object();
				?>
								<?php
  $kodeMax  =$koneksi->query("SELECT MAX(kd_detail) AS no FROM tbdetailsewa");
  $kode     = $kodeMax->fetch_object();
  $lastkode = $kode->no;
  $nextkode = substr($lastkode, 1, 4) +1;
  $id_detail	='D'.sprintf('%02s', $nextkode);
?>
<body class="page__details">
	<main id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<form action="#" class="order-details-form" name="" method="post" novalidate>
						<div class="inner-form">
						<h3>FORM DETAILS</h3>
							<div class="inner-form__elements">
								<div class="inner-half">
										<div >
											<input type="hidden" name="kd_cs"  readonly="" value="<?php echo $_SESSION['kd_cs'] ?>" style="text-align: center;">
										</div>
										<div>
											<input type="hidden" name="kd_detail"  readonly="" value="<?=$id_detail?>" style="text-align: center;">
										</div>
										<div>
											<input type="hidden" name="kd_sewa" readonly="" value="<?php echo $row->kd_sewa?>" style="text-align: center;">
										</div>
									<h5>Data Mobil</h5>
										<div >
											<input type="text"  placeholder="No Polisi" name="no_polisi" readonly="" value="<?php echo $row->no_polisi?>" style="text-align: center;">
										</div>
										<div >
											<input type="text" name="" placeholder="Nama Mobil" readonly="" value="<?php echo $row->merk_mobil?> <?php echo $row->jenis_mobil?>" style="text-align: center;">
										</div>
										<div >
											<input type="text" name="" placeholder="Tarif Mobil" readonly="" value="<?php echo $row->tarif_mobil?>" style="text-align: center;">
										</div>
								</div>
								<div class="inner-half">
									<h5>Pesanan Baru</h5>									
									<div class="inner-half__width">
										<div >
											<input type="text" name="" placeholder="Tanggal Sewa" readonly="" value="<?php echo $row->tgl_sewa?>">
											<i class="icon-calendar-with-a-clock-time-tools"></i>
										</div>
										<div >
											<input type="text" name="" placeholder="Tanggal Kembali" readonly="" value="<?php echo $row->tgl_kembali?>">
											<i class="icon-calendar-with-a-clock-time-tools"></i>
										</div>
									</div>
									<div >
											<input type="text" name="" placeholder="Total Sewa" style="text-align: center;" readonly="" value="<?php echo $row->total_sewa?>" id="txt1" onfocus="sum()">
									</div>
									<h5>Data Sopir</h5>
									<div class="select-vehicle">
										<select  name="kd_sopir" id="kd_sopir" onchange="changeValue(this.value)" style="text-align: center;">
											<option value="Tidak">Pilih</option>
											<?php
											 	$tampil=$koneksi->query("SELECT * FROM tbsopir");
											 	$jsArray = "var dtMhs = new Array();\n";
                                  				while ($row = $tampil->fetch_object()) { 
											        echo '<option value="' . $row->kd_sopir . '">' . $row->kd_sopir . '</option>';   
											    $jsArray .= "dtMhs['" . $row->kd_sopir. "'] = {nama_sopir:'" . addslashes($row->nama_sopir) . "',tarif_sopir:'".addslashes($row->tarif_sopir)."'};\n";   
											    }     
											?>    
										</select>
											
									</div>	
									<div>
											<input type="text" name="nama_sopir" id="nama_sopir" placeholder="Tarif Sopir" style="text-align: center;"  >
									</div>
									<div>
											<input type="text" name="tarif_sopir" autofocus  placeholder="Tarif Sopir" style="text-align: center;"  id="txt2" onkeyup="sum()">
									</div>
									<div>
											<input type="text" name="total_harga" placeholder="Total Harga" style="text-align: center;"  id="txt3" readonly="">
									</div>
								</div>
							</div>
							<button type="submit" class="btn" name="simpan">SIMPAN</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
											<script type="text/javascript">   
										    <?php echo $jsArray; ?> 
										    function changeValue(kd_sopir){ 
										    document.getElementById('nama_sopir').value = dtMhs[kd_sopir].nama_sopir; 
										    document.getElementById('txt2' 	).value = dtMhs[kd_sopir].tarif_sopir; 
										    }; 

										      function sum() {
											      var txtFirstNumberValue = document.getElementById('txt1').value;
											      var txtSecondNumberValue = document.getElementById('txt2').value;
											      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
											      if (!isNaN(result)) {
											         document.getElementById('txt3').value = result;
											      }
											}
										    </script>
</body>
<?php
if (isset($_POST['simpan'])) {
  
  $kd_detail=$_POST['kd_detail'];
  $kd_cs=$_POST['kd_cs'];
  $kd_sewa=$_POST['kd_sewa'];
  $kd_sopir=$_POST['kd_sopir'];
  $total_harga=$_POST['total_harga'];
  $no_polisi=$_POST['no_polisi'];
  $querymasuk="INSERT INTO tbdetailsewa(kd_detail, kd_cs, kd_sewa, kd_sopir, total_harga, ket) VALUE ('$kd_detail', '$kd_cs', '$kd_sewa','$kd_sopir','$total_harga','Belum di Konfirmasi')";
  $masuk=$koneksi->query($querymasuk);
  $queryupdate="UPDATE tbmobil SET status='Tidak Tersedia' WHERE no_polisi= '".$no_polisi."'";
              $update=$koneksi->query($queryupdate); 
  if($masuk&$update){
    echo "<script>alert('Mobil Berhasil di Sewa !');window.location='index.php?hal=home'</script>";
  }
    }
?>
