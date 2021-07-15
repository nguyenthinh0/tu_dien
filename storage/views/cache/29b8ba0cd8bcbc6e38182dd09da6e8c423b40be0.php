
<?php $__env->startSection('content'); ?>
    <?php
    if (!$user->Quyen) {
        header('Location: /admin/login');
    }
    ?>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Quản Trị Viên</div>
            <div class="card-body">
                <a class="btn btn-success mb-3" href="/admin/add-user">Add</a>
                <?php
                    if (isset($_SESSION['success'])) {
                        if ($_SESSION['success'] == 'add') {
                            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                                                                        <strong>Bạn đã thêm thành công</strong>
                                                                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>';
                            unset($_SESSION['success']);
                        } elseif ($_SESSION['success'] == 'edit') {
                            echo ' <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                                                                                        <strong>Bạn đã sửa thành công</strong>
                                                                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>';
                            unset($_SESSION['success']);
                        } elseif ($_SESSION['success'] == 'delete') {
                            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                                                                        <strong>Bạn đã xóa thành công</strong>
                                                                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>';
                            unset($_SESSION['success']);
                        }
                    }
                ?>
                <div class="table table-responsive table-bordered table-hover">
                    <table>
                        <thead>
                            <tr>
                            <tr>
                                <th>#</th>
                                <th>Tên Quản Trị Viên</th>
                                <th>Quyền</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Ngày Sinh</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>DiaChi</th>
                                <th>GhiChu</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $qtv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($t->MaQTV); ?></td>
                                    <td><?php echo e($t->TenQTV); ?></td>
                                    <td>
                                        <?php if($t->Quyen == 0): ?>
                                            Quản Trị Viên
                                        <?php else: ?>
                                            Biên Tập Viên
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($t->username); ?></td>
                                    <td><?php echo e($t->NgaySinh); ?></td>
                                    <td><?php echo e($t->SDT); ?></td>
                                    <td><?php echo e($t->Email); ?></td>
                                    <td><?php echo e($t->DiaChi); ?></td>
                                    <td><?php echo $t->GhiChu; ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/edit-user/<?php echo e($t->MaQTV); ?>">Edit</a>
                                        <a class="btn btn-dark" href="/admin/delete-user/<?php echo e($t->MaQTV); ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doan_2021\resources\views/admin/users/index.blade.php ENDPATH**/ ?>