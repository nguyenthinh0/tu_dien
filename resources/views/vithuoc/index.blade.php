@extends('layouts.index')
@section('title','Vị thuốc')
@section('content')
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Bệnh danh:</p>
                @if (isset($vithuoc))
                    @foreach ($vithuoc as $key => $vt)
                        <a data-id="{{ $vt->MaVT }}" data-type="vi-thuoc" class="nav-link @if ($key==0) active @endif" id="{{ $key }}" data-toggle="pill"
                            href="#tab{{ $vt->MaVT }}" role="tab" aria-selected="true">
                            {{ $vt->TenVT }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                @if (isset($vithuoc))
                    @foreach ($vithuoc as $key => $vt)
                        <div class="tab-pane fade @if ($key==0) show active @endif" id="tab{{ $vt->MaVT }}" role="tabpanel"
                            aria-labelledby="{{ $vt->MaVT }}">
                            <img src="{{ BASE_URL . $vt->HinhVT }}" alt="" srcset="">
                            <p class="title">{{ $vt->TenVT }}</p>
                            <p>Tính vị, quy kinh:</p>
                            Vị {{ $vt->TenTV }}, quy vào kinh {{ $vt->TenQK }}
                            <br />
                            <br />
                            <p>Tác Dụng:</p>
                            {{ $vt->TacDung }}
                            <br />
                            <br />
                            <p>Ứng Dụng:</p>
                            {{ $vt->UngDung }}
                            <br />
                            <br />
                            <p>Liều Lượng:</p>
                            {{ $vt->LieuLuong }}
                            <br />
                            <br />
                            <p>Kiêng Kị:</p>
                            {{ $vt->KiengKi }}
                            <br />
                            <br />
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
@endsection
