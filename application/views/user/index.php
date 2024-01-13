<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>







                </div>
            </div>

            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">
                        Download Formulir
                    </div>
                    <div class="card-body">
                        <?php
                        $formulirfolder = 'uploads/formulir/';

                        $formulirFiles = scandir($formulirfolder);

                        $formulirFiles = array_diff($formulirFiles, array('.', '..'));

                        if (count($formulirFiles) > 0) {
                            foreach ($formulirFiles as $file) {
                                echo '<p>' . $file . '</p>';
                                echo '<a href="' . base_url($formulirfolder . $file) . '"class="btn btn-primary" download="' . $file . '">Download Formulir</a>';
                                echo '<br><br>';
                            }
                        } else {
                            echo 'Belum ada Formulir yang tersedia untuk diunduh.';
                        }
                        ?>

                    </div>
                </div>
            </div>



            <div class="col-md-12">
                <section class="content">

                    <table class="table table-bordered">

                        <tr>
                            <th>Nama Pemohon</th>
                            <th>Nomor Pengajuan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>


                        <tr>
                            <td><?= $user['name']; ?></td>
                            <td>
                                <?php
                                $rekomtek_data = $this->db->get_where('rekomtek', ['nama_pemohon' => $user['name']])->row_array();

                                if ($rekomtek_data) {
                                    echo $rekomtek_data['no_pengajuan'];
                                } else {
                                    echo 'Belum ada nomor pengajuan';
                                }
                                ?>
                            </td>



                            <td>
                                <?php
                                if ($rekomtek_data) {
                                    $rekomtek_id = $rekomtek_data['id'];
                                    $status = $rekomtek_data['status'];
                                    if ($status == 'Rekomtek Anda Disetujui') {
                                        echo '<span class="badge badge-success">' . $status . '</span>';
                                    } elseif ($status == 'Rekomtek Ditolak') {
                                        echo '<span class="badge badge-danger">' . $status . '</span>';
                                        echo '<br>';
                                        echo 'Buat Permohonan Ulang<a href="' . base_url('rekomtek/formview') . '" i class="fa fa-edit ml-2"></i>';
                                    } else {
                                        echo '<span class="badge badge-primary">' . $status . '</span>';
                                    }
                                } else {
                                    echo 'Anda belum membuat permohonan<a href="' . base_url('rekomtek/formview') . '" i class="fa fa-edit ml-2"></i>';
                                }
                                ?>
                            </td>



                            <td> <?php
                                    $rekomtek_data = $this->db->get_where('rekomtek', ['nama_pemohon' => $user['name']])->row_array();
                                    if ($rekomtek_data) {
                                        echo $rekomtek_data['ket_status'];
                                    }
                                    ?>
                            </td>


                            <td>
                                <?php if (isset($rekomtek_id)) : ?>

                                    <?php
                                    if ($rekomtek_data && ($status !== 'Rekomtek Anda Disetujui' && $status != 'Rekomtek Ditolak')) {
                                        echo '<a href="' . base_url('user/editrekomtek/' . $rekomtek_id) . '" class="fa fa-eye"></a>';
                                    }
                                    ?>

                                    <?php
                                    if ($rekomtek_data && $status == 'Rekomtek Anda Disetujui') {
                                        echo '<a href="' . base_url('uploads/rekomtek/' . $rekomtek_data['rekomtek_file']) . '"class="fa fa-download"></a>';
                                    }
                                    ?>
                                <?php endif; ?>
                            </td>
                        </tr>



                        </thead>
                    </table>
                </section>
            </div>
        </div>
    </section>




    <!-- Main content -->
    <section class="content">



    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->