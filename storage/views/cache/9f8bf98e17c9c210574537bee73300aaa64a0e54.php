
<?php $__env->startSection('title','Thuật ngữ'); ?>
<?php $__env->startSection('content'); ?>
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Thuật Ngữ khác:</p>
                <?php if(isset($thuatngu)): ?>
                    <?php $__currentLoopData = $thuatngu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a data-id="<?php echo e($tn->MaTN); ?>" data-type="thuat-ngu-khac" class="nav-link <?php if($key==0): ?> active <?php endif; ?>"
                            id="<?php echo e($key); ?>" data-toggle="pill" href="#tab<?php echo e($tn->MaTN); ?>" role="tab" aria-selected="true">
                            <?php echo e($tn->TenTN); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                <?php if(isset($thuatngu)): ?>
                    <?php $__currentLoopData = $thuatngu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php if($key==0): ?>  show active <?php endif; ?>" id="tab<?php echo e($tn->MaTN); ?>" role="tabpanel"
                            aria-labelledby="<?php echo e($tn->MaTN); ?>">
                            <p class="title"><?php echo e($tn->TenTN); ?></p>
                            <?php echo e($tn->NoiDung); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/thuatngu/index.blade.php ENDPATH**/ ?>