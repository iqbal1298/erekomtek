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
        <p class="ml-2">Selamat Datang di Halaman Admin E-Rekomtek BBWS Pemali-Juana</p>

        <div class="row">
            <div class="col-lg-3 col-6">

                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $jumlah_dalam_proses; ?></h3>
                        <p>Dalam Proses</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?= base_url('rekomtek/dalamproses'); ?>" class="small-box-footer ">Cek Data<i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $jumlah_disetujui; ?></h3>

                        <p>Disetujui</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?= base_url('rekomtek/disetujui'); ?>" class="small-box-footer">Cek Data <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $jumlah_ditolak; ?></h3>

                        <p>Ditolak</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?= base_url('rekomtek/ditolak'); ?>" class="small-box-footer">Cek Data <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <!-- <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?= $jumlah_perpanjang_pengusahaan; ?></h3>

                        <p>Grafik</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">Cek Data <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div> -->



    </section>
</div>