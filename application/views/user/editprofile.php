<!-- /.navbar -->





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">
                    <h1><?= $title; ?></h1>

                    <?= $this->session->flashdata('message'); ?>
                    <?= form_open_multipart('user/edit'); ?>


                    <article class="content responsive-tables-page">

                        <section class="section">
                            <div class="row">
                                <div class="col-md-12">



                                    <form method="post" action="#">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control boxed" id="name" name="name" value="<?= $user['name']; ?>">
                                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control boxed" id="username" name="username" value="<?= $user['username']; ?>" readonly>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" class="form-control boxed" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label">Alamat Pemohon</label>
                                                    <input type="text" value="<?= $user['alamat_pemohon']; ?>" name="alamat_pemohon" class="form-control boxed" required>
                                                </div>


                                            </div>



                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Perusahaan</label>
                                                    <input type="text" value="<?= $user['nama_perusahaan']; ?>" name="nama_perusahaan" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Alamat Perusahaan</label>
                                                    <input type="text" value="<?= $user['alamat_perusahaan']; ?>" name="alamat_perusahaan" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama Pimpinan</label>
                                                    <input type="text" value="<?= $user['nama_direktur']; ?>" name="nama_direktur" class="form-control boxed" required>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Nomor Handphone</label>
                                                    <input type="text" value="<?= $user['no_hp']; ?>" name="no_hp" class="form-control boxed" required>
                                                </div>

                                            </div>



                                        </div>

                                        <br>
                                        <!-- <div class="title-block">
                                            <h3 class="title"> Nomor Kontak Tambahan </h3>
                                            <p>Untuk mendapatkan pemberitahuan melalui SMS</p>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label class="control-label">Nama 1</label>
                                                    <input type="text" value="" name="nama_karyawan_1" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nomor Handphone 1</label>
                                                    <input type="text" value="" name="nomor_hp_karyawan_1" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama 2</label>
                                                    <input type="text" value="" name="nama_karyawan_2" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nomor Handphone 2</label>
                                                    <input type="text" value="" name="nomor_hp_karyawan_2" class="form-control boxed">
                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label class="control-label">Nama 3</label>
                                                    <input type="text" value="" name="nama_karyawan_3" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nomor Handphone 3</label>
                                                    <input type="text" value="" name="nomor_hp_karyawan_3" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nama 4</label>
                                                    <input type="text" value="" name="nama_karyawan_4" class="form-control boxed">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Nomor Handphone 4</label>
                                                    <input type="text" value="" name="nomor_hp_karyawan_4" class="form-control boxed">
                                                </div> -->

                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </div>
                                </div>





                                </form>



                            </div>




                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->