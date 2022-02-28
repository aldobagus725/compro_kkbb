<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= base_url('admin') ?>" class="brand-link">
        <img src="<?= base_url('assets/img/gpib_new.png') ?>" alt="kkbb" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-bold">Kasih Karunia</span>
    </a>
    <div class="sidebar sidebar-fixed ">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img src="<?= base_url('assets/adminlte/dist/img/');?>avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url('admin') ?>" class="d-block">
                    <?= isset($_SESSION['admin']) ? $_SESSION['admin']->fullname . ' <br> Role : ' . $_SESSION['admin']->role : ''; ?>
                </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('admin') ?>" class="nav-link <?= (current_url() == base_url('admin/dashboard')) || (current_url() == base_url('admin')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-church"></i>
                        <p>DASHBOARD </p>
                    </a>
                </li>
                <?php
                $forms = array(
                    base_url("admin/baptisan"),
                    base_url("admin/pernikahan"),
                    base_url("admin/katekisasi"),
                    base_url('admin/jemaat_baru'),
                );
                ?>
                <li class="nav-item <?php if (in_array(current_url(), $forms)) echo "menu-open"; ?>">
                    <a href="#" class="nav-link <?php if (in_array(current_url(), $forms)) echo "active"; ?>">
                        <i class="nav-icon fas fas fa-file-alt"></i>
                        <p>FORM DAFTAR<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- <?php if ($_SESSION['admin']->role != 'admin') : ?>
                        <?php endif; ?> -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/daftar_gereja') ?>" class="nav-link <?= (current_url() == base_url('admin/baptisan')) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>Baptisan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/baptisan') ?>" class="nav-link <?= (current_url() == base_url('admin/baptisan')) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>Baptisan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("admin/pernikahan") ?>" class="nav-link <?= (current_url() == base_url('base_url("admin/pernikahan")')) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tasks"></i>
                                <p>Pernikahan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("admin/katekisasi") ?>" class="nav-link <?= (current_url() == base_url('admin/katekisasi')) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Katekisasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url("admin/jemaat_baru") ?>" class="nav-link <?= (current_url() == base_url('admin/jemaat_baru')) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>Daftar Jemaat Baru</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/presbiter") ?>" class="nav-link <?= (current_url() == base_url('admin/presbiter')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>PRESBITER SEKTOR</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/pelkat") ?>" class="nav-link <?= (current_url() == base_url('admin/pelkat')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>PELAYANAN KATEGORIAL</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/komisi") ?>" class="nav-link <?= (current_url() == base_url('admin/komisi')) ? 'active' : '' ?>">
                        <i class="nav-icon 	fas fa-user-tie"></i>
                        <p>KOMISI</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/kmj") ?>" class="nav-link <?= (current_url() == base_url('admin/kmj')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>HISTORY KMJ</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/pages") ?>" class="nav-link <?= (current_url() == base_url('admin/pages')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>PAGES</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/banner") ?>" class="nav-link <?= (current_url() == base_url('admin/banner')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-images"></i>
                        <p>HEROES (BANNER UTAMA)</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url("admin/banner") ?>" class="nav-link <?= (current_url() == base_url('admin/banner')) ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-images"></i>
                        <p>BANNER</p>
                    </a>
                </li>
                <!-- ========== SETTINGS ========== -->
                <?php
                // Links for users
                $settings = array(
                    base_url("admin/settings"),
                    base_url('admin/admins'), 
                    base_url("admin/logs"),
                    base_url("admin/role"),
                );
                ?>
                <li class="nav-item 
                <?php if (in_array(current_url(), $settings)) {
                    echo "menu-open";
                } ?>">
                    <a href="#" class="nav-link 
                    <?php if (in_array(current_url(), $settings)) {
                        echo "active";
                    } ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>SETTINGS<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- MENUS -->
                        <?php if ($_SESSION['admin']->role == "superadmin") { ?>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/admins') ?>" class="nav-link <?= (current_url() == base_url('admin/admins')) ? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-user-cog"></i>
                                    <p>Admins</p>
                                </a>
                            </li>
                        <?php } else {} ?>
                        <?php if ($_SESSION['admin']->role == "superadmin") { ?>
                            <li class="nav-item">
                                <a href="<?= base_url("admin/role") ?>" class="nav-link <?= (current_url() == base_url('admin/role')) ? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-id-card-alt"></i>
                                    <p>Roles</p>
                                </a>
                            </li>
                        <?php } else {} ?>
                        <li class="nav-item">
                            <a href="<?= base_url("admin/settings") ?>" class="nav-link <?= (current_url() == base_url('admin/settings')) ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>System Settings</p>
                            </a>
                        </li>
                        <?php if ($_SESSION['admin']->role == "superadmin") { ?>
                            <li class="nav-item">
                                <a href="<?= base_url("admin/logs") ?>" class="nav-link <?= (current_url() == base_url('admin/logs')) ? 'active' : '' ?>">
                                    <i class="nav-icon fas fa-eye"></i>
                                    <p>System Logs</p>
                                </a>
                            </li>
                        <?php } else {} ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- Main Content -->
<div class="content-wrapper">