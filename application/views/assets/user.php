<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            Data User
                        </div>
                        <div class="card-body table-responsive">
                            <a href="main/adduser" class="btn btn-primary mb-3"> Tambah</a>
                            <a href="main/user" class="btn btn-info mb-3"> Refresh</a>
                           
                            <table id="dt" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $no = 1;
                                $q = $this->db->query("select * from admin ");
                                foreach($q->result() as $row){
                            ?>
                                    <tr>
                                        <td scope="row"><?php echo $no ?></td>
                                        <td><?php echo $row->nama ?></td>
                                        <td><?php echo $row->username ?></td>
                                        <td>
                                            <a href="main/hapususer/<?php echo $row->id ?>"
                                                class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus</a>
                                           
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