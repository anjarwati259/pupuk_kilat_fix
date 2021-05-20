<main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>BLOG</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <?php foreach ($berita as $berita) {?>
                        <article class="entry" data-aos="fade-up">

                            <div class="entry-img">
                                <img src="<?php echo base_url('assets/img/gambar/'.$berita->gambar) ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html"><?php echo $berita->judul ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                            href=""><?php echo $berita->posting ?></a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                            href="blog-single.html"><time datetime="2020-01-01">April 5, 2021</time></a>
                                    </li>
                                    
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?php echo $berita->highlight ?>
                                </p>
                                <div class="read-more">
                                    <a href="<?php echo base_url('home/detail_berita/'.$berita->id_berita) ?>">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                    <?php } ?>

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar" data-aos="fade-left">

                            <h3 class="sidebar-title">Disarankan Untuk Anda</h3>
                            <div class="sidebar-item recent-posts">
                                <?php foreach ($saran as $saran) { ?>
                                <div class="post-item clearfix">
                                    <img src="<?php echo base_url('assets/img/gambar/'.$saran->gambar) ?>" alt="">
                                    <h4><a href="<?php echo base_url('home/detail_berita/'.$saran->id_berita) ?>"><?php echo $saran->judul ?></a></h4>
                                    <time datetime="2020-01-01"><?php echo $saran->tanggal_publish ?></time>
                                </div>
                            <?php } ?>

                            </div><!-- End sidebar recent posts-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->