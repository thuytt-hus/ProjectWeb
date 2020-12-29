@extends('admin.layouts.glance')
@section('title')
    Gửi mail cho học giả
@endsection
@section('content')
    <div class="container">
        <div class="col-md-9 col-sm-9" style="margin-bottom: 10px">
            <a href="{{ url('admin/sendmail/scholar') }}" class="btn btn-success">Back</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if (isset($cat->document))
                <div class="col-md-4">
                    <label for="focusedinput" class="col-sm-6 control-label">Người nhận</label>
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" name="phone" class="form-control1" id="focusedinput"
                               value="{{ $cat->email }}" disabled>
                    </div>
                    <br>

                    <label for="focusedinput" class="col-sm-6 control-label">Tiêu đề</label>
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" name="phone" class="form-control1" id="focusedinput""
                        value="{{ $cat->subject }}" disabled>
                    </div>
                    <br>

                    <label for="focusedinput" class="col-sm-6 control-label">Nội dung</label>
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" name="phone" class="form-control1" id="focusedinput"
                               value="{{ $cat->message }}" disabled>
                    </div>
                    <br>

                </div>
                <div class="col-md-8">
                    <iframe src="{{url($cat->document)}}"
                            style="height: 450px; width: 90%"></iframe>


                </div>
            @else
                <div class="col-md-6 col-sm-6" >
                    <label for="focusedinput" class="col-sm-6 control-label">Người nhận</label>
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" name="phone" class="form-control1" id="focusedinput"
                               value="{{ $cat->email }}" disabled>
                    </div>
                    <br>

                    <label for="focusedinput" class="col-sm-6 control-label">Tiêu đề</label>
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" name="phone" class="form-control1" id="focusedinput""
                        value="{{ $cat->subject }}" disabled>
                    </div>
                    <br>

                    <label for="focusedinput" class="col-sm-6 control-label">Nội dung</label>
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <input type="text" name="phone" class="form-control1" id="focusedinput"
                               value="{{ $cat->message }}" disabled>
                    </div>
                    <br>

                </div>
            @endif
        </div>
    </div>
@endsection
