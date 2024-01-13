<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">



        <?php foreach ($rekomtek as $rtk) { ?>

            <form action="<?php echo base_url() . 'user/updaterekomtek'; ?>" method="post">




                <div class="form-group">
                    <label>Nama Pemohon</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $rtk->id ?>">
                    <input type="text" name="nama_pemohon" class="form-control" value="<?php echo $rtk->nama_pemohon ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat Pemohon</label>
                    <input type="text" name="alamat_pemohon" class="form-control" value="<?php echo $rtk->alamat_pemohon ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $rtk->no_hp ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $rtk->email ?>" readonly>
                </div>
                <div>
                    <label>Jenis Izin</label>
                    <select class="custom-select" class="form-control" name="jenis_izin" id="jenis_izin">
                        <option value="<?php echo $rtk->jenis_izin ?>" selected><?php echo $rtk->jenis_izin ?></option>

                    </select>
                </div>
                <div>
                    <label>Balai</label>
                    <select class="custom-select" class="form-control" name="balai" id="balai" readonly>

                        <option value="<?php echo $rtk->balai ?>" selected><?php echo $rtk->balai ?></option>

                    </select>
                </div>
                <div class="form-group">
                    <label>Sumber Air</label>
                    <input type="text" name="sumber_air" class="form-control" value="<?php echo $rtk->sumber_air ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" name="longitude" class="form-control" value="<?php echo $rtk->longitude ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Latitude</label>
                    <input type="text" name="latitude" class="form-control" value="<?php echo $rtk->latitude ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Kelurahan/Desa</label>
                    <input type="text" name="kelurahan_desa" class="form-control" value="<?php echo $rtk->kelurahan_desa ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" value="<?php echo $rtk->kecamatan ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Kabupaten/Kota</label>
                    <input type="text" name="kabupaten_kota" class="form-control" value="<?php echo $rtk->kabupaten_kota ?>" readonly>
                </div>


                <div>
                    <label>Provinsi</label>
                    <select class="custom-select" class="form-control" name="provinsi" id="provinsi" readonly>
                        <option value="<?php echo $rtk->provinsi ?>" selected><?php echo $rtk->provinsi ?></option>

                    </select>
                </div>
                <div>
                    <label>Balai</label>
                    <select class="custom-select" class="form-control" name="balai2" id="balai2" readonly>

                        <option value="<?php echo $rtk->balai2 ?>" selected><?php echo $rtk->balai2 ?></option>

                    </select>
                </div>
                <div>
                    <label>Wilayah Sungai</label>
                    <select class="custom-select" class="form-control" name="wilayah_sungai" id="wilayah_sungai" readonly>

                        <option value="<?php echo $rtk->wilayah_sungai ?>" selected><?php echo $rtk->wilayah_sungai ?></option>
                    </select>
                </div>
                <!-- <div>
                    <label>Das</label>
                    <select class="custom-select" class="form-control" name="das" id="das" value="<?php echo $rtk->das ?>" readonly>
                        <option selected>KOSONG</option>
                        <option value="1">das_belum_tersedia</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" value="<?php echo $rtk->tujuan ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Cara Pengambilan</label>
                    <input type="text" name="cara_pengambilan" class="form-control" value="<?php echo $rtk->cara_pengambilan ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Cara Pembuangan</label>
                    <input type="text" name="cara_pembuangan" class="form-control" value="<?php echo $rtk->cara_pembuangan ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Volume Pengambilan (liter/detik)</label>
                    <input type="text" name="volume_pengambilan_literdetik" class="form-control" value="<?php echo $rtk->volume_pengambilan_literdetik ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Jam/Hari Pengambilan</label>
                    <input type="text" name="jamhari_pengambilan" class="form-control" value="<?php echo $rtk->jamhari_pengambilan ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Hari/Bulan Pengambilan</label>
                    <input type="text" name="haribulan_pengambilan" class="form-control" value="<?php echo $rtk->haribulan_pengambilan ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Volume Pengambilan (m3/bulan)</label>
                    <input type="text" name="volume_pengambilan_perbulan" class="form-control" value="<?php echo $rtk->volume_pengambilan_perbulan ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Jangka Waktu</label>
                    <input type="text" name="jangka_waktu" class="form-control" value="<?php echo $rtk->jangka_waktu ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="berkas1">Berkas 1</label>
                    <input type="text" name="berkas1_text" class="form-control" value="<?php echo $rtk->berkas1 ?>" readonly>
                    <input type="file" name="berkas1" class="form-control">
                </div>

                <div class="form-group">
                    <label for="berkas2">Berkas 2</label>
                    <input type="text" name="berkas2_text" class="form-control" value="<?php echo $rtk->berkas2 ?>" readonly>
                    <input type="file" name="berkas2" class="form-control">
                </div>

                <div class="form-group">
                    <label for="berkas3">Berkas 3</label>
                    <input type="text" name="berkas3_text" class="form-control" value="<?php echo $rtk->berkas3 ?>" readonly>
                    <input type="file" name="berkas3" class="form-control">
                </div>

                <div class="form-group">
                    <label for="berkas4">Berkas 4</label>
                    <input type="text" name="berkas4_text" class="form-control" value="<?php echo $rtk->berkas4 ?>" readonly>
                    <input type="file" name="berkas4" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary" disabled>Simpan</button>
                <button type="reset" class="btn btn-danger" disabled>reset</button>






            </form>


        <?php } ?>



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->