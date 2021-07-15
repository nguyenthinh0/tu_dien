@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Add Bệnh Danh</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/update-benhdanh/{{$benhdanh->MaBD}}" method="post">
                <div class="form-group">
                    <label for="">Tên Bệnh Danh</label>
                    <input type="text" name="TenBD" value="{{ $benhdanh->TenBD }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Nguyên Nhân</label>
                    <input type="text" name="NguyenNhan" value="{{ $benhdanh->NguyenNhan }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Thể Bệnh</label>
                    <input type="text" name="TheBenh" value="{{ $benhdanh->TheBenh }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Pháp</label>
                    <input type="text" name="Phap" value="{{ $benhdanh->Phap }}" class="form-control"
                        placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Phương Thang</label>
                    <select class="form-control" name="MaPT" id="">

                        @foreach ($phuongthang as $p)
                            @if ($p->MaPT === $benhdanh->MaPT)
                                <option value="{{ $p->MaPT }}" selected>{{ $p->TenPT }}</option>
                            @else
                                <option value="{{ $p->MaPT }}">{{ $p->TenPT }}</option>
                            @endif
                        @endforeach
                        
                    </select>

                </div>

                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
