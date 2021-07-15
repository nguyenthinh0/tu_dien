@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Edit Vị thuốc</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/update-vithuoc/{{ $vithuoc->MaVT }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Vị Thuốc</label>
                    <input type="text" name="TenVT" value="{{ $vithuoc->TenVT }}" class="form-control" placeholder="">
                </div>
                <img style="height: 10em; width: 10em" src="{{ BASE_URL . $vithuoc->HinhVT }}" />
                <br />
                <br />
                <label class="formLabel" for="Avatar">Chosse
                </label>
                <input type="file" id="Avatar" name="imgupload">
                <div class="form-group">
                    <label for="">Tính Vị</label>
                    <select name="TinhVi" class="form-control" id="">
                        @foreach ($tinhvi as $tv)
                            @if ($vithuoc->TinhVi == $tv->MaTV)
                                <option value="{{ $tv->MaTV }}" selected>{{ $tv->TenTV }}</option>
                            @else
                                <option value="{{ $tv->MaTV }}">{{ $tv->TenTV }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Quy Kinh</label>
                    <select class="form-control" name="QuyKinh" id="">
                        <option value="0">--- Chọn Quy Kinh ----</option>
                        @foreach ($quykinh as $qk)
                            @if ($qk->MaQK == $vithuoc->QuyKinh)
                                <option value="{{ $qk->MaQK }}" selected>{{ $qk->TenQK }}</option>
                            @else
                                <option value="{{ $qk->MaQK }}">{{ $qk->TenQK }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tác Dụng</label>
                    <input type="text" name="TacDung" value="{{ $vithuoc->TacDung }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Ứng Dụng</label>
                    <input type="text" name="UngDung" value="{{ $vithuoc->UngDung }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Liều Lượng</label>
                    <input type="text" name="LieuLuong" value="{{ $vithuoc->LieuLuong }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Kiêng Kị</label>
                    <input type="text" name="KiengKi" value="{{ $vithuoc->KiengKi }}" class="form-control"
                        placeholder="">
                </div>
                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
