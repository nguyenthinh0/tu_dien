@extends('layouts.master')
@section('content')
    @php
    if (!$user->Quyen) {
        header('Location: /admin/login');
    }
    @endphp
    <div class="card">
        <div class="card-header">Add Quản Trị Viên</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/save-user" method="post">
                <div class="form-group">
                    <label for="">Tên Quản Trị Viên</label>
                    <input type="text" name="TenQTV" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="title">Quyền</label>
                    <select name="Quyen" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Biên Tập Viên</option>
                        <option value="0">Quản Trị Viên</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Ngày Sinh</label>
                    <input type="text" id="datepicker" name="NgaySinh" width="276" />
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4'
                        });

                    </script>
                </div>
                <div class="form-group">
                    <label for="">Số Điện Thoại</label>
                    <input type="text" name="SDT" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="Email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Địa Chỉ</label>
                    <input type="text" name="DiaChi" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Ghi Chú</label>
                    <textarea name="GhiChu" id="editor"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
