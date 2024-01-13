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
    <div class="col-md-4">
        <a href="<?= base_url('rekomtek/formview2'); ?>" class="btn btn-warning pull-right" style="margin-bottom: 15px;">
            <i class="fa fa-pencil-square-o"></i> Permohonan Baru
        </a>
    </div>
    <!-- Main content -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <section class="">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Pemohon &amp; Nama Perusahaan</th>
                                            <th>Tujuan</th>
                                            <th>No. Permohonan</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <!-- <td><?= $user['id']; ?></td>
                                    <td><?= $user['name'] . ' - ' . $user['nama_perusahaan']; ?></td> -->
                                </table>


                            </div>

                    </div>
                </div>
    </section>
</div>