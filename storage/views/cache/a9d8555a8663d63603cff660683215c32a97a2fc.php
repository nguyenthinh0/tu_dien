
<?php $__env->startSection('content'); ?>
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
                                <th>Chất Lượng Thuật Ngữ</th>
                                <th>Mức Độ Sử Dụng</th>
                                <th>Tốc Độ Tải Trang</th>
                                <th>Giao Diện</th>
                                <th>ThờI Gian Vận Hành</th>
                                <th>Bố Cục Trình Bày</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $danhgia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($fb->MaDG); ?></td>
                                    <td><?php echo e($fb->ChatLuongTN); ?></td>
                                    <td><?php echo e($fb->MucDoSD); ?></td>
                                    <td><?php echo e($fb->TocDoTT); ?></td>
                                    <td><?php echo e($fb->GiaoDien); ?></td>
                                    <td><?php echo e($fb->ThoiGianVH); ?></td>
                                    <td><?php echo e($fb->BoCucTB); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doan_2021\resources\views/admin/rate/index.blade.php ENDPATH**/ ?>