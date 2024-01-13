<br>
<div>
    <section class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Hasil Tracking</h2>
                <h3 class="section-subheading text-muted">Status Permohonan <?= $no_pengajuan ?> <b>Ditemukan</b>, Detail Dibawah:</h3>
            </div>
            <br>

            <div class="text-justify pl-5 pr-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-10">
                        <div class="row">
                            <div class="col-lg-7">
                                <h3>Keterangan:</h3>
                                <table class="table">
                                    <tr>
                                        <td>No Pengajuan</td>
                                        <td>:</td>
                                        <td><?= $rekomtek['no_pengajuan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemohon</td>
                                        <td>:</td>
                                        <td><?= $rekomtek['nama_pemohon']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tujuan Rekomtek Pemohon</td>
                                        <td>:</td>
                                        <td><?= $rekomtek['tujuan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No Hp</td>
                                        <td>:</td>
                                        <td><?= $rekomtek['no_hp']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div>
                            <div class="checkout-wrap">
                                <ul class="checkout-bar">
                                    <?php if ($rekomtek['status'] == 'Cek Kelengkapan Persyaratan') : ?>
                                        <li class="active first">Cek Kelengkapan Persyaratan<br>
                                            <?php if ($rekomtek['status'] == 'Cek Kelengkapan Persyaratan') : ?>
                                                <small style="color: black;">(<?= $rekomtek['tgl_update']; ?>)</small>
                                            <?php endif; ?>
                                        </li>
                                        <li class="">Verifikasi<br> Data Teknis</li>
                                        <li class="">Mengundang Pemohon <br> Untuk Expose</li>
                                        <li class="">Tinjau Lapangan Dari<br> Tim Teknis</li>
                                        <li class="">Proses Berita Acara<br> Dari Tim Teknis</li>

                                    <?php elseif ($rekomtek['status'] == 'Rekomtek Ditolak') : ?>
                                        <li class=" active first">Cek Kelengkapan<br>Berkas/li>
                                        <li class="">Dokumen<br>Ditolak</li>
                                        <h1>MAAF PENGAJUAN ANDA DITOLAK KARENA SYARAT TIDAK TERPENUHI</h1>

                                    <?php elseif ($rekomtek['status'] == 'Verifikasi Data Teknis') : ?>
                                        <li class="active first">Cek Kelengkapan<br>Persyaratan</li>
                                        <li class="active">Verifikasi Data Teknis<br>
                                            <?php if ($rekomtek['status'] == 'Verifikasi Data Teknis') : ?>
                                                <small style="color: black;">(<?= $rekomtek['tgl_update']; ?>)</small>
                                            <?php endif; ?>
                                        </li>
                                        <li class="">Mengundang Pemohon <br> Untuk Expose</li>
                                        <li class="">Tinjau Lapangan Dari<br> Tim Teknis</li>
                                        <li class="">Proses Berita Acara<br> Dari Tim Teknis</li>
                                        <li class="">Rekomtek Anda Disetujui<br>&nbsp;</li>

                                    <?php elseif ($rekomtek['status'] == 'Mengundang Pemohon Untuk Expose') : ?>
                                        <li class="active first">Cek Kelengkapan<br>Persyaratan</li>
                                        <li class="active">Verifikasi<br> Data Teknis</li>
                                        <li class="active">Mengundang Pemohon Untuk Expose <br>
                                            <?php if ($rekomtek['status'] == 'Mengundang Pemohon Untuk Expose') : ?>
                                                <small style="color: black;">(<?= $rekomtek['tgl_update']; ?>)</small>
                                            <?php endif; ?>
                                        </li>
                                        <li class="">Tinjau Lapangan Dari<br> Tim Teknis</li>
                                        <li class="">Proses Berita Acara<br> Dari Tim Teknis</li>
                                        <li class="">Rekomtek Anda Disetujui<br>&nbsp;</li>

                                    <?php elseif ($rekomtek['status'] == 'Tinjau Lapangan Dari Tim Teknis') : ?>

                                        <li class="active first">Cek Kelengkapan<br>Persyaratan</li>

                                        <li class="active">Verifikasi<br> Data Teknis</li>
                                        <li class="active">Mengundang Pemohon <br> Untuk Expose</li>
                                        <li class="active">Tinjau Lapangan Dari Tim Teknis <br>
                                            <?php if ($rekomtek['status'] == 'Tinjau Lapangan Dari Tim Teknis') : ?>
                                                <small style="color: black;">(<?= $rekomtek['tgl_update']; ?>)</small>
                                            <?php endif; ?>
                                        </li>
                                        <li class="">Proses Berita Acara<br> Dari Tim Teknis</li>
                                        <li class="">Rekomtek Anda Disetujui<br>&nbsp;</li>


                                    <?php elseif ($rekomtek['status'] == 'Proses Berita Acara Dari Tim Teknis') : ?>
                                        <li class="active first">Cek Kelengkapan<br>Persyaratan</li>
                                        <li class="active">Verifikasi<br> Data Teknis</li>
                                        <li class="active">Mengundang Pemohon<br> Untuk Expose</li>
                                        <li class="active">Tinjau Lapangan Dari<br> Tim Teknis</li>
                                        <li class="active">Proses Berita Acara Dari Tim Teknis<br>
                                            <?php if ($rekomtek['status'] == 'Proses Berita Acara Dari Tim Teknis') : ?>
                                                <small style="color: black;">(<?= $rekomtek['tgl_update']; ?>)</small>
                                            <?php endif; ?>
                                        </li>
                                        <li class="">Rekomtek Anda Disetujui<br>&nbsp;</li>

                                    <?php elseif ($rekomtek['status'] == 'Rekomtek Anda Disetujui') : ?>
                                        <li class="active first">Cek Kelengkapan<br>Persyaratan</li>
                                        <li class="active">Verifikasi<br> Data Teknis</li>
                                        <li class="active">Mengundang Pemohon<br> Untuk Expose</li>
                                        <li class="active">Tinjau Lapangan Dari<br> Tim Teknis</li>
                                        <li class="active">Proses Berita Acara<br> Dari Tim Teknis</li>
                                        <li class="active">Rekomtek Anda Disetujui<br>&nbsp; <?php if ($rekomtek['status'] == 'Rekomtek Anda Disetujui') : ?>
                                                <small style="color: black;">(<?= $rekomtek['tgl_update']; ?>)</small>
                                            <?php endif; ?>
                                        </li>



                                    <?php endif; ?>

                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <Br>
        <div class="col-md-12">
            <section class="container">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>

                            <th>Status</th>
                            <th>Tanggal Update</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>


                        <tr>

                            <td><?= $rekomtek['status']; ?></td>
                            <td><?= $rekomtek['tgl_update']; ?></td>
                            <td><?= $rekomtek['ket_status']; ?></td>
                            <td>
                                <?php if ($rekomtek['status'] == 'Rekomtek Anda Disetujui') : ?>
                                    <a href="<?= base_url('rekomtek/downloadRekomtek/' . $rekomtek['id']); ?>">Unduh</a>
                                <?php endif; ?>
                                <?php if ($rekomtek['status'] == 'Rekomtek Ditolak') : ?>
                                    <a href="<?= base_url('frontpage/#login'); ?>">Buat Permohonan</a>
                                <?php endif; ?>
                            </td>

                        </tr>


                    </thead>
                </table>
            </section>
        </div>



    </section>


    <style>
        @-webkit-keyframes myanimation {
            from {
                left: 0%;
            }

            to {
                left: 50%;
            }
        }

        h1 {
            text-align: center;
            font-family: 'PT Sans Caption', sans-serif;
            font-weight: 400;
            font-size: 20px;
            padding: 20px 0;
            color: #777;
        }

        .checkout-wrap {
            color: #444;
            font-family: 'PT Sans Caption', sans-serif;
            margin: 40px auto;
            max-width: 1200px;
            position: relative;
        }

        ul.checkout-bar li {
            /*color: #ccc;*/
            color: #d9534f;
            display: block;
            font-size: 10px;
            font-weight: 600;
            padding: 14px 20px 14px 80px;
            position: relative;
        }

        ul.checkout-bar li:before {
            -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
            box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
            /*background: #ddd;*/
            background: #d9534f;
            border: 2px solid #FFF;
            border-radius: 50%;
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            left: 20px;
            line-height: 37px;
            height: 35px;
            position: absolute;
            text-align: center;
            text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
            top: 4px;
            width: 35px;
            z-index: 999;
        }

        ul.checkout-bar li.active {
            /*color: #8bc53f;*/
            color: #5cb85c;
            font-weight: bold;
        }



        ul.checkout-bar li.active:before {
            /*background: #8bc53f;*/
            background: #5cb85c;
            z-index: 1;
        }

        ul.checkout-bar li.visited {
            background: #ECECEC;
            color: #57aed1;
            z-index: 99999;
        }

        ul.checkout-bar li.visited:before {
            background: #57aed1;
            z-index: 99999;
        }

        ul.checkout-bar li:nth-child(1):before {
            content: " 1";
        }

        ul.checkout-bar li:nth-child(2):before {
            content: "2";
        }

        ul.checkout-bar li:nth-child(3):before {
            content: "3";
        }

        ul.checkout-bar li:nth-child(4):before {
            content: "4";
        }

        ul.checkout-bar li:nth-child(5):before {
            content: "5";
        }

        ul.checkout-bar li:nth-child(6):before {
            content: "6";
        }

        ul.checkout-bar li:nth-child(7):before {
            content: "7";
        }

        ul.checkout-bar a {
            color: #57aed1;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
        }

        @media all and (min-width: 800px) {
            .checkout-bar li.active:after {
                -webkit-animation: myanimation 3s 0;
                background-size: 35px 35px;
                /*background-color: #8bc53f;*/
                background-color: #5cb85c;
                background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
                background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
                -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                content: "";
                height: 15px;
                width: 100%;
                left: 50%;
                border-radius: 12px;
                position: absolute;
                top: -50px;
                z-index: 0;
            }

            .checkout-wrap {
                margin: 80px auto;
            }

            ul.checkout-bar {
                -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                background-size: 35px 35px;
                /*background-color: #EcEcEc;*/
                background-color: #d9534f;
                background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
                background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
                border-radius: 15px;
                height: 15px;
                margin: 0 auto;
                padding: 0;
                position: absolute;
                width: 100%;
            }

            ul.checkout-bar:before {
                background-size: 35px 35px;
                /*background-color: #8bc53f;*/
                background-color: #5cb85c;
                background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
                background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
                -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                border-radius: 15px;
                content: " ";
                height: 15px;
                left: 0;
                position: absolute;
                width: 10%;
            }

            ul.checkout-bar li {
                display: inline-block;
                margin: 50px 5px 0px -35px;
                padding: 0;
                text-align: center;
                width: 19%;
            }

            ul.checkout-bar li:before {
                height: 45px;
                left: 40%;
                line-height: 45px;
                position: absolute;
                top: -65px;
                width: 45px;
                z-index: 99;
            }

            ul.checkout-bar li.visited {
                background: none;
            }

            ul.checkout-bar li.visited:after {
                background-size: 35px 35px;
                background-color: #57aed1;
                background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
                background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
                -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
                content: "";
                height: 15px;
                left: 50%;
                position: absolute;
                top: -50px;
                width: 100%;
                z-index: 99;
            }
        }
    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </br>


</div>