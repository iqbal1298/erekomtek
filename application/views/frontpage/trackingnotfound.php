<div>
    <section class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hasil Tracking</h2>
                <h3 class="section-subheading text-muted">Status Permohonan <b>Tidak Ditemukan</b></h3>
                <h3>Data <?= $no_pengajuan ?> tidak ditemukan</h3>
            </div>
        </div>
    </section>
</div>


<?= form_open('tracking', 'id="tracking"') ?>

<div class="row justify-content-center">

    <div class="col-md-6">
        <?= $this->session->flashdata('message2'); ?>
        <div class="form-group">
            <input class="form-control form-control-lg form-control-borderless" type="search" name="trackid" placeholder="Masukkan Nomor Pengajuan Anda (Contoh: RTK-01012023-001)">
        </div>
        <div class=" mt-2">
            <input class="btn btn-primary justify-content-center" type="submit" value="Tracking">
        </div>
    </div>
</div>
<?= form_close() ?>

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>