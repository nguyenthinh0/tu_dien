
<?php $__env->startSection('title','Vị thuốc'); ?>
<?php $__env->startSection('content'); ?>
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Bệnh danh:</p>
                <?php if(isset($vithuoc)): ?>
                    <?php $__currentLoopData = $vithuoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $vt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a data-id="<?php echo e($vt->MaVT); ?>" data-type="vi-thuoc" class="nav-link <?php if($key==0): ?> active <?php endif; ?>" id="<?php echo e($key); ?>" data-toggle="pill"
                            href="#tab<?php echo e($vt->MaVT); ?>" role="tab" aria-selected="true">
                            <?php echo e($vt->TenVT); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                <?php if(isset($vithuoc)): ?>
                    <?php $__currentLoopData = $vithuoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $vt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php if($key==0): ?> show active <?php endif; ?>" id="tab<?php echo e($vt->MaVT); ?>" role="tabpanel"
                            aria-labelledby="<?php echo e($vt->MaVT); ?>">
                            <img src="<?php echo e(BASE_URL . $vt->HinhVT); ?>" alt="" srcset="">
                            <p class="title"><?php echo e($vt->TenVT); ?></p>
                            <p>Tính vị, quy kinh:</p>
                            Vị <?php echo e($vt->TenTV); ?>, quy vào kinh <?php echo e($vt->TenQK); ?>

                            <br />
                            <br />
                            <p>Tác Dụng:</p>
                            <?php echo e($vt->TacDung); ?>

                            <br />
                            <br />
                            <p>Ứng Dụng:</p>
                            <?php echo e($vt->UngDung); ?>

                            <br />
                            <br />
                            <p>Liều Lượng:</p>
                            <?php echo e($vt->LieuLuong); ?>

                            <br />
                            <br />
                            <p>Kiêng Kị:</p>
                            <?php echo e($vt->KiengKi); ?>

                            <br />
                            <br />
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/vithuoc/index.blade.php ENDPATH**/ ?>