@extends('admin.layouts.glance')
@section('title')
    Quản trị công ty tuyển dụng
@endsection
@section('content')
    <h1> Quản trị công ty tuyển dụng</h1>
    <div style="margin: 20px 0">
        <a href="{{ url('admin/partner/company/create') }}" class="btn btn-success">Thêm công ty tuyển dụng</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số : </h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên công ty</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cats as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->company_name }}</td>
                        <td>{{ $cat->website }}</td>

                        <td>
                            <a href="{{ url('admin/partner/company/'.$cat->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/partner/company/'.$cat->id.'/delete ') }}" class="btn btn-danger">Xóa</a>
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
