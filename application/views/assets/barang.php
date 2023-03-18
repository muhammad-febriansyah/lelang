<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <a href="main/addbarang" class="btn btn-primary mb-3">Tambah barang lelang</a>
                    <div class="row">
                        <?php
                    $q = $this->db->query("select barang.*,member.nama as member from barang inner join member on member.id = barang.idmember");
                    if($q->num_rows() > 0){
                    foreach($q->result() as $row){
                ?>
                        <div class="col-lg-4">

                            <div class="card">
                                <img src="image/<?php echo $row->foto ?>" class="card-img-top" alt="...">
                                <div class="card-body table-responsive">
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
                                            <td><?php echo $row->views ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Member</td>
                                            <td><?php echo $row->member ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">
                                                <a href="main/hapusbarang/<?php echo $row->id ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus barang <?php echo $row->nama ?>?')">Hapus</a>
                                                <a href="main/editbarang/<?php echo $row->id ?>" class="btn btn-success" >Edit</a>
                                                <a href="main/detailbarang/<?php echo $row->id ?>" class="btn btn-warning" >Detail</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <?php }  ?>
                        <?php }else{ ?>
                        <div class="alert alert-danger col-lg-12" role="alert">
                            <strong>Belum ada datang lelang!</strong>
                        </div>
                        <?php }  ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>