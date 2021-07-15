
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Thuật Ngữ</div>
            <div class="card-body">
                <a class="btn btn-success mb-3" href="/admin/add-vithuoc">Add</a>
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
                                <th>Tên vị thuốc</th>
                                <th>Tính Vị</th>
                                <th>Quy Kinh</th>
                                <th>Tác Dụng</th>
                                <th>Ứng dụng</th>
                                <th>Lieu lượng</th>
                                <th>Kiêng Kị</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $vithuoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($v->MaVT); ?></td>
                                    <td><?php echo e($v->TenVT); ?></td>
                                    <td>
                                        <?php $__currentLoopData = $tinhvi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php if($tv->MaTV===$v->TinhVi): ?>
                                             <?php echo e($tv->TenTV); ?>

                                             <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td>
                                        <?php $__currentLoopData = $quykinh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php if($qk->MaQK===$v->QuyKinh): ?>
                                             <?php echo e($qk->TenQK); ?>

                                             <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><?php echo e($v->TacDung); ?></td>
                                    
                                    <td><?php echo e($v->UngDung); ?></td>
                                    <td><?php echo e($v->LieuLuong); ?></td>
                                    <td><?php echo e($v->KiengKi); ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/edit-vithuoc/<?php echo e($v->MaVT); ?>">Edit</a>
                                        <a class="btn btn-dark" href="/admin/delete-vithuoc/<?php echo e($v->MaVT); ?>">Delete</a>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doan_2021\resources\views/admin/vithuoc/index.blade.php ENDPATH**/ ?>