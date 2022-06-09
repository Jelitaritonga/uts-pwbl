<main id="page-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<form action="#" class="order-details-form" name="" method="post" novalidate>
						<div class="inner-form" >
								<?php
								$id=$_GET['id'];
								$tampil=$koneksi->query("SELECT * FROM tbcostumer WHERE kd_cs='".$id."'");
								?>
								<?php
			                    if($tampil->num_rows>0){
			                    	while($data = $tampil->fetch_object()){
								?>
						<h3>Profile</h3>
										<div>
											<input type="hidden" name="kd_cs" placeholder="ID" style="text-align: center;width: 30%" required="" readonly="" value="<?php echo $data->kd_cs?>">
										</div>
										<div >
											<input type="text" name="nama_cs" placeholder="Nama Lengkap" style="text-align: center;width: 30%" required="" readonly="" value="<?php echo $data->nama_cs?>">
										</div>
										<div >
											<input type="text" name="kelamin_cs" placeholder="Jenis Kelamin" style="text-align: center;width: 30%" required="" readonly="" value="<?php echo $data->kelamin_cs?>">
										</div>
										<div >
											<input type="text" name="alamat_cs" placeholder="Alamat" required="" style="text-align: center;width: 30%" readonly="" value="<?php echo $data->alamat_cs?>">
										</div>
										<div >
											<input type="text" name="tlp_cs" placeholder="No. Telepon" required="" style="text-align: center;width: 30%" readonly="" value="<?php echo $data->tlp_cs?>">
										</div>
										<div >
											<input type="text" name="username_cs" placeholder="Username" required="" style="text-align: center;width: 30%" readonly=" " value="<?php echo $data->username_cs?>">
										</div>
										<div >
											<input type="hidden" name="password_cs" placeholder="Password" required="" style="text-align: center;width: 30%" readonly="" value="<?php echo $data->password_cs?>">
										</div>
										<div >
											<input type="text" name="level" placeholder="Level" required="" style="text-align: center;width: 30%" readonly="" value="<?php echo $data->level_cs?>">
										</div>
										<br>
							<button type="submit" class="btn" name="daftar" value="Lanjut">Edit</button>
							<?php
								}
							}
							?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>