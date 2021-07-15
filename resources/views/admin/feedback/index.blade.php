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
                                <th>Tên Người Góp Ý</th>
                                <th>Tên Thuật Ngữ</th>
                                <th>Loại Thuật Ngữ</th>
                                <th>Nội Dung Góp Ý</th>
                                <th>Người Sửa</th>
                                <th>Trạng Thái</th>
                                <th>Action</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedback as $fb)
                                <tr>
                                    <td>{{ $fb->MaGY }}</td>
                                    <td>{{ $fb->DoiTuongGY }}</td>
                                    <td>{{ $fb->TenTN }}</td>
                                    <td>{{ $fb->LoaiTN }}</td>
                                    <td>{!! $fb->NoiDungGY !!}</td>
                                    <td>
                                        @if (isset($qtv))
                                            @foreach ($qtv as $qt)
                                                @if ($qt->MaQTV === $fb->MaQTV)
                                                    {{ $qt->TenQTV }}
                                                @endif
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                    @if ($fb->TrangThai)Hoàn Thành @else Chưa Hoàn
                                            Thành @endif
                                    </td>
                                    @php
                                        $str = $fb->LoaiTN;
                                        
                                        $unicode = [
                                            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
                                        
                                            'd' => 'đ',
                                        
                                            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
                                        
                                            'i' => 'í|ì|ỉ|ĩ|ị',
                                        
                                            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
                                        
                                            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
                                        
                                            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
                                        
                                            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
                                        
                                            'D' => 'Đ',
                                        
                                            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
                                        
                                            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
                                        
                                            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
                                        
                                            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
                                        
                                            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
                                        ];
                                        
                                        foreach ($unicode as $nonUnicode => $uni) {
                                            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
                                        }
                                        
                                        $str = strtolower($str);
                                        
                                        $str = str_replace(' ', '', $str);
                                        
                                        $status = null;
                                        
                                        if ($fb->TrangThai) {
                                            $status = 'Hoàn Thành';
                                        } else {
                                            $status = 'Chưa Hoàn Thành';
                                        }
                                        
                                        echo '
                                        
                                                                            <td>
                                                                                <a class="btn btn-primary" href="/admin/edit-' .
                                            $str .
                                            '/' .
                                            $fb->MaTN .
                                            '">Sửa Thuật Ngữ</a>
                                                                                <button class="btn btn-dark status" data-status="' .
                                            $fb->TrangThai .
                                            '" data-id="' .
                                            $fb->MaGY .
                                            '">
                                                                                    ' .
                                            $status .
                                            '
                                                                                </button>
                                                                            </td>
                                                                            ';
                                    @endphp
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
