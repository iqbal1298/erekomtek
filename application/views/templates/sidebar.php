<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <div class="brand ml-4">
            <div class="logo" style="padding-top:10px !important;padding-bottom:10px !important;">
                <img src="<?= base_url('assetsfront/img/img/'); ?>logos.png">
            </div>
        </div>
    </a>
    <div class="sidebar">

        <!-- Sidebar user (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
        <!-- <div class="image"> -->
        <!-- <img src="<?= base_url('img/'); ?>logo.png" class="img-circle elevation-2" alt="User Image"> -->
        <!-- </div> -->
        <!-- <div class="info"> -->
        <!-- <a href="#" class="d-block">User</a> -->
        <!-- </div> -->
        <!-- </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <!-- QUERY MENU -->
                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                            ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
                $menu = $this->db->query($queryMenu)->result_array();

                ?>


                <!-- LOOPING MENU -->
                <?php foreach ($menu as $m) : ?>

                    <li class="nav-header"><?= $m['menu'] ?></li>

                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                             FROM `user_sub_menu` JOIN `user_menu`
                             ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                             WHERE `user_sub_menu`.`menu_id` = $menuId
                            AND `user_sub_menu`.`is_active` = 1
                            ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="nav-item active">
                            <?php else : ?>
                            <li class="nav-item">
                            <?php endif; ?>
                            <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                <i class="<?= $sm['icon']; ?>"></i>
                                <span><?= $sm['title']; ?></span>
                            </a>
                            </li>
                            </li>


                        <?php endforeach; ?>



                    <?php endforeach; ?>
                    <?php if ($this->session->userdata('role_id') == 1) : ?>
                        <li class="nav-item">
                            <a href="<?= base_url('rekomtek/permohonanmasuk'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Report
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                            <!-- <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('rekomtek/permohonanmasuk'); ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Master Data Pemohon</p>
                                    </a>
                                </li> -->
                        <?php endif; ?>
                        <!-- <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Rekomtek Keluar</p>
                                </a>
                            </li> -->

            </ul>
            </li>

            <!-- <li class="nav-item">
                        <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>