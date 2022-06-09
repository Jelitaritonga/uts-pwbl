<figure class="thumbnail move_img wow slideInLeft" data-wow-delay="0.5s"></figure>
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-6 col-lg-push-6">
		<?php 
		   if(!isset($_SESSION['kd_cs'])){
		?>
			<h1>Selamat Datang</h1>
			<p>Hiring a car just got easier with the reliable service of Car Rental Service! Having covered all the 50 states in America, we offer the finest choice of vehicles ranging from economy to luxury.</p>
			<p>We have tied up with renowned car rental brands so that we can provide our customers with the most economic car rental deals along with world class customer service. </p>
		<?php }else{ ?>
		<h1>Selamat Datang</h1>
			<p><?php echo $_SESSION['nama_cs'] ?></p>
		<?php } ?>
		</div>
	</div>
</div>
