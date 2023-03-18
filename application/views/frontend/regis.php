<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="home">Home</a></li>
                <li>Registrasi Member</li>
            </ol>
            <h2>Registrasi Member</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <form method="post" action="home/registrasi">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td><input type="number" name="telp" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane    "></i>
                                Registrasi</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>

</main><!-- End #main -->