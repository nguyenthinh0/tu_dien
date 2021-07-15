@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">Edit Thuật Ngữ</div>
        <div class="card-body ">
            <form class="col-md-6" action="/admin/update-term/{{ $term->MaTN }}" method="post">
                <div class="form-group">
                    <label for="">Tên Thuật Ngữ</label>
                    <input type="text" name="TenTN" value="{{ $term->TenTN }}" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <textarea name="NoiDung" id="editor">
                        {!! $term->NoiDung !!}
                    </textarea>
                </div>

                <button type="submit" class="btn btn-success">Edit</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
