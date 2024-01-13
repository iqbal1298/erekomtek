<h2>
    <center>Rekap Rekomtek Pemohon</center>
</h2>
<hr />
<table class="table">


    <!-- Main content -->
    <div class="col-md-12 mt-2">
        <section class="content">
            <table class="table table-hover">

                <tr>
                    <th>No</th>
                    <th>Nomor Pengajuan</th>
                    <th>Nama Pemohon</th>
                    <th>Jenis Izin</th>
                    <th>Tujuan</th>
                    <th>Tanggal Permohonan</th>
                    <th>Status</th>
                    <th>Terbit</th>
                    <th>Masa Aktif</th>
                    <th>Aksi</th>

                </tr>

                <?php $no = 1;
                foreach ($rekomtek as $rtk) :
                    $tgl_rekomtek = strtotime($rtk['tgl_rekomtek']);

                    $masa_aktif = '';

                    if ($rtk['status'] == 'Rekomtek Anda Disetujui') {
                        $masa_aktif_timestamp = strtotime('+60 days', $tgl_rekomtek);
                        $masa_aktif = date('Y-m-d', $masa_aktif_timestamp);
                    }

                ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $rtk['no_pengajuan']; ?></td>
                        <td><?php echo $rtk['nama_pemohon']; ?></td>
                        <td><?php echo $rtk['jenis_izin']; ?></td>
                        <td><?php echo $rtk['tujuan']; ?></td>
                        <td><?php echo $rtk['tgl']; ?></td>
                        <td>
                            <?php
                            if ($rtk['status'] == 'Rekomtek Anda Disetujui') {
                                echo 'Rekomtek Anda Disetujui';
                            } else {
                                echo 'Dalam Proses';
                            }
                            ?>
                        </td>
                        <td><?php echo $rtk['tgl_rekomtek']; ?> </td>
                        <td><?php echo $masa_aktif; ?></td>
                        <td><?php
                            if ($rtk['status'] == 'Rekomtek Anda Disetujui' && !empty($rtk['rekomtek_file'])) {
                                echo '<a href="' . base_url('uploads/rekomtek/' . $rtk['rekomtek_file']) . '" class="btn btn-sm btn-primary fa-solid fa-download" download></a>';
                            }
                            ?>

                        </td>



                    </tr>
                <?php endforeach; ?>


            </table>

    </div>
    </section>
    </div>