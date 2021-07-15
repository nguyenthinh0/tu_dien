@extends('layouts.master')
@section('content')
    @php
    if (!$user->Quyen) {
        header('Location: /admin/login');
    }
    @endphp
    <div class="card">
        <div class="card-header">Edit Quản Trị Viên</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/update-user/{{ $qtv->MaQTV }}" method="post">
                <div class="form-group">
                    <label for="">Tên Quản Trị Viên</label>
                    <input type="text" name="TenQTV" value="{{ $qtv->TenQTV }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="title">Quyền</label>
                    <select name="Quyen" class="form-control" id="exampleFormControlSelect1">
                        <option selected="@if ($qtv->Quyen == 1) selected @endif" value="1">Biên Tập Viên</option>
                        <option selected="@if ($qtv->Quyen == 0) selected @endif" value="0">Quản Trị Viên</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" value="{{ $qtv->username }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Ngày Sinh</label>
                    <input type="text" id="datepicker" name="NgaySinh" value="{{ $qtv->NgaySinh }}" width="276" />
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4'
                        });

                    </script>
                </div>
                <div class="form-group">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" name="SDT" value="{{ $qtv->SDT }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="Email" value="{{ $qtv->Email }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Địa Chỉ</label>
                    <input type="text" name="DiaChi" value="{{ $qtv->DiaChi }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <textarea name="GhiChu" id="editor">
                                        {!! $qtv->GhiChu !!}
                                    </textarea>
                </div>

                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
