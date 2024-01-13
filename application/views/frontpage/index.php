<!DOCTYPE html>
<html lang="en">

<body>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <!-- <a class="hero-brand" href="<?= base_url('frontpage') ?>" title="Home"><img alt="Bell Logo" src="<?= base_url('assetsfront/'); ?>img/logorekomtek.png"></a> -->
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h1>
                            E Rekomtek BBWS Pemali-Juana
                        </h1>
                        <p class="tagline">
                            Website untuk melayani permohonan rekomendasi teknis melalui media elektronik.
                        </p>
                        <?= form_open('tracking', 'id="tracking"') ?>

                        <!-- <?= $this->session->flashdata('#'); ?> -->
                        <div class="row justify-content-center">
                            <h5>Tracking untuk mengetahui status progres permohonan Anda.</h5>

                            <div class="form-group">
                                <input class="form-control form-control-lg form-control-borderless" type="search" name="trackid" placeholder="Masukkan Nomor Pengajuan Anda (Contoh: RTK-01012023-001)">
                            </div>
                            <div class="mt-2">
                                <input class="btn btn-primary" type="submit" value="Tracking">
                            </div>

                            <?= form_close() ?>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Hero -->



    <main id="main">
        <section class="ihwal" id="ihwal">
            <div class="container text-center">
                <h2>
                    Selamat Datang di E-Rekomtek
                </h2>
                <p>
                    Selamat datang dihalaman aplikasi permohonan rekomendasi teknis melalui media elektronik (online). Aplikasi dibuat untuk memudahkan Anda untuk mengirimkan dan memantau permohonan Anda.
                    Jika Anda baru, Anda bisa memulai dengan mempelajari Panduan yang sudah disiapkan. Kami juga menyiapkan nomor telepon dan email yang bisa dilihat pada bagian Hubungi Kami. Atau jika Anda adalah pengguna yang sudah melakukan pendaftaran sebelumnya, silahkan langsung menuju bagian Login.
                </p>
            </div>
        </section>






        <section class="panduan" id="panduan">
            <div class="container">
                <h2 class="text-center">
                    Panduan
                </h2>

                <div class="row">
                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-book-half"></i>
                                </div>
                            </div>

                            <div>
                                <h3>
                                    <a href="<?= base_url('frontpage/panduanrekomtek') ?>" class="panduan-link" style="color:inherit;">Panduan E-Rekomtek</a>
                                </h3>

                                <p>
                                    Cara menggunakan E-Rekomtek BBWS Pemali Juana
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-gear-fill"></i>
                                </div>
                            </div>

                            <div>
                                <h3>
                                    <a href="<?= base_url('frontpage/peraturan') ?>" class="panduan-link" style="color:inherit;">Peraturan</a>
                                </h3>
                                </h3>

                                <p>
                                    Peraturan perundang-undangan yang terkait dengan permohonan rekomendasi teknis.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-info-circle-fill"></i>
                                </div>
                            </div>

                            <div>
                                <h3>
                                    <a href="<?= base_url('frontpage/alamatbalai') ?>" class="panduan-link" style="color:inherit;">Alamat BBWS Pemali-Juana</a>
                                </h3>

                                <p>
                                    Alamat BBWS Pemali Juana.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="feature-col col-lg-4 col-xs-12">
                        <div class="card card-block text-center">
                            <div>
                                <div class="feature-icon">
                                    <i class="bi bi-clipboard-data"></i>
                                </div>
                            </div>

                            <div>
                                <h3>
                                    <a href="<?= base_url('frontpage/tahapan') ?>" class="panduan-link" style="color:inherit;">Tahapan Aju Rekomtek</a>
                                </h3>

                                <p>
                                    Tahapan dan alur proses pembuatan rekomendasi teknis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>




        <section class="login" id="login">
            <section class="cta">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">

                            <div class="text-center">
                                <h2>Login</h2>
                            </div>

                            <p>Silahkan login dan Buat Permohonan jika sudah melakukan pendaftaran.</p>
                            <br>
                            <?= $this->session->flashdata('message'); ?>


                            <form class="user" method="post" action="<?= base_url('auth'); ?>">


                                <div class="row">
                                    <?= form_error('usernamee', ' <small class="text-danger">', '</small>'); ?>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                        </div>
                                    </div>


                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <?= form_error('password', ' <small class="text-danger">', '</small>'); ?>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-light btn-block">Masuk</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </section>




            <!-- ======= Portfolio Section ======= -->
            <section class="pendaftaran" id="pendaftaran">
                <div class="container text-center">

                    <body class="hold-transition register-page">
                        <div class="register-box">
                            <div class="card card-outline card-primary">
                                <a class="brand-link">
                                    <div class="brand ml-5">

                                    </div>
                            </div>
                            </a>
                            <!-- <?php if ($this->session->flashdata('errors')) : ?>
                                <div class="alert alert-danger">
                                    <?= $this->session->flashdata('errors'); ?>
                                </div>
                            <?php endif; ?> -->

                            <div class="card-body">
                                <p class="login-box-msg">Daftar untuk akun baru</p>



                                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                    <?= form_error('name', ' <small class="text-danger">', '</small>'); ?>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                        <div class=" input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Kata Sandi">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <?= form_error('password2', ' <small class="text-danger">', '</small>'); ?>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <?= form_error('nohp', ' <small class="text-danger">', '</small>'); ?>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP" value="<?= set_value('nohp'); ?>">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">


                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
                </div>


                </div>
            </section>
        </section>
    </main>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>