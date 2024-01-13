<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="tab-pane" id="cekkelengkapan">
            <table class="table table-hover">

                <tr>
                    <th>Nama Berkas</th>


                </tr>


            </table>

            <table class="table table-hover">

                <?php if ($rekomtek['berkas1']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas1']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas1']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas1']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php endif; ?>


                <?php if ($rekomtek['berkas2']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas2']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas2']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas2']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php endif; ?>


                <?php if ($rekomtek['berkas3']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas3']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas3']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas3']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    <?php endif; ?>


                    <?php if ($rekomtek['berkas4']) : ?>
                    <tr>
                        <td><?= $rekomtek['berkas4']; ?></td>
                        <td><a href="<?= base_url('uploads/file/' . $rekomtek['berkas4']); ?>" class="btn btn-primary fa-solid fa-download" download></a></td>
                        <td> <a href="<?= base_url('uploads/file/' . $rekomtek['berkas4']); ?>" data-fancybox data-caption="<?= $rekomtek['berkas4']; ?>" class="btn btn-success"><i class=" fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php endif; ?>


            </table>
        </div>
    </section>


    <section class="content">






    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script>
    $(document).ready(function() {
        $("[data-fancybox]").fancybox();
    });
</script>