@extends('admin.layouts.glance')
@section('title')
    Sửa thông tin người đại diện
@endsection
@section('content')
    <h1> Sửa thông tin người đại diện {{ $cat->id . ' : ' .$cat->name }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form name="category" action="{{ url('admin/partner/delegate/'.$cat->id) }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Họ và tên</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control1" id="focusedinput" value="{{ $cat->name }}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Chức vụ</label>
                    <div class="col-sm-8">
                        <input type="text" name="position" class="form-control1" id="focusedinput" value="{{ $cat->position }}"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Phòng ban</label>
                    <div class="col-sm-8">
                        <input type="text" name="department" class="form-control1"
                               id="focusedinput" value="{{ $cat->department }}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control1"
                               id="focusedinput" value="{{ $cat->email }}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label ">Công ty</label>
                    <div class="col-sm-8">
                        <input type="text" name="company_name"
                               class="form-control1" id="focusedinput" value="{{ $cat->company_name }}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8">
                        <textarea name="desc" id="txtarea1" cols="50" rows="2"
                                  class="form-control1 mytinymce">{{ $cat->desc }}</textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.lfm-btn').filemanager('image', {'prefix':'http://localhost/ProjectWeb/laravel/public/laravel-filemanager'});

        });

    </script>


@endsection