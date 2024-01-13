 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">


         <!-- Left navbar links -->
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
             </li>
         </ul>

         <!-- Right navbar links -->

         <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown no-arrow">
                 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                     <!-- <img class="img-profile rounded-circle" src=""> -->
                 </a>


                 <!-- Dropdown user information -->

                 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDrwopdown">
                     <a class="dropdown-item" href="<?= base_url('user'); ?>">
                         <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                         Profile
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                         <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                         logout
                     </a>
             </li>
         </ul>
     </ul>
 </nav>

 <!-- pop up logout -->
 <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?
                 </h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Open">
                     <span aria-hidden="true">x</span>
                 </button>
             </div>
             <div class="modal-body">Select "logout" below if u are ready to end ur current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>
 <!-- pop up logout -->