
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Thuật Ngữ</div>
            <div class="card-body">
                <a class="btn btn-success mb-3" href="/admin/add-benhdanh">Add</a>
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
                                <th>Tên Bệnh Danh</th>
                                <th>Nguyên Nhân</th>
                                <th>Thể Bệnh</th>
                                <th>Pháp</th>
                                <th>Phương Thăng</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $benhdanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($b->MaBD); ?></td>
                                    <td><?php echo e($b->TenBD); ?></td>
                                    <td><?php echo e($b->NguyenNhan); ?></td>
                                    <td><?php echo e($b->TheBenh); ?></td>
                                    <td><?php echo e($b->Phap); ?></td>
                                    <td><?php echo e($b->TenPT); ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/edit-benhdanh/<?php echo e($b->MaBD); ?>">Edit</a>
                                        <a class="btn btn-dark" href="/admin/delete-benhdanh/<?php echo e($b->MaBD); ?>">Delete</a>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doan_2021\resources\views/admin/benhdanh/index.blade.php ENDPATH**/ ?>