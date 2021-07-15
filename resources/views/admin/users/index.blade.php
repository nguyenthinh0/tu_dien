@extends('layouts.master')
@section('content')
    @php
    if (!$user->Quyen) {
        header('Location: /admin/login');
    }
    @endphp

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Quản Trị Viên</div>
            <div class="card-body">
                <a class="btn btn-success mb-3" href="/admin/add-user">Add</a>
                @php
                    if (isset($_SESSION['success'])) {
                        if ($_SESSION['success'] == 'add') {
                            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                                                                        <strong>Bạn đã thêm thành công</strong>
                                                                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>';
                            unset($_SESSION['success']);
                        } elseif ($_SESSION['success'] == 'edit') {
                            echo ' <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                                                                                        <strong>Bạn đã sửa thành công</strong>
                                                                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>';
                            unset($_SESSION['success']);
                        } elseif ($_SESSION['success'] == 'delete') {
                            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                                                                        <strong>Bạn đã xóa thành công</strong>
                                                                                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                                                            <span aria-hidden="true">&times;</span>
                                                                                                                        </button>
                                                                                                                    </div>';
                            unset($_SESSION['success']);
                        }
                    }
                @endphp
                <div class="table table-responsive table-bordered table-hover">
                    <table>
                        <thead>
                            <tr>
                            <tr>
                                <th>#</th>
                                <th>Tên Quản Trị Viên</th>
                                <th>Quyền</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Ngày Sinh</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>DiaChi</th>
                                <th>GhiChu</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($qtv as $t)
                                <tr>
                                    <td>{{ $t->MaQTV }}</td>
                                    <td>{{ $t->TenQTV }}</td>
                                    <td>
                                        @if ($t->Quyen == 0)
                                            Quản Trị Viên
                                        @else
                                            Biên Tập Viên
                                        @endif
                                    </td>
                                    <td>{{ $t->username }}</td>
                                    <td>{{ $t->NgaySinh }}</td>
                                    <td>{{ $t->SDT }}</td>
                                    <td>{{ $t->Email }}</td>
                                    <td>{{ $t->DiaChi }}</td>
                                    <td>{!! $t->GhiChu !!}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/edit-user/{{ $t->MaQTV }}">Edit</a>
                                        <a class="btn btn-dark" href="/admin/delete-user/{{ $t->MaQTV }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
