<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            Data Lelang
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $no = 1;
                                $q = $this->db->query("select peserta.*,barang.nama as barang,barang.hargabuka,barang.tgltutup from peserta inner join barang on barang.id = peserta.idbarang ");
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
                                    
                                    </tr>
                                    <?php $no++;}  ?>
                                </tbody>
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