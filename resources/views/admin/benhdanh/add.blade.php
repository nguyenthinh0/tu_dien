@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Add Bệnh Danh</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/save-benhdanh" method="post">
                <div class="form-group">
                    <label for="">Tên Bệnh Danh</label>
                    <input type="text" name="TenBD" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Nguyên Nhân</label>
                    <input type="text" name="NguyenNhan" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Thể Bệnh</label>
                    <input type="text" name="TheBenh" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Pháp</label>
                    <input type="text" name="Phap" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Phương Thang</label>
                    <select class="form-control" name="MaPT" id="">
                         <option value="0">Chọn phương thang</option>
                         @foreach ($phuongthang as $p)
                              <option value="{{ $p->MaPT }}">{{ $p->TenPT }}</option>
                         @endforeach   
                    </select>
                    
                </div>
                
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
