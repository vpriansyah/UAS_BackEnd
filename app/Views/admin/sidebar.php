<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('Home'); ?>" class="brand-link">
        <img src="<?php echo base_url(); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Hotel Carmila</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url('Home/detailUser') . "/" .user()->id; ?>" class="d-block"><?php echo user()->username; ?></a>
                <!-- <?php //echo user()->username; ?> -->
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('Home'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php if (in_groups('admin')) : ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Home'); ?>/kelolaUser" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Kelola User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Home'); ?>/kelolakamar" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Kelola Kamar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Home'); ?>/pesankamar" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Pesan Kamar
                        </p>
                    </a>
                </li>
                <?php elseif (in_groups('user')) : ?>
                <li class="nav-item">
                    <a href="<?php echo base_url('Home'); ?>/kelolakamar" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Daftar Kamar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('Home'); ?>/pesankamar" class="nav-link">
                        <i class="nav-icon fas fa-bed"></i>
                        <p>
                            Pesan Kamar
                        </p>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>