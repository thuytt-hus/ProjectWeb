@extends('admin.layouts.glance')
@section('title')
    Xóa người đại diện
@endsection
@section('content')
    <h1> Xóa người đại diện {{ $cat->id . ' : ' .$cat->name }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <form name="category" action="{{ url('admin/partner/'.$cat->id.'/delete') }}" method="post"
                  class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </div>
            </form>
        </div>
    </div>

@endsection
