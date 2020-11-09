@extends('admin.layouts.glance')
@section('title')
    Sửa thông tin nhà tuyển dụng
@endsection
@section('content')
    <h1> Sửa thông tin nhà tuyển dụng {{ $cat->id . ' : ' .$cat->name }}</h1>

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

            <form name="category" action="{{ url('admin/partner/'.$cat->id) }}" method="post" class="form-horizontal">
                @csrf

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Đơn vị giới thiệu</label>
                    <div class="col-sm-8">
                        <input type="text" name="referralunit" class="form-control1" id="focusedinput"
                               value="{{ $cat->referralunit }}"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên</label>
                    <div class="col-sm-8">
                        <input type="text" name="lastname" class="form-control1" id="focusedinput"
                               value="{{ $cat->lastname }}"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Họ đệm</label>
                    <div class="col-sm-8">
                        <input type="text" name="firstname" class="form-control1" id="focusedinput"
                               value="{{ $cat->firstname }}"
                               placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Chức vụ</label>
                    <div class="col-sm-8">
                        <input type="text" name="position" class="form-control1" id="focusedinput"
                               value="{{ $cat->position }}"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Lĩnh vực công tác</label>
                    <div class="col-sm-8">
                        <input type="text" name="department" class="form-control1"
                               id="focusedinput" value="{{ $cat->department }}" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label ">Tên công ty</label>
                    <div class="col-sm-8">
                        <input type="text" name="company_name"
                               class="form-control1" id="focusedinput" value="{{ $cat->company_name }}"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Quốc gia</label>
                    <div class="col-sm-8">
                        <input type="text" name="country" class="form-control1" id="focusedinput"
                               value="{{ $cat->country }}"
                               placeholder="Default Input">
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
                    <label for="focusedinput" class="col-sm-2 control-label">Điện thoại</label>
                    <div class="col-sm-8">
                        <input type="text" name="phone" class="form-control1" id="focusedinput"
                               value="{{ $cat->phone }}"
                               placeholder="Default Input">
                    </div>
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
