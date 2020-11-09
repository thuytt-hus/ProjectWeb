@extends('admin.layouts.glance')
@section('title')
    Thêm học giả
@endsection
@section('content')
    <h1> Thêm học giả</h1>

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

            <form name="delegate" action="{{ url('admin/scholar') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Đơn vị giới thiệu</label>
                    <div class="col-sm-8">
                        <input type="text" name="referralunit" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên</label>
                    <div class="col-sm-8">
                        <input type="text" name="lastname" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Họ đệm</label>
                    <div class="col-sm-8">
                        <input type="text" name="firstname" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Chức vụ</label>
                    <div class="col-sm-8">
                        <input type="text" name="position" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Khoa</label>
                    <div class="col-sm-8">
                        <input type="text" name="faculty" class="form-control1"
                               id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label ">Đơn vị giáo dục</label>
                    <div class="col-sm-8">
                        <input type="text" name="college"
                               class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Quốc gia</label>
                    <div class="col-sm-8">
                        <input type="text" name="country" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control1"
                               id="focusedinput" placeholder="Default Input">
                    </div>
                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Điện thoại</label>
                    <div class="col-sm-8">
                        <input type="text" name="phone" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>



@endsection
