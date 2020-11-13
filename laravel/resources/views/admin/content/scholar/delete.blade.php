@extends('admin.layouts.glance')
@section('title')
    Xóa học giả
@endsection
@section('content')
    <h1> Xóa học giả {{ $cat->id . ' : ' .$cat->firstname . ' ' .$cat->lastname  }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <form name="category" action="{{ url('admin/scholar/'.$cat->id.'/delete') }}" method="post"
                  class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </div>
            </form>
        </div>
    </div>

@endsection
