@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Add Phương Thang</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/save-phuongthang" method="post">
                <div class="form-group">
                    <label for="">Tên Phương Thang</label>
                    <input type="text" name="TenPT" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Phương Pháp Bào Chế</label>
                   <select name="MaBaoChe" class="form-control" id="">
                        <option value="0">---- Chọn Phương Pháp Bào Chế----</option>
                        @foreach ($baoche as $b)
                        <option value="{{ $b->MaBaoChe }}">{{ $b->PPBC }}</option>
                        @endforeach
                   </select>
                </div>
                <div class="form-group">
                    <label for="">Tác Dụng</label>
                    <input type="text" name="TacDung" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Liều Lượng</label>
                    <input type="text" name="LieuLuong" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Kiêng Kị</label>
                    <input type="text" name="KiengKi" class="form-control" placeholder="">
                </div>
                
                
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
