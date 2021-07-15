@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Edit Phương Thang</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/update-phuongthang/{{ $phuongthang->MaPT }}" method="post">
                <div class="form-group">
                    <label for="">Tên Phương Thang</label>
                    <input type="text" name="TenPT" value="{{ $phuongthang->TenPT }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Phương Pháp Bào Chế</label>
                    <select name="MaBaoChe" class="form-control" id="">
                        @foreach ($baoche as $b)
                            @if ($b->MaBaoChe === $phuongthang->MaBaoChe)
                                <option value="{{ $b->MaBaoChe }}" selected>{{ $b->PPBC }}</option>
                            @else
                                <option value="{{ $b->MaBaoChe }}">{{ $b->PPBC }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tác Dụng</label>
                    <input type="text" name="TacDung" value="{{ $phuongthang->TacDung }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Liều Lượng</label>
                    <input type="text" name="LieuLuong" value="{{ $phuongthang->LieuLuong }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Kiêng Kị</label>
                    <input type="text" name="KiengKi" value="{{ $phuongthang->KiengKi }}" class="form-control"
                        placeholder="">
                </div>


                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
