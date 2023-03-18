<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/datatables/datatables.min.js"></script>
<script src="assets/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function() {
    if ($window.scrollTop() >= 200) {
        nav.addClass('active');
    } else {
        nav.removeClass('active');
    }
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function() {
    $('.search').select2();
});
</script>
</body>

</html>
<script>
$(function() {
    $(document).ready(function() {
        //datatables
        table = $('#dt').DataTable({

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
            "aLengthMenu": [
                [5, 10, 30, 50, 100],
                [5, 10, 30, 50, 100]
            ],
            "language": {
                zeroRecords: "Maaf data tidak ditemukan",
                info: "_START_ s/d _END_ dari _TOTAL_ data",
                infoEmpty: "0 sampai 0 dari 0 data",
                infoFiltered: "(disaring dari _MAX_ total data)",
                searchPlaceholder: 'Cari...',
                search: '',
                lengthMenu: '_MENU_ Item/Halaman',
            },

        });

    });
});
</script>

<?php if($this->session->flashdata("msg") == "hapus"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Data berhasil dihapus!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "success"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Data berhasil disimpan!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "edit"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Data berhasil diubah!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "profil"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Profil berhasil diperbarui!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "gagal"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Ada kesalahan sistem!",
    "error"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "pesan"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Pesan berhasil terkirim!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "terima"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Member berhasil diterima!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "tolak"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Member berhasil ditolak!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "cek"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Siswa berhasil diproses!",
    "success"
);
</script>
<?php }  ?>