@extends('admin.layouts.glance')
@section('title')
    Quản trị học giả
@endsection
@section('content')
    <h1> Quản trị học giả</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong><br>
            @endforeach
        </div>
    @endif
    <div style="margin: 20px 0">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <a href="{{ url('admin/scholar/create') }}" class="btn btn-success">Thêm học giả</a>
                <a href="{{ url('admin/scholar/upload') }}" class="btn btn-success">Import</a>
                <a href="{{ url('admin/scholar/export') }}" class="btn btn-success">Export</a>
            </div>
            <form action="{{ url('admin/scholar/search') }}" method="GET" name="search" id="search"
                  class="form-horizontal">
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" name="search" placeholder="Search"
                                   aria-label="Search">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số : </h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Đơn vị giới thiệu</th>
                    <th>Tên</th>
                    <th>Họ đệm</th>
                    <th>Chức vụ</th>
                    <th>Khoa</th>
                    <th>Đơn vị giáo dục</th>
                    <th>Quốc gia</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cats as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->referralunit }}</td>
                        <td>{{ $cat->lastname }}</td>
                        <td>{{ $cat->firstname }}</td>
                        <td>{{ $cat->position }}</td>
                        <td>{{ $cat->faculty }}</td>
                        <td>{{ $cat->college }}</td>
                        <td>{{ $cat->country }}</td>
                        <td>{{ $cat->email }}</td>
                        <td>{{ $cat->phone }}</td>
                        <td>
                            <a href="{{ url('admin/scholar/'.$cat->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/scholar/'.$cat->id.'/delete ') }}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $cats->links() }}
        </div>
    </div>

    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.lfm-btn').filemanager('image', {'prefix': 'http://localhost/ProjectWeb/laravel/public/laravel-filemanager'});

        });

    </script>

@endsection
