<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();

$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
$roleId = isset($_GET['role']) == true ? $_GET['role'] : false;

// Lấy danh sách web_st
$getWebsettingQuery = " select * from web_setting";
$websetting = queryExecute($getWebsettingQuery, true);
// tìm kiếm
if ($keyword !== "") {
    $getUsersQuery .= " where (u.email like '%$keyword%'
                            or u.phone_number like '%$keyword%'
                            or u.name like '%$keyword%')
                      ";
    if ($roleId !== false && $roleId !== "") {
        $getUsersQuery .= " and u.role_id = $roleId";
    }
} else {
    if ($roleId !== false && $roleId !== "") {
        $getUsersQuery .= " where u.role_id = $roleId";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once '../_share/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once '../_share/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Quản trị users</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= ADMIN_URL . 'dashboard'?>">Dashboard</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-10 col-offset-1">
                            <!-- Filter  -->
                            <form action="" method="get">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <input type="text" value="<?php echo $keyword ?>" class="form-control"
                                            name="keyword" placeholder="Nhập tên, ">
                                    </div>
                                    <div class="form-group col-4">
                                        <select name="role" class="form-control">
                                            <option selected value="">Tất cả</option>
                                            <?php foreach ($roles as $ro) : ?>
                                            <option <?php if ($roleId === $ro['id']) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $ro['id'] ?>"><?php echo $ro['name'] ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-2">
                                        <button type="submit" class="btn btn-success">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Danh sách users  -->
                        <table class="table table-stripped">
                            <thead>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Loại tài khoản</th>
                                <th>Số ĐT</th>
                                <th>
                                    <a href="<?= ADMIN_URL . 'web_settings/add-form.php' ?>" class="btn btn-primary btn-sm"><i
                                            class="fa fa-plus"></i> Thêm</a>
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach ($websetting as $web) : ?>
                                <tr>
                                    <td><?php echo $web['id'] ?></td>
                                    <td><?php echo $web['name'] ?></td>
                                    <td><?php echo $web['title_hotel'] ?></td>
                                    <td>
                                        <?php echo $web['logo'] ?>
                                    </td>
                                    <td><?php echo $web['small-logo'] ?></td>
                                    <td>
                                        <?php if ($web['role_id'] < $_SESSION[AUTH]['role_id'] || $web['id'] === $_SESSION[AUTH]['id']) : ?>
                                        <a href="<?php echo ADMIN_URL . 'users/edit-form.php?id=' . $web['id'] ?>"
                                            class="btn btn-sm btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <?php endif; ?>
                                        <?php if ($web['role_id'] < $_SESSION[AUTH]['role_id']) : ?>
                                        <a href="<?php echo ADMIN_URL . 'users/remove.php?id=' . $web['id'] ?>"
                                            class="btn-remove btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../_share/footer.php'; ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include_once '../_share/script.php'; ?>
    <script>
    $(document).ready(function() {
        $('.btn-remove').on('click', function() {
            var redirectUrl = $(this).attr('href');
            Swal.fire({
                title: 'Thông báo!',
                text: "Bạn có chắc chắn muốn xóa tài khoản này?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý'
            }).then((result) => { // arrow function es6 (es2015)
                if (result.value) {
                    window.location.href = redirectUrl;
                }
            });
            return false;
        });
        <?php
        if (isset($_GET['msg'])): ?>
            Swal.fire({
                position: 'bottom-end',
                icon: 'warning',
                title: "<?= $_GET['msg']; ?>",
                showConfirmButton: false,
                timer: 1500
            });
            <?php endif; ?>
    });
    </script>
</body>

</html>