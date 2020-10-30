@extends('admin.layouts.glance')
@section('title')
    Thêm mới công ty tuyển dụng
@endsection
@section('content')
    <h1> Thêm mới công ty tuyển dụng</h1>

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

            <form name="delegate" action="{{ url('admin/partner/company') }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Tên công ty</label>
                    <div class="col-sm-8">
                        <input type="text" name="company_name" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Website</label>
                    <div class="col-sm-8">
                        <input type="text" name="website" class="form-control1" id="focusedinput"
                               placeholder="Default Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                    <div class="col-sm-8">
                        <textarea name="desc" id="txtarea1" cols="50" rows="2"
                                  class="form-control1 mytinymce"></textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>



@endsection
