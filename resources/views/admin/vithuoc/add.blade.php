@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Add Vị thuốc</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/save-vithuoc" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Vị thuốc</label>
                    <input type="text" name="TenVT" class="form-control" placeholder="">
                </div>
                <div class="form-group ">
                    <label class="formLabel" for="Avatar">Chosse
                    </label>
                    <input type="file" id="Avatar" name="imgupload">
                </div>
                <div class="form-group">
                    <label for="">Tính Vị</label>
                    <select name="TinhVi" class="form-control" id="">
                        <option value="0">--- Chọn Tính Vị ----</option>
                        @foreach ($tinhvi as $tv)
                            <option value="{{ $tv->MaTV }}">{{ $tv->TenTV }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Quy Kinh</label>
                    <select name="QuyKinh" class="form-control" id="">
                        <option value="0">--- Chọn Quy Kinh ----</option>
                        @foreach ($quykinh as $qk)
                            <option value="{{ $qk->MaQK }}">{{ $qk->TenQK }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tác Dụng</label>
                    <input type="text" name="TacDung" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Ứng Dụng</label>
                    <input type="text" name="UngDung" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Liều Lượng</label>
                    <input type="text" name="LieuLuong" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Kiêng Kị</label>
                    <input type="text" name="KiengKi" class="form-control" placeholder="">
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
