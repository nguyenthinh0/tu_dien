@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Thuật Ngữ</div>
            <div class="card-body">
                <a class="btn btn-success mb-3" href="/admin/add-term">Add</a>
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
                                <th>Tên Thuật Ngữ</th>
                                <th> Nội Dung Thuật Ngữ</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($terms as $t)
                                <tr>
                                    <td>{{ $t->MaTN }}</td>
                                    <td>{{ $t->TenTN }}</td>
                                    <td>{!! $t->NoiDung !!}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/edit-thuatngukhac/{{ $t->MaTN }}">Edit</a>
                                        <a class="btn btn-dark" href="/admin/delete-term/{{ $t->MaTN }}">Delete</a>
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
