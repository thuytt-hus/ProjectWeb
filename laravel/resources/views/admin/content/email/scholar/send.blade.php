@extends('admin.layouts.glance')
@section('title')
    Gửi mail cho học giả
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-11 col-centered">
                <div class="panel panel-default">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <strong>{{ $error }}</strong><br>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ url('admin/sendmail/scholar/send/email') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="email" placeholder="Email" class="form-control"
                                               value="{{ $cat }}" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="subject" placeholder="Subject" class="form-control"
                                           autofocus="autofocus" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-comments message-icon"></i></span>
                                    <textarea name="message" rows="10" class="form-control" type="text"
                                              required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                    <input type="file" class="form-control" name="documents[]" multiple>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info pull-right">Gửi <span
                                            class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
