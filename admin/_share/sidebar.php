<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
        <img src="<?= ADMIN_ASSET_URL ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HOTEL KINGCLUB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= DEFAULT_IMAGE ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION[AUTH]['name'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= ADMIN_URL . 'dashboard' ?>" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Quản lý tài khoản
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'users' ?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'users/add-form.php' ?>" class="nav-link">
                                <i class="fa fa-user-plus nav-icon"></i>
                                <p>Thêm tài khoản</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                        <p>
                            Phòng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'rooms' ?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'rooms/add-form.php' ?>" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm Phòng</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-images"></i>
                        <p>
                            Ảnh Phòng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'room_galleries' ?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'room_galleries/add-form.php' ?>" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'contacts' ?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fab fa-internet-explorer"></i>
                        <p>
                            Web Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'web_settings' ?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'web_settings/add-form.php' ?>" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fas fa-money-check-alt nav-icon"></i>
                        <p>
                            Đặt Phòng
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'booking' ?>" class="nav-link">
                            <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Đánh Giá
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'feedback' ?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Tin Tức
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'news' ?>" class="nav-link">
                                <i class="fa fa-list-ol nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= ADMIN_URL . 'news/add-form.php' ?>" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Thêm</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?= BASE_URL . 'login/logout.php' ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>