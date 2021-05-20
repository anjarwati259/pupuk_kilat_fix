<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $title ?></h2>
        </div>

      </div>
</section><!-- End Breadcrumbs -->
<div id="portfolio" class="portfolio">
	<div class="container">
		<div class="row" data-aos="fade-up">
		  <div class="col-lg-12 d-flex justify-content-center">
		    <ul id="portfolio-flters">
		      <a href="<?php echo base_url('home/testimoni') ?>"><li class="filter-active"> All</li></a>
		      <li>Foto</li>
		      <li>Video</li>
		      <li>Buku Aplikasi</li>
		    </ul>
		  </div>
		</div>
	</div>
</div>

 <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">

      <div class="container-fluit">

        <div class="row">
        	<div class="col-lg-2">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Kategori</h3>
              <div class="sidebar-item categories">
                <ul>
                <?php foreach ($kategori as $kategori) { ?>
                  <li><a href="<?php echo base_url('home/kategori/'.$kategori->id_kategori) ?>"><?php echo $kategori->nama_kategori ?></a></li>
              <?php } ?>
                </ul>
              </div><!-- End sidebar categories-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

          <div class="col-lg-10">
          	<div class="frame">
          		<div class="row">
          	<?php foreach ($testi as $testi) { ?>
          		<div class="col-lg-6 portfolio-item">
	            <!-- <img src="<?php echo base_url() ?>assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""> -->
	              <iframe width="700" height="350" src="<?php echo $testi->link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	          </div>
	      <?php } ?>
          	</div>
          	</div>
          	
          </div><!-- End blog entries list -->

        </div>

      </div>
    </section><!-- End Blog Section -->