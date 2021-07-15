@extends('layouts.master')
@section('content')
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
                                <th>Chất Lượng Thuật Ngữ</th>
                                <th>Mức Độ Sử Dụng</th>
                                <th>Tốc Độ Tải Trang</th>
                                <th>Giao Diện</th>
                                <th>ThờI Gian Vận Hành</th>
                                <th>Bố Cục Trình Bày</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($danhgia as $fb)
                                <tr>
                                    <td>{{ $fb->MaDG }}</td>
                                    <td>{{ $fb->ChatLuongTN }}</td>
                                    <td>{{ $fb->MucDoSD }}</td>
                                    <td>{{ $fb->TocDoTT }}</td>
                                    <td>{{ $fb->GiaoDien }}</td>
                                    <td>{{ $fb->ThoiGianVH }}</td>
                                    <td>{{ $fb->BoCucTB }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
