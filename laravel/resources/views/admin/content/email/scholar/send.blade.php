@extends('admin.layouts.glance')
@section('title')
    Gửi mail cho nhà tuyển dụng
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-11 col-centered">
                <div class="panel panel-default">
                    <form action="{{ url('admin/sendmail/partner/send/email') }}" method="POST">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    @foreach($cats as $value)
                                        <input type="email" name="email" placeholder="Email" class="form-control"
                                               value="{{ $value }}"
                                               required>
                                    @endforeach
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
                                    <textarea name="message" rows="15" class="form-control" type="text"
                                              required></textarea>
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
