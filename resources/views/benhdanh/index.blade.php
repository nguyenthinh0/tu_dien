@extends('layouts.index')
@section('title','bệnh danh')

@section('content')
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Bệnh danh:</p>
                @if (isset($benhdanh))
                    @foreach ($benhdanh as $key => $bd)
                        <a data-id="{{ $bd->MaBD }}" data-type="benh-danh" class="nav-link @if($key==0) active @endif"
                            id="{{ $key }}" data-toggle="pill" href="#tab{{ $bd->MaBD }}" role="tab" aria-selected="true">
                            {{ $bd->TenBD }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                @if (isset($benhdanh))
                    @foreach ($benhdanh as $key => $bd)
                        <div class="tab-pane fade @if($key==0)  show active @endif" id="tab{{ $bd->MaBD }}" role="tabpanel"
                            aria-labelledby="{{ $bd->MaBD }}">
                            <p class="title">{{ $bd->TenBD }}</p>
                            <p>Nguyên Nhân:</p>
                            {{ $bd->NguyenNhan }}
                            <br />
                            <br />
                            <p>Thể Bệnh:</p>
                            {{ $bd->TheBenh }}
                            <br />
                            <br />
                            <p>Pháp:</p>
                            {{ $bd->Phap }}
                            <br />
                            <br />
                            <p>Phương Thang:</p>
                            <a href="phuong-thang/{{ $bd->MaPT }}">{{ $bd->TenPT }}</a>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
        
    </div>
@endsection
