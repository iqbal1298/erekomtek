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

    <?= $this->session->flashdata('message'); ?>

    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('pesan') ?>
            <a href="<?= base_url('rekomtek/detail'); ?>" class="alert-link"></a>

        </div>
    <?php endif; ?>

    <nav class="navbar navbar-light bg-light justify-content-between">
        <form class="form-inline" method="post" action="<?php echo base_url('rekomtek/searching'); ?>">
            <div class="input-group">
                <input type="text" class="form-control" name="search_value" placeholder="Masukkan Keyword">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <a href="<?= base_url('rekomtek/formview') ?>" class="btn btn-sm btn-success  fa-regular fa-square-plus mb-3 mt-4 mr-2"></a>

        <!-- Main content -->
        <div class="col-md-12 mt-2">
            <section class="content">
                <table class="table table-hover">
                    <tr>
                        <th>NO</th>
                        <th>NO PENGAJUAN</th>
                        <th>NAMA</th>
                        <th>TUJUAN</th>
                        <th>STATUS</th>

                        <th>TOMBOL AKSI</th>
                    </tr>

                    <?php $no = 1;
                    foreach ($rekomtek as $rtk) : ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $rtk['no_pengajuan']; ?></td>
                            <td><?php echo $rtk['nama_pemohon']; ?></td>
                            <td><?php echo $rtk['tujuan']; ?></td>
                            <td>
                                <?php

                                if ($rtk['status'] == 'Rekomtek Ditolak') {
                                    echo '<span class="badge badge-danger">' . $rtk['status'] . '</span>';
                                } elseif ($rtk['status'] == 'Rekomtek Anda Disetujui') {

                                    echo '<span class="badge badge-success">' . $rtk['status'] . '</span>';
                                } else {
                                    echo '<span class="badge badge-primary">' . $rtk['status'] . '</span>';
                                }
                                ?>

                            </td>

                            <td>
                                <a href="<?= base_url(); ?>rekomtek/statusview/<?= $rtk['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-refresh"></i></a>
                                <a href="<?= base_url(); ?>rekomtek/edit/<?= $rtk['id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url(); ?>rekomtek/detail/<?= $rtk['id']; ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                                <!-- <a href="<?= base_url(); ?>rekomtek/rekomtekview/<?= $rtk['id']; ?>" class="btn btn-sm btn-primary">Terbit Rekomtek</a> -->
                                <a href="<?= base_url(); ?>rekomtek/hapus/<?= $rtk['id']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah Data Ingin Dihapus?')"><i class="fa fa-trash"></i></a>

                                <!-- <a href="<?= base_url('rekomtek/lampiran/' . $rtk['id']); ?>" class="btn btn-sm btn-info"><i class="fa fa-file"></i></a> -->
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </table>
                <div class="row">
                    <div class="col">
                        <?php echo $pagination; ?>
                    </div>
                </div>
        </div>
        </section>
</div>