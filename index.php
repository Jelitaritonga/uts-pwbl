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
  <link href="assets/css/plugins/nivo-slider.css" rel="stylesheet">
  <link href="assets/css/plugins/swiper.min.css" rel="stylesheet">
  <link href="assets/css/plugins/intlTelInput.min.css" rel="stylesheet">
  <link href="assets/css/plugins/remodal.min.css" rel="stylesheet">
  <link href="assets/css/plugins/animate.css" rel="stylesheet">
  <link href="assets/css/main-style.css" rel="stylesheet">
  <link href="iconfont/style.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="#" rel="stylesheet">
</head>
<div class="plash">
  <div id="scene">
    <span></span>
    <div id="road">
      <div id="stripes"></div>
    </div>
  </div>
  <div class="loading">Loading<span>...</span></div>
</div>

<body class="page__home">
  <?php
	require_once('header.php');
	?>

  <!-- // Header -->
  <!-- Content  -->
  <main id="page-content">
    <div class="parallax_box">
      <?php
			require_once('hal.php');
			?>
    </div>
  </main>
  <!-- // Content  -->
  <!-- Footer -->
  <footer class="site-footer">
    <section class="box-elements">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-12 col-lg-3">
            <figure class="footer_logo"><a href="#"><span><em></em><strong></strong></span><i class="icon-111"></i></a>
            </figure>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <h5>Perusahaan</h5>
            <ul class="footer-list">
              <li><a href="#">Beranda</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Mobil</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <h5>Customer Services</h5>
            <ul class="footer-list">
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Help renting a car</a></li>
              <li><a href="#">Terms and Conditions</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="contact-info">
              <span class="phone_number"><i class="icon-telephone"></i> 082274891806 </span>

              <span class="location_info">
                <i class="icon-placeholder-for-map"></i>
                <em>Alamat </em>
                <em>Rental Mobil</em>
                <em>tapanuli selatan</em> </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="site-footer__bottom-panel">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="copyright">&copy; 2022 | <a href="#">Created By</a> | <a href="#"> jelita ritonga </a></div>
          </div>
          <div class="col-xs-12 col-md-6">
            <div class="social-list">
              <ul class="social-list__icons">
                <li><a href="#"><i class="icon-facebook-logo"></i></a></li>
                <li><a href="#"><i class="icon-twitter-letter-logo"></i></a></li>
                <li><a href="#"><i class="icon-google-plus"></i></a></li>
                <li><a href="#"><i class="icon-linkedin-logo"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <a href="#" class="scrollup"><i class="icon-arrow-down-sign-to-navigate"></i></a>

  </footer>
  <!-- //Footer -->
  <!-- Google map -->
  <script src="assets/js/jquery.1.12.4.min.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/wow.min.js"></script>
  <script src="assets/js/plugins/jquery.smartmenus.min.js"></script>
  <script src="assets/js/plugins/jquery.smartmenus.bootstrap.js"></script>
  <script src="assets/js/plugins/jquery.nivo.slider.js"></script>
  <script src="assets/js/plugins/swiper.min.js"></script>
  <script src="assets/js/plugins/intlTelInput.min.js"></script>
  <script src="assets/js/plugins/remodal.js"></script>
  <script src="assets/js/plugins/stickup.min.js"></script>
  <script src="assets/js/plugins/tool.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>