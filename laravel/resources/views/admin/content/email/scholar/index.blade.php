@extends('admin.layouts.glance')
@section('title')
    Quản trị email học giả
@endsection
@section('content')
    <h1> Quản trị email học giả</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading" style="margin-left: 10px">
                <form name="category" action="{{--{{ url() }}--}}" method="post"
                      class="form-horizontal">
                    @csrf
                    <button type="submit" class="btn btn-success">Gửi email</button>
                </form>
            </div>
            <div class="inbox-page">
                <div class="inbox-row widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="mail "><input type="checkbox" class="checkbox"></div>
                    <div class="mail mail-name"><h6>Alexander</h6></div>
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
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
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
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="mail-body">
                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.</p>
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
