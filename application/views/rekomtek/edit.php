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

            <form action="<?php echo base_url() . 'rekomtek/update'; ?>" method="post">


                <div class="form-group">
                    <label>Nama Pemohon</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $rtk->id ?>">
                    <input type="text" name="nama_pemohon" class="form-control" value="<?php echo $rtk->nama_pemohon ?>">
                </div>
                <div class="form-group">
                    <label>Alamat Pemohon</label>
                    <input type="text" name="alamat_pemohon" class="form-control" value="<?php echo $rtk->alamat_pemohon ?>">
                </div>
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $rtk->no_hp ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $rtk->email ?>">
                </div>
                <div>
                    <label>Jenis Izin</label>
                    <select class="custom-select" class="form-control" name="jenis_izin" id="jenis_izin" value="<?php echo $rtk->jenis_izin ?>" readonly>
                        <option selected>Pilih Jenis Izin</option>
                        <option value="pengusahaan">Pengusahaan</option>
                        <option value="penggunaan">Penggunaan</option>
                        <option value="perpanjang pengusahaan">Perpanjang Pengusahaan</option>
                        <option value="perpanjang penggunaan">Perpanjang Penggunaan</option>
                    </select>
                </div>
                <div>
                    <label>Balai</label>
                    <select class="custom-select" class="form-control" name="balai" id="balai" value="<?php echo $rtk->balai ?>" readonly>
                        <option selected>Pilih Balai</option>
                        <option value="BBWS Pemali Juana">BBWS Pemali Juana</option>

                    </select>
                </div>
                <div class="form-group">
                    <label>Sumber Air</label>
                    <input type="text" name="sumber_air" class="form-control" value="<?php echo $rtk->sumber_air ?>">
                </div>
                <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" name="longitude" class="form-control" value="<?php echo $rtk->longitude ?>">
                </div>
                <div class="form-group">
                    <label>Latitude</label>
                    <input type="text" name="latitude" class="form-control" value="<?php echo $rtk->latitude ?>">
                </div>
                <div class="form-group">
                    <label>Kelurahan/Desa</label>
                    <input type="text" name="kelurahan_desa" class="form-control" value="<?php echo $rtk->kelurahan_desa ?>">
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" value="<?php echo $rtk->kecamatan ?>">
                </div>
                <div class="form-group">
                    <label>Kabupaten/Kota</label>
                    <input type="text" name="kabupaten_kota" class="form-control" value="<?php echo $rtk->kabupaten_kota ?>">
                </div>


                <div>
                    <label>Provinsi</label>
                    <select class="custom-select" class="form-control" name="provinsi" id="provinsi" value="<?php echo $rtk->provinsi ?>" readonly>
                        <option selected>Provinsi</option>
                        <option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Bengkulu">Bengkulu</option>
                        <option value="Jambi">Jambi</option>
                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                        <option value="Lampung">Lampung</option>
                        <option value="Banten">Banten</option>
                        <option value="DKI Jakarta">DKI Jakarta</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="DI Yogyakarta">DI Yogyakarta</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                        <option value="Kalimatan Selatan">Kalimatan Selatan</option>
                        <option value="Kalimatan Utara">Kalimatan Utara</option>
                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                        <option value="Gorontalo">Gorontalo</option>
                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                        <option value="Maluku Utara">Maluku Utara</option>
                        <option value="Maluku">Maluku</option>
                        <option value="Papua Barat">Papua Barat</option>
                        <option value="Papua">Papua</option>
                    </select>
                </div>
                <div>
                    <label>Balai</label>
                    <select class="custom-select" class="form-control" name="balai2" id="balai2" value="<?php echo $rtk->balai2 ?>" readonly>
                        <option selected>Pilih Balai</option>
                        <option value="BBWS Pemali Juana">BBWS Pemali Juana</option>

                    </select>
                </div>
                <div>
                    <label>Wilayah Sungai</label>
                    <select class="custom-select" class="form-control" name="wilayah_sungai" id="wilayah_sungai" value="<?php echo $rtk->wilayah_sungai ?>" readonly>
                        <option selected>Wilayah Sungai</option>
                        <option value="Jratunslena">Jratunslena</option>
                    </select>
                </div>
                <div>
                    <label>Das</label>
                    <select class="custom-select" class="form-control" name="das" id="das" value="<?php echo $rtk->das ?>" readonly>
                        <option selected>KOSONG</option>
                        <option value="1">das_belum_tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" value="<?php echo $rtk->tujuan ?>">
                </div>
                <div class="form-group">
                    <label>Cara Pengambilan</label>
                    <input type="text" name="cara_pengambilan" class="form-control" value="<?php echo $rtk->cara_pengambilan ?>">
                </div>
                <div class="form-group">
                    <label>Cara Pembuangan</label>
                    <input type="text" name="cara_pembuangan" class="form-control" value="<?php echo $rtk->cara_pembuangan ?>">
                </div>
                <div class="form-group">
                    <label>Volume Pengambilan (liter/detik)</label>
                    <input type="text" name="volume_pengambilan_literdetik" class="form-control" value="<?php echo $rtk->volume_pengambilan_literdetik ?>">
                </div>
                <div class="form-group">
                    <label>Jam/Hari Pengambilan</label>
                    <input type="text" name="jamhari_pengambilan" class="form-control" value="<?php echo $rtk->jamhari_pengambilan ?>">
                </div>
                <div class="form-group">
                    <label>Hari/Bulan Pengambilan</label>
                    <input type="text" name="haribulan_pengambilan" class="form-control" value="<?php echo $rtk->haribulan_pengambilan ?>">
                </div>
                <div class="form-group">
                    <label>Volume Pengambilan (m3/bulan)</label>
                    <input type="text" name="volume_pengambilan_perbulan" class="form-control" value="<?php echo $rtk->volume_pengambilan_perbulan ?>">
                </div>
                <div class="form-group">
                    <label>Jangka Waktu</label>
                    <input type="text" name="jangka_waktu" class="form-control" value="<?php echo $rtk->jangka_waktu ?>">
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

                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <button type="reset" class="btn btn-danger mb-2">reset</button>






            </form>


        <?php } ?>



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->