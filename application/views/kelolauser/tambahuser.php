<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1><?= $title; ?></h1> -->
                </div>
            </div>
        </div>
    </section>



    <!-- Main content -->
    <section class="content">

        <form class="user" action="<?php echo base_url() . 'kelolauser/aksitambah'; ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" id="username" name="username" class="form-control" value="<?= set_value('username'); ?>">
                <?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="password1" name="password1" class="form-control">
                <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Ulangi Password </label>
                <input type="password" id="password2" name="password2" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" id="name" name="name" class="form-control" value="<?= set_value('name'); ?>">
                <?= form_error('name', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" name="email" class="form-control" value="<?= set_value('email'); ?>">
                <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= set_value('no_hp'); ?>">
                <?= form_error('no_hp', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" id="role_id" name="role_id" class="form-control" value="<?= set_value('role_id'); ?>">
                <?= form_error('role_id', ' <small class="text-danger">', '</small>'); ?>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="reset" class="btn btn-danger">reset</button>
        </form>

    </section>
</div>