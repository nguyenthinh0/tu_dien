
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Edit Phương Thang</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/update-phuongthang/<?php echo e($phuongthang->MaPT); ?>" method="post">
                <div class="form-group">
                    <label for="">Tên Phương Thang</label>
                    <input type="text" name="TenPT" value="<?php echo e($phuongthang->TenPT); ?>" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Phương Pháp Bào Chế</label>
                    <select name="MaBaoChe" class="form-control" id="">
                        <?php $__currentLoopData = $baoche; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($b->MaBaoChe === $phuongthang->MaBaoChe): ?>
                                <option value="<?php echo e($b->MaBaoChe); ?>" selected><?php echo e($b->PPBC); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($b->MaBaoChe); ?>"><?php echo e($b->PPBC); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tác Dụng</label>
                    <input type="text" name="TacDung" value="<?php echo e($phuongthang->TacDung); ?>" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Liều Lượng</label>
                    <input type="text" name="LieuLuong" value="<?php echo e($phuongthang->LieuLuong); ?>" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Kiêng Kị</label>
                    <input type="text" name="KiengKi" value="<?php echo e($phuongthang->KiengKi); ?>" class="form-control"
                        placeholder="">
                </div>


                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doan_2021\resources\views/admin/phuongthang/edit.blade.php ENDPATH**/ ?>