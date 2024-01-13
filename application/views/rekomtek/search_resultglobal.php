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

    <!-- Main content -->
    <div class="col-md-12 mt-2">
        <section class="content">
            <table class="table table-hover">
                <tr>
                    <th>NO</th>
                    <th>No Pengajuan</th>
                    <th>Nama</th>
                    <th>Jenis Izin</th>
                    <th>Tujuan</th>
                    <th>Tanggal Permohonan</th>
                    <th>Status</th>
                    <th>Terbit</th>
                    <th>Masa Aktif</th>
                    <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($result)) {
                        $i = 1;
                        foreach ($result as $row) {

                    ?>
                            <?php
                            $tgl_rekomtek = strtotime($row['tgl_rekomtek']);

                            $masa_aktif = '';

                            if ($row['status'] == 'Rekomtek Anda Disetujui') {
                                $masa_aktif_timestamp = strtotime('+60 days', $tgl_rekomtek);
                                $masa_aktif = date('Y-m-d', $masa_aktif_timestamp);
                            }
                            ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['no_pengajuan']; ?></td>
                                <td><?= $row['nama_pemohon']; ?></td>
                                <td><?= $row['jenis_izin']; ?></td>
                                <td><?= $row['tujuan']; ?></td>
                                <td><?= $row['tgl']; ?></td>
                                <td><?= $row['status']; ?></td>
                                <td><?= $row['tgl_rekomtek']; ?></td>
                                <td> <?php echo $masa_aktif; ?></td>




                                <td>
                                <td> <a href="<?= base_url(); ?>rekomtek/detail/<?= $row['id']; ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a></td>
                                </td>



                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="7">No results found.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
    <a href="<?= base_url('rekomtek/permohonanmasuk'); ?>" class="btn btn-sm btn-primary ml-2">Back to Search</a>
    </section>
</div>