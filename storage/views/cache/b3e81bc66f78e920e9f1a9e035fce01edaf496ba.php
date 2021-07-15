
<?php $__env->startSection('title','bệnh danh'); ?>

<?php $__env->startSection('content'); ?>
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Bệnh danh:</p>
                <?php if(isset($benhdanh)): ?>
                    <?php $__currentLoopData = $benhdanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a data-id="<?php echo e($bd->MaBD); ?>" data-type="benh-danh" class="nav-link <?php if($key==0): ?> active <?php endif; ?>"
                            id="<?php echo e($key); ?>" data-toggle="pill" href="#tab<?php echo e($bd->MaBD); ?>" role="tab" aria-selected="true">
                            <?php echo e($bd->TenBD); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                <?php if(isset($benhdanh)): ?>
                    <?php $__currentLoopData = $benhdanh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php if($key==0): ?>  show active <?php endif; ?>" id="tab<?php echo e($bd->MaBD); ?>" role="tabpanel"
                            aria-labelledby="<?php echo e($bd->MaBD); ?>">
                            <p class="title"><?php echo e($bd->TenBD); ?></p>
                            <p>Nguyên Nhân:</p>
                            <?php echo e($bd->NguyenNhan); ?>

                            <br />
                            <br />
                            <p>Thể Bệnh:</p>
                            <?php echo e($bd->TheBenh); ?>

                            <br />
                            <br />
                            <p>Pháp:</p>
                            <?php echo e($bd->Phap); ?>

                            <br />
                            <br />
                            <p>Phương Thang:</p>
                            <a href="phuong-thang/<?php echo e($bd->MaPT); ?>"><?php echo e($bd->TenPT); ?></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/benhdanh/index.blade.php ENDPATH**/ ?>