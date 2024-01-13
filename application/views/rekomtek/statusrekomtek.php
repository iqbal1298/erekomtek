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
        <div class="col-sm">


            <?php foreach ($rekomtek as $rtk) { ?>
                <?php
                //validasi data tidak boleh kosong
                echo validation_errors('<div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>');

                //Notif Data berhasil disimpan
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                }
                echo form_open('rekomtek/status/' . $rtk->id);
                ?>

                <table class="table table-bordered sm">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ajukan</td>
                            <td><input name="status" type="radio" value="Mengajukan"></td>

                        </tr>
                        <tr>
                            <td>Cek Kelengkapan Persyaratan</td>
                            <td><input name="status" type="radio" value="Cek Kelengkapan Persyaratan"></td>

                        </tr>
                        <tr>
                            <td>Verifikasi Data Teknis</td>
                            <td><input name="status" type="radio" value="Verifikasi Data Teknis"></td>

                        </tr>
                        <tr>
                            <td>Mengundang Pemohon Untuk Expose</td>
                            <td><input name="status" type="radio" value="Mengundang Pemohon Untuk Expose"></td>

                        </tr>
                        <tr>
                            <td>Tinjau Lapangan Dari Tim Teknis</td>
                            <td><input name="status" type="radio" value="Tinjau Lapangan Dari Tim Teknis"></td>

                        </tr>
                        <tr>
                            <td>Proses Berita Acara Dari Tim Teknis</td>
                            <td><input name="status" type="radio" value="Proses Berita Acara Dari Tim Teknis"></td>

                        </tr>
                        <tr>
                            <td>Rekomtek Anda Disetujui</td>
                            <td><input name="status" type="radio" value="Rekomtek Anda Disetujui"></td>

                        </tr>
                        <tr>
                            <td>Rekomtek Ditolak</td>
                            <td><input name="status" type="radio" value="Rekomtek Ditolak"></td>
                        </tr>
                        <tr>
                            <td><label>Tanggal Update</td>
                            <td><label>Keterangan</td>
                        </tr>
                        <tr>
                            <td><input name="tgl_update" id="tgl_update" placeholder="Format: tgl-bl-tahun" value="<?= date('d-m-Y'); ?>" class="form-control" readonly /></td>

                            <td><input name="ket_status" id="ket_status" placeholder="Keterangan..." value="<?= set_value('ket_status') ?>" class="form-control" /></td>
                        </tr>
                    </tbody>
                </table>

                <button type="submit" class="btn btn-sm btn-primary  mb-2">Update</button>
                <a href="<?= base_url('rekomtek') ?>" class="btn btn-sm btn-warning mb-2"> Kembali </a>

                <?php echo form_close(); ?>
            <?php } ?>



    </section>
</div>