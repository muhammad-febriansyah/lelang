<?php
      $q = $this->db->query("select * from barang where idmember='$id'");
              $row = $q->row();
?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="member/index">Home</a></li>
                <li>Edit Data Barang Lelang</li>
            </ol>
            <h2>Edit Data Barang Lelang</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="card">
                <div class="card-header text-light bg-primary">
                    Edit Barang Lelang
                </div>
                <div class="card-body table-responsive">
                    <form action="member/savebarangedit/<?php echo $id; ?>" id="save" method="post"
                        enctype="multipart/form-data">
                        <table class="table">
                            <tr>
                                <td>Nama barang</td>
                                <td>
                                    <input type="text" placeholder="Nama barang" value="<?php echo $row->nama ?>"
                                        class="form-control " autocomplete="off" name="nama">
                                </td>
                            </tr>
                            <tr>
                                <td>Kategori Barang</td>
                                <td>
                                    <select class="form-control" name="kategori">
                                        <option value="<?php echo $row->kategori ?>"><?php echo $row->kategori ?></option>
                                        <?php
$q = $this->db->get("kategori");
foreach($q->result() as $as){
?>
                                        <option value="<?php echo $as->kat ?>"><?php echo $as->kat ?></option>
                                        <?php }  ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Buka</td>
                                <td>
                                    <input type="number" value="<?php echo $row->hargabuka ?>" placeholder="Harga Buka"
                                        class="form-control " autocomplete="off" name="harga">
                                </td>
                            </tr>

                            <tr>
                                <td>Tanggal Tutup</td>
                                <td>
                                    <input type="date" value="<?php echo $row->tgltutup ?>" placeholder="Nama Pengarang"
                                        class="form-control " autocomplete="off" name="tgltutup">
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>
                                    <textarea rows="5" cols="5" class="form-control"
                                        name="ket"> <?php echo $row->ket ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Foto / Gambar</td>
                                <td>
                                    <center>
                                        <img id="blah" class='img-fluid mb-3' width='280' src="image/<?php echo $row->foto ?>"
                                            alt="your image" />
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

                                    <a href="member/barang" class="btn btn-danger "><i class="fa fa-sync-alt"></i>
                                        Kembali</a>
                                    <button type="submit" class="btn btn-primary "><i class="fa fa-paper-plane"></i>
                                        Simpan</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
<br>
<br>
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