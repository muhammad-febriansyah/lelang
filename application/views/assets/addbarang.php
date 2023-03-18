<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card">
                        <div class="card-header text-light bg-dark">
                            Form Barang Lelang
                        </div>
                        <div class="card-body table-responsive">
                            <form action="main/savebarang" id="save" method="post" enctype="multipart/form-data">
                                <table class="table">
                                    <tr>
                                        <td>Nama barang</td>
                                        <td>
                                            <input type="text" placeholder="Nama barang" class="form-control "
                                                autocomplete="off" name="nama">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Barang</td>
                                        <td>
                                            <select class="form-control" name="kategori">
                                                <option value="">Pilih</option>
                                                <?php
$q = $this->db->get("kategori");
foreach($q->result() as $row){
?>
                                                <option value="<?php echo $row->kat ?>"><?php echo $row->kat ?></option>
                                                <?php }  ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga Buka</td>
                                        <td>
                                            <input type="number" placeholder="Harga Buka" class="form-control "
                                                autocomplete="off" name="harga">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal Tutup</td>
                                        <td>
                                            <input type="date" placeholder="Nama Pengarang" class="form-control "
                                                autocomplete="off" name="tgltutup">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Member</td>
                                        <td>
                                            <select class="form-control" name="member">
                                                <option value="">Pilih</option>
                                                <?php
$q = $this->db->get("member");
foreach($q->result() as $row){
?>
                                                <option value="<?php echo $row->id ?>"><?php echo $row->nama ?></option>
                                                <?php }  ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>
                                            <textarea rows="5" cols="5" class="form-control" name="ket"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Foto / Gambar</td>
                                        <td>
                                            <center>
                                                <img id="blah" class='img-fluid mb-3' width='280'
                                                    src="assets/nofoto.jpg" alt="your image" />
                                            </center>
                                            <input type="file" name="gambar" class="form-control mb-3 "
                                                onchange="readURL(this);" aria-describedby="inputGroupFileAddon01">
                                            <span class="badge badge-warning mb-3"><strong>Informasi</strong> Input
                                                Gambar
                                                Maksimal 3mb !</span>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td>

                                            <a href="main/barang" class="btn btn-danger "><i class="fa fa-sync-alt"></i>
                                                Kembali</a>
                                            <button type="submit" class="btn btn-primary "><i
                                                    class="fa fa-paper-plane"></i>
                                                Simpan</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
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
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>