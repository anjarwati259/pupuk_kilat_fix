<section class="feature section-padding" data-scroll-index="0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title">
          <h2>Variasi <span>Produk</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="owl-carousel features-carousel">
        <?php foreach ($produk as $produk) { ?>
          <div class="feature-item">
            <div class="icon"><img src="<?php echo base_url() ?>assets/img/produk/POC.jpg" alt=""></div>
            <a href="<?php echo base_url('home/product/' . $produk->id) ?>">
              <h3><?php echo $produk->nama_produk ?></h3>
            </a>
            <p><?php echo $produk->highlight ?></p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- Distribusi mitra section -->
<section class="fun-facts section-padding" data-scroll-index="1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-5 d-flex align-items-center">
        <div class="fun-facts-img">
          <img src="assets/img/11.png" alt="fun facts">
        </div>
      </div>
      <div class="col-lg-6 col-md-7">
        <div class="section-title">
          <h2><strong> Program <span>Kemitraan</span></strong></h2>
        </div>
        <div class="fun-facts-text">
          <p>PT Agrikultur Gemilang Indonesia menjalin kerjasama dengan pihak perorangan, badan usaha swasta atau pemerintahan untuk menjadi rekan mitra kerja dalam distribusi produk, dan saat ini kami telah memiliki rekan Mitra dan Distributor dibeberapa wilayah.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="fun-facts-item style-3">
              <h3>200</h3>
              <span>Mitra</span>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="fun-facts-item style-4">
              <h3>200</h3>
              <span>Distributor</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
</section>
<!-- service end -->
<!-- distribusi mitra end -->