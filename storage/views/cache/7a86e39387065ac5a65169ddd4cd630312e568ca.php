
<?php $__env->startSection('title','tìm kiếm nâng cao'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-4 h-100">
            <div class="col-md-6 m-auto ">
                <h5>Tìm Kiếm Nâng Cao:</h5>
                <form action="/search/filter" method="post" id="formSearch">
                    <div class="form-group">
                        <label for="">Loại Thuật Ngữ</label>
                        <select class="form-control col-md-4 selectOption" name="LoaiTN" id="">
                            <option value="benh-danh">Bệnh Danh</option>
                            <option value="vi-thuoc">Vị Thuốc</option>
                            <option value="phuong-thang">Phương Thang</option>
                            <option value="thuat-ngu-khac">Thuật Ngữ Khác</option>
                        </select>
                    </div>
                    <div class="fieldTN">
                        <div class="form-group">
                            <label for="">Tên bệnh danh</label>
                            <input type="text" name="TenBD" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Nguyên Nhân</label>
                            <input type="text" name="NguyenNhan" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Thể Bệnh</label>
                            <input type="text" name="TheBenh" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Pháp</label>
                            <input type="text" name="Phap" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Phương Thang</label>
                            <input type="text" name="PhuongThang" class="form-control" placeholder="">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary empty" data-dismiss="modal">Đặt Lại</button>
                    <button type="submit" class="btn btn-primary">Tìm Kiếm</button>

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\resources\views/search/index.blade.php ENDPATH**/ ?>