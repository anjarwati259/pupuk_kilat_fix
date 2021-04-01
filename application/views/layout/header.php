<?php 
//ambil data menu dari konfigurasi
$nav_product  = $this->home_model->nav_product();
 ?>
<!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">ptagiofficial@gmail.com</a>
        <i class="icofont-phone"></i> +6281 335 005 334
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/kilatofficial" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/ptagi.official/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC55i-fOYx2epwRirCODrwEA" class="instagram"><i class="icofont-youtube"></i></a>
        <a href="#" class="linkedin"><i class="icofont-shopping-cart"></i></a>
      </div> 
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-light"><a href="index.html">Flattern</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="<?php echo base_url() ?>assets/img/logo/logo AGI.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?php echo base_url('home') ?>">Home</a></li>
          <li><a href="<?php echo base_url('home/about') ?>">About</a></li>
          <li class="drop-down"><a href="<?php echo base_url('home/produk_all') ?>">Produk</a>
            <ul>
              <?php foreach ($nav_product as $nav_product) { ?>
              <li><a href="<?php echo base_url('home/product/'.$nav_product->id) ?>"><?php echo $nav_product->nama_produk ?></a></li>
            <?php } ?>
            </ul>
          </li>
          <li><a href="services.html">Order</a></li>
          <li class="drop-down"><a href="">Pemasaran</a>
            <ul>
              <li><a href="#">Mitra</a></li>
              <li><a href="#">Distributor</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('home/testimoni') ?>">Testimoni</a></li>
          <li><a href="<?php echo base_url('home/publikasi') ?>">Publikasi</a></li>
          <li><a href="<?php echo base_url('home/kontak') ?>">Kontak</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->