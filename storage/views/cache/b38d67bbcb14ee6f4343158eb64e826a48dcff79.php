
<?php $__env->startSection('title','Đánh giá chất lượng'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-4 h-100">
            <div class="col-md-12 m-auto ">
                <h5>Đánh giá chất lượng</h5>
                <form action="rate/submit" method="post">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Kém</th>
                                <th>Chưa hài lòng</th>
                                <th>Hài lòng</th>
                                <th>Tốt</th>
                                <th>Rất hài lòng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="text-right">Thuật ngữ:</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">Chất lượng thuật ngữ:</td>
                                <td>
                                    <input type="radio" name="CLTN" value="Kém">
                                </td>
                                <td>
                                    <input type="radio" name="CLTN" value="Chưa hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="CLTN" value="Hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="CLTN" value="Tốt">
                                </td>
                                <td>
                                    <input type="radio" name="CLTN" value="Rất hài lòng">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">Mức độ sử dụng:</td>
                                <td>
                                    <input type="radio" name="MDSD" value="Kém">
                                </td>
                                <td>
                                    <input type="radio" name="MDSD" value="Chưa hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="MDSD" value="Hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="MDSD" value="Tốt">
                                </td>
                                <td>
                                    <input type="radio" name="MDSD" value="Rất hài lòng">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">Website:</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">Tốc độ tải trang:</td>
                                <td>
                                    <input type="radio" name="TDTT" value="Kém">
                                </td>
                                <td>
                                    <input type="radio" name="TDTT" value="Chưa hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="TDTT" value="Hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="TDTT" value="Tốt">
                                </td>
                                <td>
                                    <input type="radio" name="TDTT" value="Rất hài lòng">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">Giao diện:</td>
                                <td>
                                    <input type="radio" name="GD" value="Kém">
                                </td>
                                <td>
                                    <input type="radio" name="GD" value="Chưa hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="GD" value="Hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="GD" value="Tốt">
                                </td>
                                <td>
                                    <input type="radio" name="GD" value="Rất hài lòng">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">Khác:</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">ThờI gian vận hành:</td>
                                <td>
                                    <input type="radio" name="TGVH" value="Kém">
                                </td>
                                <td>
                                    <input type="radio" name="TGVH" value="Chưa hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="TGVH" value="Hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="TGVH" value="Tốt">
                                </td>
                                <td>
                                    <input type="radio" name="TGVH" value="Rất hài lòng">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-right">Bố cục trình bày:</td>
                                <td>
                                    <input type="radio" name="BCTB" value="Kém">
                                </td>
                                <td>
                                    <input type="radio" name="BCTB" value="Chưa hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="BCTB" value="Hài lòng">
                                </td>
                                <td>
                                    <input type="radio" name="BCTB" value="Tốt">
                                </td>
                                <td>
                                    <input type="radio" name="BCTB" value="Rất hài lòng">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="buton text-center">
                        <button type="submit" class="btn btn-success">Gửi đánh giá</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doan_2021\resources\views/rate/index.blade.php ENDPATH**/ ?>