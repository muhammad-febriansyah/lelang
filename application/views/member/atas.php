<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url() ?>" target="">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Informasi Lelang</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/ic.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="frontend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="frontend/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <script src="assets/datatables/datatables.min.js"></script>
    <script src="assets/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <style>
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 5px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: grey;
        border-radius: 5px;
    }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="member/index" class="logo d-flex align-items-center">
                <img src="assets/ic.png" alt="">
                <span>E-Lelang</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto <?php if($this->uri->segment(2) == "index") echo "active" ?>"
                            href="member/index">Home</a></li>
                    <li><a class="nav-link scrollto <?php if($this->uri->segment(2) == "barang") echo "active" ?>"
                            href="member/barang">Barang</a></li>
                    <li><a class="nav-link scrollto <?php if($this->uri->segment(2) == "lelang") echo "active" ?>"
                            href="member/lelang">Lelang</a></li>
                    <li><a class="nav-link scrollto " href="home/logout"
                            onclick="return confirm('Yakin ingin logout?')">Logout</a></li>
                    <li><a class="getstarted scrollto"><?php echo $this->session->userdata("nama") ?></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->