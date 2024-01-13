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
        <div class="row">
            <div class="col-md-4">
                <div class="card pb-5">
                    <div class="card-header">
                        <h3 class="card-title">Form Filter By Tanggal</h3>
                    </div>
                    <div class="card-body pb-5">
                        <form action="<?php echo base_url(); ?>rekomtek/filter" method="POST" target="_blank">
                            <input type="hidden" name="nilaifilter" value="1">
                            <div class="form-group">
                                <label for="tanggalawal">Tanggal Awal</label>
                                <input type="date" name="tanggalawal" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggalakhir">Tanggal akhir</label>
                                <input type="date" name="tanggalakhir" class="form-control" required=>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Print" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form filter by Bulan</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url(); ?>rekomtek/filter" method="POST" target="_blank">
                            <input type="hidden" name="nilaifilter" value="2">

                            <div class="form-group">
                                <label for="tahun1">Pilih Tahun</label>
                                <select name="tahun1" class="form-control" required>
                                    <?php foreach ($tahun as $row) : ?>
                                        <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="bulanawal">Bulan Awal</label>
                                <select name="bulanawal" class="form-control" required>
                                    <option value="01">januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="bulanakhir">Bulan Akhir</label>
                                <select name="bulanakhir" class="form-control" required>
                                    <option value="01">januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Print" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form filter by Tahun</h3>
                    </div>
                    <div class="card-body pb-3">
                        <form action="<?php echo base_url(); ?>rekomtek/filter" method="POST" target="_blank">
                            <input type="hidden" name="nilaifilter" value="3">
                            <div class="form-group">
                                <label for="tahun2">Pilih Tahun</label>
                                <select name="tahun2" class="form-control" required>
                                    <?php foreach ($tahun as $row) : ?>
                                        <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Print" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <nav class="navbar navbar-light bg-light justify-content-between">
        <form class="form-inline" method="post" action="<?php echo base_url('rekomtek/searchingglobal'); ?>">
            <div class="input-group">
                <input type="text" class="form-control" name="search_value" placeholder="Masukkan Keyword">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </div>
            </div>
        </form>

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
                                    echo '<span class="badge badge-success">' . $rtk['status'] . '</span>';
                                } else {
                                    echo '<span class="badge badge-warning">' . 'Dalam Proses' . '</span>';
                                }
                                ?>
                            </td>
                            <td><?php echo $rtk['tgl_rekomtek']; ?> <?php
                                                                    if ($rtk['status'] == 'Rekomtek Anda Disetujui' && !empty($rtk['rekomtek_file'])) {
                                                                        echo '<a href="' . base_url('uploads/rekomtek/' . $rtk['rekomtek_file']) . '" class="btn btn-sm btn-success fa-solid fa-download" download></a>';
                                                                    }
                                                                    ?></td>
                            <td><?php echo $masa_aktif; ?></td>

                            <td> <a href="<?= base_url(); ?>rekomtek/detail/<?= $rtk['id']; ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-eye"></i></a></td>





                        </tr>
                    <?php endforeach; ?>


                </table>
        </div>
        </section>
</div>
<!-- 
<script>
    var ctx = document.getElementById('rekomtekChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode($chartLabels); ?>,
            datasets: [{
                label: 'Permohonan Masuk',
                data: <?= json_encode($chartData); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        option: {
            scales: {
                x: {
                    type: 'category',
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> -->