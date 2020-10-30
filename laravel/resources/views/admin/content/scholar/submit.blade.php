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
                    <label for="focusedinput" class="col-sm-2 control-label">Họ và tên</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Trường</label>
                    <div class="col-sm-8">
                        <input type="text" name="college" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Khóa</label>
                    <div class="col-sm-8">
                        <input type="text" name="schoolyear" class="form-control1"
                               id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label ">Ngành</label>
                    <div class="col-sm-8">
                        <input type="text" name="majors"
                               class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label ">Điểm tích lũy</label>
                    <div class="col-sm-8">
                        <input type="text" name="score"
                               class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label ">Năm sinh</label>
                    <div class="col-sm-8">
                        <input type="text" name="birth"
                               class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label ">Quê quán</label>
                    <div class="col-sm-8">
                        <input type="text" name="hometown"
                               class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>



@endsection
