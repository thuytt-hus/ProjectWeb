@extends('admin.layouts.glance')
@section('title')
    Quản trị học giả
@endsection
@section('content')
    <h1> Quản trị học giả</h1>
    <div style="margin: 20px 0">
        <a href="{{ url('admin/scholar/create') }}" class="btn btn-success">Thêm học giả</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số : </h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Họ và tên</th>
                    <th>Trường</th>
                    <th>Khóa</th>
                    <th>Ngành</th>
                    <th>Điểm tích lũy</th>
                    <th>Năm sinh</th>
                    <th>Quê quán</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cats as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->college }}</td>
                        <td>{{ $cat->schoolyear }}</td>
                        <td>{{ $cat->majors }}</td>
                        <td>{{ $cat->score }}</td>
                        <td>{{ $cat->birth }}</td>
                        <td>{{ $cat->hometown }}</td>
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
            $('.lfm-btn').filemanager('image', {'prefix':'http://localhost/ProjectWeb/laravel/public/laravel-filemanager'});

        });

    </script>

@endsection
