@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Add Thuật Ngữ</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/save-term" method="post">
                <div class="form-group">
                    <label for="">Tên Thuật Ngữ</label>
                    <input type="text" name="TenTN" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <textarea name="NoiDung" id="editor">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
