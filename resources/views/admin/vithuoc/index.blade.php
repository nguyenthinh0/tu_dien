@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Thuật Ngữ</div>
            <div class="card-body">
                <a class="btn btn-success mb-3" href="/admin/add-vithuoc">Add</a>
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
                                <th>Tên vị thuốc</th>
                                <th>Tính Vị</th>
                                <th>Quy Kinh</th>
                                <th>Tác Dụng</th>
                                <th>Ứng dụng</th>
                                <th>Lieu lượng</th>
                                <th>Kiêng Kị</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vithuoc as $v)
                                <tr>
                                    <td>{{ $v->MaVT }}</td>
                                    <td>{{ $v->TenVT }}</td>
                                    <td>
                                        @foreach ($tinhvi as $tv)
                                             @if ($tv->MaTV===$v->TinhVi)
                                             {{ $tv->TenTV  }}
                                             @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($quykinh as $qk)
                                             @if ($qk->MaQK===$v->QuyKinh)
                                             {{ $qk->TenQK  }}
                                             @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $v->TacDung }}</td>
                                    
                                    <td>{{ $v->UngDung }}</td>
                                    <td>{{ $v->LieuLuong }}</td>
                                    <td>{{ $v->KiengKi }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/edit-vithuoc/{{ $v->MaVT }}">Edit</a>
                                        <a class="btn btn-dark" href="/admin/delete-vithuoc/{{ $v->MaVT }}">Delete</a>
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
