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
    <section class="content">
        <?php foreach ($users as $usr) { ?>

            <form action="<?php echo base_url() . 'kelolauser/update'; ?>" method="post">

                <div class="form-group">
                    <label>Username</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">
                    <input type="text" name="username" class="form-control" value="<?php echo $usr->username ?>">
                    <?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password1" class="form-control" value="">
                    <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label>Ulangi Password </label>
                    <input type="password" id="password2" name="password2" class="form-control">
                    <?= form_error('password2', ' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $usr->name ?>">
                    <?= form_error('name', ' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $usr->email ?>">
                    <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $usr->no_hp ?>">
                    <?= form_error('no_hp', ' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role_id" class="form-control" value="<?php echo $usr->role_id ?>">
                    <?= form_error('role_id', ' <small class="text-danger">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">reset</button>

            </form>
        <?php } ?>
    </section>
</div>