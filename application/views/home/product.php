<main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Produk</h2>
                    
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container">

                <div class="row no-gutters">
                    <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                        data-aos="fade-right"><img src="<?php echo base_url()?>assets/img/produk/POC.jpg"></div>
                    <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up"><?php echo $produk->nama_produk ?></h3>
                            <p data-aos="fade-up">
                                <?php echo $produk->keterangan ?>
                            </p>
                        </div><!-- End .content-->

                    </div>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pl-0 pr-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">Manfaat</h3>
                            <p data-aos="fade-up">
                                <?php echo $produk->manfaat ?>
                            </p>
                        </div><!-- End .content-->
                    </div>
                    <?php if(($produk->kegunaan)!=null){ ?>
                    <div class="product-nav col-md-6 pl-0 pr-lg-1 d-flex align-items-stretch">
                        <div class="content d-flex flex-column justify-content-center">
                            <h3 data-aos="fade-up">Kegunaan</h3>
                            <p data-aos="fade-up">
                                <?php echo $produk->kegunaan ?>
                            </p>
                        </div><!-- End .content-->
                    </div>
                <?php } ?>
                    <div class="row"></div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- <section class="fun-facts section-padding" data-scroll-index="1">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-5 d-flex align-items-center">
                  <div class="fun-facts-img">
                    <img src="<?php echo base_url() ?>assets/img/11.png" alt="fun facts">
                  </div>
                </div>
                <div class="col-lg-6 col-md-7">
                  <div class="section-title">
                    <h2><strong> Kandungan <strong><?php echo $produk->nama_produk ?></strong></strong></h2>
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
        </section> -->

    </main><!-- End #main -->