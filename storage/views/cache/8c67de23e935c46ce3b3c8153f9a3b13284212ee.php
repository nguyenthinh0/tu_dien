
<?php $__env->startSection('title','Phương thang'); ?>
<?php $__env->startSection('content'); ?>
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Phương Thang:</p>
                <?php if(isset($phuongthang)): ?>
                    <?php $__currentLoopData = $phuongthang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a data-id="<?php echo e($pt->MaPT); ?>" data-type="phuong-thang" class="nav-link <?php if(isset($id)): ?> <?php if($id == $pt->MaPT): ?> active <?php endif; ?> <?php elseif($key==0): ?> active <?php endif; ?>" id="<?php echo e($key); ?>" data-toggle="pill"
                            href="#tab<?php echo e($pt->MaPT); ?>" role="tab" aria-selected="true">
                            <?php echo e($pt->TenPT); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                <?php if(isset($phuongthang)): ?>
                    <?php $__currentLoopData = $phuongthang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php if($key==0): ?> show active <?php endif; ?>" id="tab<?php echo e($pt->MaPT); ?>" role="tabpanel"
                            
                            aria-labelledby="<?php echo e($pt->MaPT); ?>">
                            <p class="title"><?php echo e($pt->TenPT); ?></p>
                            <p>Phương Pháp Bào Chế:</p>
                            <?php echo e($pt->PPBC); ?>

                            <br />
                            <br />
                            <p>Thành Phần:</p>
                            <?php
                                $tp = explode(",", $pt->TenTP);
                            ?>
                           
                                <table>
                                    <?php $__currentLoopData = $tp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td> <?php echo e(explode('-', $value)[0]); ?></td>
                                            <td> <?php echo e(explode('-', $value)[1]); ?></td>
                                           
                                        </tr>
                                    
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                           
                            <br />
                            <br />
                            <p>Tác Dụng:</p>
                            <?php echo e($pt->TacDung); ?>

                            <br />
                            <br />
                            <p>Liều Lượng:</p>
                            <?php echo e($pt->LieuLuong); ?>

                            <br />
                            <br />
                            <p>Kiêng Kị:</p>
                            <?php echo e($pt->KiengKi); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                
            </div>
        </div>
       
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doan_2021\resources\views/phuongthang/index.blade.php ENDPATH**/ ?>