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

    <body onload="window.print()">
        <h1><?php echo $title ?></h1>
        <h2><?php echo $subtitle ?></h2>


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

                    </tr>

                    <?php $no = 1;
                    foreach ($datafilter as $row) : ?>



                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->no_pengajuan; ?></td>
                            <td><?php echo $row->nama_pemohon; ?></td>
                            <td><?php echo $row->jenis_izin; ?></td>
                            <td><?php echo $row->tujuan; ?></td>
                            <td><?php echo $row->tgl; ?></td>


                        <?php endforeach ?>
                        </tr>
                </table>

            </section>
        </div>


    </body>
</div>