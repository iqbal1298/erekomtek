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

    <a href="<?= base_url('kelolauser/adduserview') ?>" class="btn btn-sm btn-success fa-regular fa-square-plus mb-3 ml-3"></a>
    <?= $this->session->flashdata('message3'); ?>
    <!-- Main content -->
    <div class="col-md-12 mt-2">
        <section class="content">
            <table class="table">

                <tr>
                    <th>NO</th>
                    <th>USERNAME</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>NO HP</th>
                    <th>ROLE</th>
                    <th>TOMBOL AKSI</th>
                </tr>

                <?php $no = 1;
                foreach ($users as $usr) : ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $usr['username']; ?></td>
                        <td><?php echo $usr['name']; ?></td>
                        <td><?php echo $usr['email']; ?></td>
                        <td><?php echo $usr['no_hp']; ?></td>
                        <td><?php echo $usr['role_id']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>kelolauser/edit/<?= $usr['id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url(); ?>kelolauser/hapus/<?= $usr['id']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah Data Ingin Dihapus?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </div>
</div>