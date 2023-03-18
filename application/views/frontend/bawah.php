
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sistem Informasi Lelang</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="frontend/vendor/purecounter/purecounter.js"></script>
  <script src="frontend/vendor/aos/aos.js"></script>
  <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/js/main.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>

<?php if($this->session->flashdata("msg") == "regis"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Pendaftaran berhasil,harap menunggu beberapa saat untuk admin mengkonfirmasi anda!",
    "success"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "ada"){ ?>
<script>
Swal.fire(
    "Informasi",
    "Nama ini sudah digunakan",
    "warning"
);
</script>
<?php }  ?>
<?php if($this->session->flashdata("msg") == "errormember"){ ?>
	<script>
		Swal.fire(
			"Informasi",
			"Username atau password anda salah dan akun anda belum dikonfirmasi oleh admin!",
			"error"
		);
	</script>
	<?php }  ?>
<?php if($this->session->flashdata("msg") == "tawar"){ ?>
	<script>
		Swal.fire(
			"Informasi",
			"Tawaran anda berhasil dikirim!",
			"success"
		);
	</script>
	<?php }  ?>