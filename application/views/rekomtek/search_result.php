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
                </thead>
                <tbody>
                    <?php
                    if (!empty($result)) {
                        $i = 1;
                        foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['no_pengajuan']; ?></td>
                                <td><?= $row['nama_pemohon']; ?></td>
                                <td><?= $row['tujuan']; ?></td>
                                <td><?= $row['status']; ?></td>




                                <td>
                                    <a href="<?= base_url(); ?>rekomtek/statusview/<?= $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-refresh"></i></a>
                                    <a href="<?= base_url(); ?>rekomtek/edit/<?= $row['id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="<?= base_url(); ?>rekomtek/detail/<?= $row['id']; ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a>
                                    <a href="<?= base_url(); ?>rekomtek/hapus/<?= $row['id']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah Data Ingin Dihapus?')"><i class="fa fa-trash"></i></a>
                                </td>



                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="7">
                                <?php
                                if (isset($not_found) && $not_found == true) {
                                    echo "Not Found.";
                                } else {
                                    echo "No results found.";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
    <a href="<?= base_url('rekomtek'); ?>" class="btn btn-sm btn-primary ml-2">Back to Search</a>
    </section>
</div>