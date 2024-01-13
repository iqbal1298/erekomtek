<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#overview" role="tab" data-toggle="tab">Data Pemohon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cekkelengkapan" role="tab" data-toggle="tab">Cek Kelengkapan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#rekomtek" role="tab" data-toggle="tab">Rekomtek</a>
                </li>
            </ul>
        </div>
    </section>

    <div class="tab-content">
        <!-- Tab Detail Data -->
        <div class="tab-pane active" id="overview">
            <table class="table">


                <a href="<?= base_url(); ?>rekomtek/cetak/<?= $rekomtek['id']; ?>" class="btn btn-sm btn-success fa fa-print mb-2 ml-2 mt-2"></a>
                <tr>
                    <td width="141" height="21">No Pengajuan</td>
                    <td width="4">:</td>
                    <td width="274"><?= $rekomtek['no_pengajuan']; ?></td>
                </tr>
                <tr>
                    <td height="21">Nama Pemohon</td>
                    <td>:</td>
                    <td><?= $rekomtek['nama_pemohon']; ?></td>
                </tr>
                <td height="22">Alamat Pemohon</td>
                <td>:</td>
                <td><?= $rekomtek['alamat_pemohon']; ?></td>
                </tr>
                <tr>
                    <td height="21">No HP</td>
                    <td>:</td>
                    <td><?= $rekomtek['no_hp']; ?></td>
                </tr>
                <tr>
                    <td height="21">Email</td>
                    <td>:</td>
                    <td><?= $rekomtek['email']; ?></td>
                </tr>

                <tr>
                    <td height="21">Tujuan</td>
                    <td>:</td>
                    <td><?= $rekomtek['tujuan']; ?></td>
                </tr>
                <tr>
                    <td height="21">Volume Pengambilan (liter/detik)</td>
                    <td>:</td>
                    <td><?= $rekomtek['volume_pengambilan_literdetik']; ?></td>
                </tr>
                <tr>
                    <td height="21">Volume Pengambilan (m3/bulan)</td>
                    <td>:</td>
                    <td><?= $rekomtek['volume_pengambilan_perbulan']; ?></td>
                </tr>
                <tr>
                    <td height="21">Jangka Waktu yang dimohon</td>
                    <td>:</td>
                    <td><?= $rekomtek['jangka_waktu']; ?></td>
                </tr>
                <tr>
                    <td height="21">Sumber Air</td>
                    <td>:</td>
                    <td><?= $rekomtek['sumber_air']; ?></td>
                </tr>
                <tr>
                    <td height="21">Koordinat</td>
                    <td>:</td>
                    <td><?= $rekomtek['longitude']; ?>, <?= $rekomtek['latitude']; ?></td>
                </tr>
                <tr>
                    <td height="21">Kelurahan/Desa</td>
                    <td>:</td>
                    <td><?= $rekomtek['kelurahan_desa']; ?></td>
                </tr>
                <tr>
                    <td height="21">Kecamatan</td>
                    <td>:</td>
                    <td><?= $rekomtek['kecamatan']; ?></td>
                </tr>
                <tr>
                    <td height="21">Kabupaten/Kota</td>
                    <td>:</td>
                    <td><?= $rekomtek['kabupaten_kota']; ?></td>
                </tr>
                <tr>
                    <td height="21">Provinsi</td>
                    <td>:</td>
                    <td><?= $rekomtek['provinsi']; ?></td>
                </tr>
                <tr>
                    <td height="21">Balai</td>
                    <td>:</td>
                    <td><?= $rekomtek['balai']; ?></td>
                </tr>
                <tr>
                    <td height="21">Wilayah Sungai</td>
                    <td>:</td>
                    <td><?= $rekomtek['wilayah_sungai']; ?></td>
                </tr>


            </table>
        </div>

        <!-- Tab Unduh Berkas -->

        <div class="tab-pane" id="cekkelengkapan">
            <table class="table table-hover">

                <tr>
                    <th>Nama Berkas</th>
                </tr>
            </table>

            <table class="table table-hover">

                <?php if ($rekomtek['berkas1']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas1']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas1']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas1']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php endif; ?>


                <?php if ($rekomtek['berkas2']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas2']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas2']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas2']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php endif; ?>


                <?php if ($rekomtek['berkas3']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas3']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas3']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas3']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    <?php endif; ?>


                    <?php if ($rekomtek['berkas4']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas4']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas4']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas4']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php endif; ?>

            </table>
        </div>










        <!-- Tab Rekomtek -->
        <div class="tab-pane" id="rekomtek">
            <div class="col-md-12">
                <h4 class="mt-3 ml-2">Data Rekomendasi Teknis</h4>
                <?php
                // Notif Data disimpan
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                echo form_open_multipart('rekomtek/rekomtekAksi/' . $id);
                ?>


                <div class="col-md-12">
                    <label>Nomor Rekomtek</label>
                    <input name="no_rekomtek" value="<?= set_value('no_rekomtek') ?>" class="form-control" required />
                </div>

                <div class="col-md-12">
                    <label>Tanggal Rekomtek (contoh: 2023-09-09)</label>
                    <input name="tgl_rekomtek" placeholder="2017-09-09" value="<?= set_value('tgl_rekomtek') ?>" class="form-control" required />
                </div>

                <div class="col-md-12">
                    <label>Berkas Rekomtek (.pdf)</label>
                    <div class="custom-file">
                        <input type="file" class="form-control" id="berkas1" name="berkas1" required>
                        <label class="custom-file-label" for="berkas1">Choose file</label>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    </section>
</div>



<script>
    $(document).ready(function() {
        $("[data-fancybox]").fancybox();
    });
</script>