@extends('layouts.index')
@section('title','Phương thang')
@section('content')
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Phương Thang:</p>
                @if (isset($phuongthang))
                    @foreach ($phuongthang as $key => $pt)
                        <a data-id="{{ $pt->MaPT }}" data-type="phuong-thang" class="nav-link @if(isset($id)) @if($id == $pt->MaPT) active @endif @elseif ($key==0) active @endif" id="{{ $key }}" data-toggle="pill"
                            href="#tab{{ $pt->MaPT }}" role="tab" aria-selected="true">
                            {{ $pt->TenPT }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                @if (isset($phuongthang))
                    @foreach ($phuongthang as $key => $pt)
                        <div class="tab-pane fade @if ($key==0) show active @endif" id="tab{{ $pt->MaPT }}" role="tabpanel"
                            
                            aria-labelledby="{{ $pt->MaPT }}">
                            <p class="title">{{ $pt->TenPT }}</p>
                            <p>Phương Pháp Bào Chế:</p>
                            {{ $pt->PPBC }}
                            <br />
                            <br />
                            <p>Thành Phần:</p>
                            @php
                                $tp = explode(",", $pt->TenTP);
                            @endphp
                           
                                <table>
                                    @foreach ($tp as $value)
                                        <tr>
                                            <td> {{ explode('-', $value)[0] }}</td>
                                            <td> {{ explode('-', $value)[1] }}</td>
                                           
                                        </tr>
                                    
                                        @endforeach
                                </table>
                           
                            <br />
                            <br />
                            <p>Tác Dụng:</p>
                            {{ $pt->TacDung }}
                            <br />
                            <br />
                            <p>Liều Lượng:</p>
                            {{ $pt->LieuLuong }}
                            <br />
                            <br />
                            <p>Kiêng Kị:</p>
                            {{ $pt->KiengKi }}
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
       
    </div>
@endsection
