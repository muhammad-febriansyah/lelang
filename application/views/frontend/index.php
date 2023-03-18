<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Selamat Datang Di Sistem Informasi Lelang</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Cari barang yang anda inginkan dan berikan harga tertinggi
                </h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="home/regis"
                            class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Daftar Sekarang</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/ic.png" width="400" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Barang Terbaru</p>
            </header>

            <div class="row">
                <?php
                    $q = $this->db->query("select * from barang order by id desc limit 3");
                    foreach($q->result() as $row){
                ?>
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="image/<?php echo $row->foto ?>" class="img-fluid" alt=""></div>
                        <span class="post-date">Tanggal Tutup : <?php echo date("d F Y",strtotime($row->tgltutup)) ?></span>
                        <h3 class="post-title"><?php echo $row->nama ?>
                        </h3>
                        <a href="home/detailbarang/<?php echo $row->id ?>" class="readmore stretched-link mt-auto"><span>Lihat Selengkapnya</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <?php }  ?>
            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->

</main><!-- End #main -->