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
        echo form_open_multipart('rekomtek/rekomtekAksi/' . $rtk['id']);
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


</section>
</div>