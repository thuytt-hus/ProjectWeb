@extends('admin.layouts.glance')
@section('title')
    Sửa thông tin công ty tuyển dụng
@endsection
@section('content')
    <h1> Sửa thông tin công ty tuyển dụng {{ $cat->id . ' : ' .$cat->name }}</h1>

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

            <form name="category" action="{{ url('admin/partner/company/'.$cat->id) }}" method="post"
                  class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên công ty</label>
                    <div class="col-sm-8">
                        <input type="text" name="company_name" class="form-control1" id="focusedinput"
                               value="{{ $cat->company_name }}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Website</label>
                    <div class="col-sm-8">
                        <input type="text" name="website" class="form-control1" id="focusedinput"
                               value="{{ $cat->website }}"
                               placeholder="Default Input">
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
            $('.lfm-btn').filemanager('image', {'prefix': 'http://localhost/ProjectWeb/laravel/public/laravel-filemanager'});

        });

    </script>


@endsection
