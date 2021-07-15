@extends('layouts.index')
@section('title','Thuật ngữ')
@section('content')
    <div class="section-body">
        <div class="sidebar-left">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <p>Thuật Ngữ khác:</p>
                @if (isset($thuatngu))
                    @foreach ($thuatngu as $key => $tn)
                        <a data-id="{{ $tn->MaTN }}" data-type="thuat-ngu-khac" class="nav-link @if($key==0) active @endif"
                            id="{{ $key }}" data-toggle="pill" href="#tab{{ $tn->MaTN }}" role="tab" aria-selected="true">
                            {{ $tn->TenTN }}
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="content" id="style-scroll">
            <div class="tab-content" id="v-pills-tabContent">
                @if (isset($thuatngu))
                    @foreach ($thuatngu as $key => $tn)
                        <div class="tab-pane fade @if($key==0)  show active @endif" id="tab{{ $tn->MaTN }}" role="tabpanel"
                            aria-labelledby="{{ $tn->MaTN }}">
                            <p class="title">{{ $tn->TenTN }}</p>
                            {{ $tn->NoiDung }}
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        
    </div>
@endsection
