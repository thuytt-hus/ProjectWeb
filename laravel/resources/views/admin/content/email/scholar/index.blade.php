@extends('admin.layouts.glance')
@section('title')
    Quản trị email
@endsection
@section('content')
    <h1> Quản trị email</h1>

    <div class="main-page">
        <form method="post" action="{{ url('admin/sendmail/scholar/send')}}">
            @csrf
            <div style="margin: 10px 0">
                <button type="submit" class="btn btn-success"> Gửi mail</button>
            </div>
            <div class="col-md-4 compose-left">
                <div class="folder widget-shadow">
                    <ul>
                        <li class="head"><i class="fa fa-user" aria-hidden="true"></i>Học giả</li>
                        <li><a href="#">
                                @foreach($cats as $cat)
                                    <div class="chat-left">
                                        <input tabindex="1" type="checkbox" class="checkbox" name="partner[]"
                                               id="{{$cat->email}}" value="{{$cat->email}}">
                                    </div>
                                    <div class="chat-right">
                                        <p class="name">{{$cat->firstname . ' ' .$cat->lastname}}</p>
                                        <h6 class="company_name">{{ $cat->college }} </h6>
                                    </div>
                                    <div class="clearfix"></div>
                                @endforeach
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </form>

        <div class="col-md-8 compose-right widget-shadow">
            <div class="panel-default">
                <div class="panel-heading">
                    Email
                </div>
                <div class="inbox-page">
                    @foreach($emails as $email)
                        <div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="mail mail-name"><h6>{{$email->subject}}</h6></div>
                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapse{{$email->id}}"
                               aria-expanded="true" aria-controls="collapseOne">
                                <div class="mail"><p>{{$email->email}}</p></div>
                            </a>
                            <div class="mail-right dots_drop">
                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" aria-expanded="false">
                                        <p><i class="fa fa-ellipsis-v mail-icon"></i></p>
                                    </a>
                                    <ul class="dropdown-menu float-right">
                                        <li>
                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="fa fa-reply mail-icon"></i>
                                                Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" title="">
                                                <i class="fa fa-download mail-icon"></i>
                                                Archive
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="font-red" title="">
                                                <i class="fa fa-trash-o mail-icon"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mail-right"><p>{{Carbon\Carbon::parse($email->created_at)->format('d M y')}}</p>
                            </div>
                            <div class="clearfix"></div>
                            <div id="collapse{{$email->id}}" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingOne">
                                <div class="mail-body">
                                    <p>{{$email->message}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
