<!-- <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
            </div>
        </div>
    </section> -->


<h2>
    <center>Data Rekomtek Pemohon</center>
</h2>
<hr />
<table class="table">



    <tr>
        <td width="141" height="21">No Pengajuan</td>
        <td width="4">:</td>
        <td width="274"><?= $rekomtek['no_pengajuan']; ?></td>
    </tr>
    <tr>
        <td height="21">Nama Pemohon</td>
        <td>:</td>
        <td><?= $rekomtek['nama_pemohon']; ?></td>
    </tr>
    <td height="22">Alamat Pemohon</td>
    <td>:</td>
    <td><?= $rekomtek['alamat_pemohon']; ?></td>
    </tr>
    <tr>
        <td height="21">No HP</td>
        <td>:</td>
        <td><?= $rekomtek['no_hp']; ?></td>
    </tr>
    <tr>
        <td height="21">Email</td>
        <td>:</td>
        <td><?= $rekomtek['email']; ?></td>
    </tr>

    <tr>
        <td height="21">Tujuan</td>
        <td>:</td>
        <td><?= $rekomtek['tujuan']; ?></td>
    </tr>
    <tr>
        <td height="21">Volume Pengambilan (liter/detik)</td>
        <td>:</td>
        <td><?= $rekomtek['volume_pengambilan_literdetik']; ?></td>
    </tr>
    <tr>
        <td height="21">Volume Pengambilan (m3/bulan)</td>
        <td>:</td>
        <td><?= $rekomtek['volume_pengambilan_perbulan']; ?></td>
    </tr>
    <tr>
        <td height="21">Jangka Waktu yang dimohon</td>
        <td>:</td>
        <td><?= $rekomtek['jangka_waktu']; ?></td>
    </tr>
    <tr>
        <td height="21">Sumber Air</td>
        <td>:</td>
        <td><?= $rekomtek['sumber_air']; ?></td>
    </tr>
    <tr>
        <td height="21">Koordinat</td>
        <td>:</td>
        <td><?= $rekomtek['longitude']; ?>, <?= $rekomtek['latitude']; ?></td>
    </tr>
    <tr>
        <td height="21">Kelurahan/Desa</td>
        <td>:</td>
        <td><?= $rekomtek['kelurahan_desa']; ?></td>
    </tr>
    <tr>
        <td height="21">Kecamatan</td>
        <td>:</td>
        <td><?= $rekomtek['kecamatan']; ?></td>
    </tr>
    <tr>
        <td height="21">Kabupaten/Kota</td>
        <td>:</td>
        <td><?= $rekomtek['kabupaten_kota']; ?></td>
    </tr>
    <tr>
        <td height="21">Provinsi</td>
        <td>:</td>
        <td><?= $rekomtek['provinsi']; ?></td>
    </tr>
    <tr>
        <td height="21">Balai</td>
        <td>:</td>
        <td><?= $rekomtek['balai']; ?></td>
    </tr>
    <tr>
        <td height="21">Wilayah Sungai</td>
        <td>:</td>
        <td><?= $rekomtek['wilayah_sungai']; ?></td>
    </tr>
    <tr>
        <td height="21">DAS</td>
        <td>:</td>
        <td><?= $rekomtek['das']; ?></td>
    </tr>
    </td>
    </tr>
</table>
</table>