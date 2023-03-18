<?php
          $q = $this->db->query("select barang.*,member.nama as member from barang inner join member on member.id = barang.idmember where barang.id='$id'");
          $row = $q->row();
 ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header text-light bg-dark">
                            Detail Barang Lelang
                        </div>
                        <div class="card-body table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <td>Nama barang</td>
                                        <td>
                                          <?php echo $row->nama ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Barang</td>
                                        <td>
                                        <?php echo $row->kategori ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga Buka</td>
                                        <td>
                                        <?php echo number_format($row->hargabuka,0,',','.') ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Tutup</td>
                                        <td>
                                        <?php echo date("d F Y",strtotime($row->tgltutup)) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Member</td>
                                        <td>
                                        <?php echo $row->member ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>
                                        <?php echo $row->ket ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Foto / Gambar</td>
                                        <td>
                                            <center>
                                                <img id="blah" class='img-fluid mb-3' width='280'
                                                    src="image/<?php echo $row->foto ?>" alt="your image" />
                                            </center>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>

                                            <a href="main/barang" class="btn btn-danger "><i
                                                    class="fa fa-sync-alt"></i>
                                                Kembali</a>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
