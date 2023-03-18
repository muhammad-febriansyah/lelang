<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="home">Home</a></li>
                <li>Data barang lelang</li>
            </ol>
            <h2>Data barang lelang</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Data barang </p>
            </header>
            <div class="row">

                <?php
                    $q = $this->db->query("select * from barang order by id desc");
                    foreach($q->result() as $row){
                ?>
                <div class="col-lg-4">

                    <div class="card">
                        <img src="image/<?php echo $row->foto ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <td>Nama Barang</td>
                                    <td><?php echo $row->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Kategori Barang</td>
                                    <td><?php echo $row->kategori ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Buka</td>
                                    <td><?php echo number_format($row->hargabuka,0,',','.') ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Tutup</td>
                                    <td><?php echo date("d F Y",strtotime($row->tgltutup)) ?></td>
                                </tr>
                                <tr>
                                    <td>Views</td>
                                    <td><?php echo $row->views ?> view</td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <a href="home/detailbarang/<?php echo $row->id ?>"
                                            class="btn btn-success w-100">Detail</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>


                <?php }  ?>

            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->


</main><!-- End #main -->
<br>
<br>