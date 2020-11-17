@extends('admin.layouts.glance')
@section('title')
    Quản trị email
@endsection
@section('content')
    <h1> Quản trị email</h1>
    <div style="margin: 10px 0">
        <a href="{{ url('admin/sendmail/partner/send') }}" class="btn btn-success">Gửi email</a>
    </div>
    <div class="main-page">

        <div class="col-md-4 compose-left">
            <div class="folder widget-shadow">
                <ul>
                    <li class="head"><i class="fa fa-user" aria-hidden="true"></i>Nhà tuyển dụng</li>
                    <li><a href="#">
                            <div class="chat-left">
                                <input type="checkbox" class="checkbox">
                            </div>
                            <div class="chat-right">
                                @foreach($cats as $cat)
                                    <p>{{$cat->firstname . ' ' .$cat->lastname}}</p>
                                    <h6>{{ $cat->company_name }} </h6>
                                @endforeach
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 compose-right widget-shadow">
            <div class="panel-default">
                <div class="panel-heading">
                    Inbox
                </div>
                <div class="inbox-page row">
                    <div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="mail "><input type="checkbox" class="checkbox"></div>
                        <div class="mail mail-name"><h6>dsdjsafbajf</h6></div>
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            <div class="mail"><p>Nullam quis risus eget urna mollis ornare accusamus terry </p></div>
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
                        <div class="mail-right"><p>30th Nov</p></div>
                        <div class="clearfix"></div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="mail-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                    ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                    truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
                                <form>
                                    <input type="text" placeholder="Reply to sender" required="">
                                    <input type="submit" value="Send">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
