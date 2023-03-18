<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            Data Member
                        </div>
                        <div class="card-body table-responsive">
                            <a href="main/member" class="btn btn-info mb-3"> Refresh</a>
                            <table id="dt" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No.HP</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $no = 1;
                                $q = $this->db->query("select * from member ");
                                foreach($q->result() as $row){
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $no ?></td>
                                        <td><?php echo $row->nama ?></td>
                                        <td><?php echo $row->telp ?></td>
                                        <td><?php echo $row->alamat ?></td>
                                        <td>
                                            <?php if($row->status == "Ditolak"){ ?>
                                                <span class="badge badge-danger">Ditolak</span>
                                                <?php }elseif($row->status == "Dikonfirmasi"){ ?>
                                                    <span class="badge badge-primary">Sudah Dikonfirmasi</span>
                                                <?php }else{ ?>
                                                    <span class="badge badge-warning">Menunggu Konfirmasi</span>
                                                    <?php }  ?>
                                        </td>
                                        <td>
                                            <a href="main/hapusmember/<?php echo $row->id ?>"
                                                class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                                                <?php if($row->status == "Ditolak"){ ?>
                                                    <a href="main/confirm/<?php echo $row->id ?>"
                                                class="btn btn-success" onclick="return confirm('Konfirmasi <?php echo $row->nama ?>?')">Konfirmasi</a>
                                                <?php }elseif($row->status == "Dikonfirmasi"){ ?>
                                                    <a href="main/tolak/<?php echo $row->id ?>"
                                                class="btn btn-warning" onclick="return confirm('Tolak <?php echo $row->nama ?>?')">Tolak</a>
                                                <?php }else{ ?>
                                                    <a href="main/tolak/<?php echo $row->id ?>"
                                                class="btn btn-warning" onclick="return confirm('Tolak <?php echo $row->nama ?>?')">Tolak</a>
                                                <a href="main/confirm/<?php echo $row->id ?>"
                                                class="btn btn-success" onclick="return confirm('Konfirmasi <?php echo $row->nama ?>?')">Konfirmasi</a>
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