<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="member">Home</a></li>
                <li>Data lelang <?php echo $this->session->userdata("nama") ?></li>
            </ol>
            <h2>Data lelang <?php echo $this->session->userdata("nama") ?></h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Data lelang </p>
            </header>
            <div class="card">
                <div class="card-header bg-primary text-light">
                </div>
                <div class="card-body table-responsive">
                    <table id="dt" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kandidat</th>
                                <th>Barang</th>
                                <th>Harga Buka</th>
                                <th>Harga Tawar</th>
                                <th>Tanggal Tutup</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $id = $this->session->userdata("id");
                                $q = $this->db->query("select peserta.*,barang.nama as barang,barang.hargabuka,barang.tgltutup from peserta inner join barang on barang.id = peserta.idbarang where barang.idmember='$id' ");
                                foreach($q->result() as $row){
                            ?>
                            <tr>
                                <td scope="row"><?php echo $no ?></td>
                                <td><?php echo $row->nama ?></td>
                                <td><?php echo $row->barang ?></td>
                                <td><?php echo number_format($row->hargabuka,0,',','.') ?></td>
                                <td><?php echo number_format($row->tarif,0,',','.') ?></td>
                                <td><?php echo date("d F Y",strtotime($row->tgltutup)) ?></td>
                                <td>
                                    <?php if($row->status == "Ditolak"){ ?>
                                    <span class="badge bg-danger">Ditolak</span>
                                    <?php }elseif($row->status == "Terpilih"){ ?>
                                    <span class="badge bg-primary">Terpilih</span>
                                    <?php }else{ ?>
                                        <span class="badge bg-warning">Menunggu Konfirmasi</span>
                                    <?php }  ?>
                                </td>
                                <td>
                                    <?php if($row->status == "Proses"){ ?>
                                        <a href="member/setpilih/<?php echo $row->id ?>/<?php echo $row->idbarang ?>" onclick="return confirm('Pilih kandidat <?php echo $row->nama ?> ?')" class="btn btn-primary">Pilih</a>
                                        <?php } ?>
                                </td>
                            </tr>
                            <?php $no++;}  ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->


</main><!-- End #main -->
<br>
<br>