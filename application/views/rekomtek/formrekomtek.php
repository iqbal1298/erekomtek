<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">


                    <?php if ($this->session->flashdata('pesan')) : ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('pesan') ?>
                        </div>
                    <?php endif; ?>





                    <!-- <?php echo form_open_multipart('rekomtek/aksiInsert') ?> -->


                    <div class="container">
                        <div class="card">
                            <div class="card-header bg-dark text-white"><?= $title; ?></div>


                            <div class="card-body">
                                <form class="user" method="post" enctype="multipart/form-data" action="<?= base_url('rekomtek/aksiInsert'); ?>">
                                    <input type="hidden" name="nama_pemohon" value="<?php echo $user['name']; ?>">
                                    <input type="hidden" name="alamat_pemohon" value="<?php echo $user['alamat_pemohon']; ?>">
                                    <input type="hidden" name="no_hp" value="<?php echo $user['no_hp']; ?>">
                                    <input type="hidden" name="email" value="<?php echo $user['email']; ?>">


                                    <div class="row">
                                        <div class="col mb-3">
                                            <input type="text" class="form-control" name="no_pengajuan" value="<?php echo $kode; ?>" readonly>
                                        </div>

                                        <input type="hidden" name="tgl" id="tgl" value="<?= date('d-m-Y'); ?>" class="form-control" readonly />

                                        <select class="custom-select" name="jenis_izin" id="jenis_izin">
                                            <option selected>Pilih Jenis Izin</option>
                                            <option value="pengusahaan" <?php echo set_select('jenis_izin', 'pengusahaan'); ?>>Pengusahaan</option>
                                            <option value="penggunaan" <?php echo set_select('jenis_izin', 'penggunaan'); ?>>Penggunaan</option>
                                            <option value="perpanjang pengusahaan" <?php echo set_select('jenis_izin', 'perpanjang pengusahaan'); ?>>Perpanjang Pengusahaan</option>
                                            <option value="perpanjang penggunaan" <?php echo set_select('jenis_izin', 'perpanjang penggunaan'); ?>>Perpanjang Penggunaan</option>
                                        </select>
                                        <?= form_error('jenis_izin', ' <small class="text-danger">', '</small>'); ?>
                                    </div>

                                    <div class="pt-3">
                                        <select class="custom-select" name="balai" id="balai" required>
                                            <option selected>Pilih Balai</option>
                                            <option value="BBWS Pemali Juana" <?php echo set_select('balai', 'BBWS Pemali Juana'); ?>>BBWS Pemali Juana</option>

                                        </select>
                                        <?= form_error('balai', ' <small class="text-danger">', '</small>'); ?>
                                    </div>

                                    <div class="pt-3">
                                        <div class="row">

                                            <div class="col">
                                                <input type="text" class="form-control" name="sumber_air" id="sumber_air" placeholder="Sumber Air" value="<?php echo set_value('sumber_air'); ?>">
                                                <?= form_error('sumber_air', ' <small class="text-danger">', '</small>'); ?>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" value="<?php echo set_value('longitude'); ?>">
                                                <?= form_error('longitude', ' <small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div class="row">

                                                <div class="col">
                                                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" value="<?php echo set_value('latitude'); ?>">
                                                    <?= form_error('latitude', ' <small class="text-danger">', '</small>'); ?>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="kelurahan_desa" id="kelurahan_desa" placeholder="Kelurahan/Desa" value="<?php echo set_value('kelurahan_desa'); ?>">
                                                    <?= form_error('kelurahan_desa', ' <small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>

                                            <div class="pt-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" value="<?php echo set_value('kecamatan'); ?>">
                                                        <?= form_error('kecamatan', ' <small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" name="kabupaten_kota" id="kabupaten_kota" placeholder="Kabupaten/kota" value="<?php echo set_value('kabupaten_kota'); ?>">
                                                        <?= form_error('kabupaten_kota', ' <small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>

                                                <div class="pt-4">
                                                    <select class="custom-select" name="provinsi" id="provinsi">

                                                        <option selected>Provinsi</option>
                                                        <option value="Jawa Tengah" <?php echo set_select('provinsi', 'Jawa Tengah'); ?>>Jawa Tengah</option>

                                                    </select>

                                                </div>
                                                <?= form_error('provinsi', ' <small class="text-danger">', '</small>'); ?>

                                                <div class="pt-3">
                                                    <select class="custom-select" name="balai2" id="balai2" required>
                                                        <option selected>Pilih Balai</option>
                                                        <option value="BBWS Pemali Juana" <?php echo set_select('balai2', 'BBWS Pemali Juana'); ?>>BBWS Pemali Juana</option>

                                                    </select>
                                                    <?= form_error('balai2', ' <small class="text-danger">', '</small>'); ?>
                                                </div>

                                                <div class="pt-4">
                                                    <select class="custom-select" name="wilayah_sungai" id="wilayah_sungai">

                                                        <option selected>Wilayah Sungai</option>
                                                        <option value="Jratunseluna" <?php echo set_select('wilayah_sungai', 'Jratunseluna'); ?>>Jratunseluna</option>
                                                    </select>
                                                    <?= form_error('wilayah_sungai', ' <small class="text-danger">', '</small>'); ?>
                                                </div>

                                                <!-- <div class="pt-3">
                                                    <select class="custom-select" name="das" id="das" required>

                                                        <option selected>KOSONG</option>
                                                        <option value="1">das_belum_tersedia</option>

                                                    </select>
                                                    <?= form_error('das', ' <small class="text-danger">', '</small>'); ?>
                                                </div> -->

                                                <div class="pt-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="tujuan" id="tujuan" placeholder="Tujuan" value="<?php echo set_value('tujuan'); ?>">
                                                            <?= form_error('tujuan', ' <small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" name="cara_pengambilan" id="cara_pengambilan" placeholder="Cara Pengambilan" value="<?php echo set_value('cara_pengambilan'); ?>">
                                                            <?= form_error('cara_pengambilan', ' <small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="pt-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" class="form-control" name="cara_pembuangan" id="cara_pembuangan" placeholder="Cara Pembuangan" value="<?php echo set_value('cara_pembuangan'); ?>">
                                                                <?= form_error('cara_pembuangan', ' <small class="text-danger">', '</small>'); ?>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="form-control" name="volume_pengambilan_literdetik" id="volume_pengambilan_literdetik" placeholder="Volume Pengambilan (liter/detik)" value="<?php echo set_value('volume_pengambilan_literdetik'); ?>">
                                                                <?= form_error('volume_pengambilan_literdetik', ' <small class="text-danger">', '</small>'); ?>
                                                            </div>
                                                        </div>


                                                        <div class="pt-3">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <input type="text" class="form-control" name="jamhari_pengambilan" id="jamhari_pengambilan" placeholder="Jam/Hari Pengambilan (Jam/Hari)" value="<?php echo set_value('jamhari_pengambilan'); ?>">
                                                                    <?= form_error('jamhari_pengambilan', ' <small class="text-danger">', '</small>'); ?>
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control" name="haribulan_pengambilan" id="haribulan_pengambilan" placeholder="Hari/Bulan Pengambilan (Hari/Bulan)" value="<?php echo set_value('haribulan_pengambilan'); ?>">
                                                                    <?= form_error('haribulan_pengambilan', ' <small class="text-danger">', '</small>'); ?>
                                                                </div>
                                                            </div>

                                                            <div class="pt-3">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <input type="text" class="form-control" name="volume_pengambilan_perbulan" id="volume_pengambilan_perbulan" placeholder="Volume Pengambilan Perbulan (m3/bulan)" value="<?php echo set_value('volume_pengambilan_perbulan'); ?>">
                                                                        <?= form_error('volume_pengambilan_perbulan', ' <small class="text-danger">', '</small>'); ?>
                                                                    </div>
                                                                    <div class="col">
                                                                        <input type="text" class="form-control" name="jangka_waktu" id="jangka_waktu" placeholder="Jangka waktu yang dimohonkan (tahun)" value="<?php echo set_value('jangka_waktu'); ?>">
                                                                        <?= form_error('jangka_waktu', ' <small class="text-danger">', '</small>'); ?>
                                                                    </div>
                                                                </div>

                                                                <div class="pt-3">
                                                                    <label>Surat Permohonan</label>
                                                                    <div class="pt-3">
                                                                        <input type="file" name="berkas1" id="berkas1" for="berkas1" required>
                                                                        <?= form_error('berkas1', ' <small class="text-danger">', '</small>'); ?>
                                                                    </div>
                                                                    <div class="pt-3">
                                                                        <label>Gambar Lokasi/Peta Situasi (disertai titik koordinat pengambilan dan/atau jalur konstruksi)</label>
                                                                        <div class="pt-3">
                                                                            <input type="file" name="berkas2" id="berkas2" for="berkas2" required>
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            <label>Gambar Detail Desain Bangunan (pengambilan, pembuangan air maupun prasarana lainnya)</label>
                                                                            <div class="pt-3">
                                                                                <input type="file" name="berkas3" id="berkas3" for="berkas3" required>
                                                                            </div>
                                                                            <div class="pt-3">
                                                                                <label>Spesifikasi bangunan teknis</label>
                                                                                <div class="pt-3">
                                                                                    <input type="file" name="berkas4" id="berkas4" for="berkas4" required>
                                                                                </div>


                                                                                <div class="mt-2 ml-2 pt-3">
                                                                                    <tr>
                                                                                        <td>Ajukan</td>
                                                                                        <td><input name="status" type="radio" value="mengajukan" required></td>
                                                                                    </tr>
                                                                                </div>


                                                                                <div class="pt-3">
                                                                                    <div class="col-auto">
                                                                                        <button type="submit" class="btn btn-primary mb-2">Kirim</button>
                                                                                    </div>

                                                                                    <?php echo form_close(); ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
    </section>
    <section class="content">
    </section>
</div>