<?php
      $q = $this->db->query("select barang.*,member.nama as member from barang inner join member on member.id = barang.idmember where barang.id='$id'");
  $row = $q->row();

?>
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="home/index">Home</a></li>
                <li>Detail Barang</li>
            </ol>
            <h2>Detail Barang</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="image/<?php echo $row->foto ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a><?php echo $row->nama ?></a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                    <a><?php echo $row->member ?></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time
                                            datetime="2020-01-01"><?php echo date("d F Y",strtotime($row->date)) ?></time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-eye"></i>
                                    <a><?php echo $row->views ?> Views</a>
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                            <table class="table table-hover table-bordered">

                                <tr>
                                    <td>Kategori Barang</td>
                                    <td><?php echo $row->kategori ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Buka</td>
                                    <td><?php echo number_format($row->hargabuka,0,',','.') ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Member</td>
                                    <td><?php echo $row->member ?></td>
                                </tr>
                            </table>
                            <?php echo $row->ket ?>
                            </p>


                        </div>


                    </article><!-- End blog entry -->

                    <div class="blog-author d-flex align-items-center">
                        <h3>Peserta Lelang</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nilai Tawaran</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                    $ad = $this->db->query("SELECT * from peserta where idbarang='$id'");
                                    foreach($ad->result() as $aw){
                                ?>
                                <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $aw->nama ?></td>
                                    <td><?php echo number_format($aw->tarif,0,',','.') ?></td>
                                    <td><?php echo $aw->status ?></td>
                                </tr>
                                <?php $no++; }  ?>
                            </tbody>
                        </table>
                    </div><!-- End blog author bio -->


                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">
                        <table class="table table-hover table-bordered">

                            <tr>
                                <td>Kategori Barang</td>
                                <td><?php echo $row->kategori ?></td>
                            </tr>
                            <tr>
                                <td>Harga Buka</td>
                                <td><?php echo number_format($row->hargabuka,0,',','.') ?></td>
                            </tr>
                        </table>
                        <form action="home/addpeserta/<?php echo $id; ?>" method="post">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama peserta</td>
                                    <td>
                                        <input type="text" placeholder="Nama peserta" class="form-control "
                                            autocomplete="off" name="nama">
                                    </td>
                                </tr>
                                <tr>
                                    <td>No.Hp</td>
                                    <td>
                                        <input type="text" placeholder="Nomor hp aktif.." class="form-control "
                                            autocomplete="off" name="telp">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nilai Tawaran</td>
                                    <td>
                                        <input type="number" placeholder="nilai tawaran.." class="form-control "
                                            autocomplete="off" name="nilai">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary "><i class="fa fa-paper-plane"></i>
                                            Tawar</button>
                                    </td>
                                </tr>
                            </table>
                        </form>



                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->