<?php
session_start()
?>
<header class="site-header">
  <div class="mobile-top-panel"></div>
  <div class="mobile-top-panel__fixed">
    <div class="container">
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="menu-navigation navbar-collapse collapse">

          <!-- Left nav -->
          <ul class="menu-navigation__list nav navbar-nav">
            <?php
						if (!isset($_SESSION['kd_cs'])) {
						?>
            <li class="current"><a href="index.php?hal=home">Beranda</a></li>
            <li><a href="index.php?hal=mobil">Mobil</a></li>
            <li><a href="index.php?hal=login">Login</a></li>
            <?php } else { ?>
            <li class="current"><a href="index.php?hal=home">Beranda</a></li>
            <li><a href="index.php?hal=mobil">Mobil</a></li>
            <li><a href="index.php?hal=riwayat&id=<?php echo $_SESSION['kd_cs'] ?>">Riwayat Pesanan</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php } ?>
          </ul>

        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="header-container_wrap container">
    <div class="header-container__flex">
      <div class="logo">
        <h2><span>Rental mobil</span> jelita</h2>
      </div>
      <div class="phone_block">
        <span><i class="icon-telephone"></i> 082274891806</span>
        <small>Kontak Pemesanan</small>
      </div>
    </div>
  </div>
  <div class="header-navigation-wrap stickUp">
    <!-- Navbar fixed top -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="menu-navigation navbar-collapse collapse">

          <!-- Left nav -->
          <ul class="menu-navigation__list nav navbar-nav">
            <?php
						if (!isset($_SESSION['kd_cs'])) {
						?>
            <li class="current"><a href="index.php?hal=home" data-hover="Home">Beranda</a></li>
            <li><a href="index.php?hal=mobil" data-hover="Mobil">Mobil</a></li>
            <li><a href="index.php?hal=kontak" data-hover="kontak">Kontak</a></li>
            <li><a href="index.php?hal=login" data-hover="Login">Login</a></li>
            <?php } else { ?>
            <li class="current"><a href="index.php?hal=home" data-hover="Home">Beranda</a></li>
            <li><a href="index.php?hal=mobil" data-hover="Mobil">Mobil</a></li>
            <li><a href="index.php?hal=kontak" data-hover="kontak">Kontak</a></li>
            <li><a href="index.php?hal=riwayat&id=<?php echo $_SESSION['kd_cs'] ?>" data-hover="Riwayat">Riwayat
                Pesanan</a></li>
            <li><a href="index.php?hal=profile&id=<?php echo $_SESSION['kd_cs'] ?>" data-hover="profile">Profile</a>
            </li>
            <li><a href="logout.php" data-hover="logout">Logout</a></li>
            <?php } ?>
          </ul>



        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container -->
    </div>
  </div>

</header>