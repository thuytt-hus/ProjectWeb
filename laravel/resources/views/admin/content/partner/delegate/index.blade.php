@extends('admin.layouts.glance')
@section('title')
    Quản trị người đại diện
@endsection
@section('content')
    <h1> Quản trị người đại diện</h1>
    <div style="margin: 20px 0">
        <a href="{{ url('admin/partner/delegate/create') }}" class="btn btn-success">Thêm người đại diện</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số : </h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Chức vụ</th>
                    <th>Phòng ban</th>
                    <th>Email</th>
                    <th>Công ty</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($cats as $cat)
                    <tr>
                        <th scope="row">{{ $cat->id }}</th>
                        <td>{{ $cat->position }}</td>
                        <td>{{ $cat->department }}</td>
                        <td>{{ $cat->email }}</td>
                        <td>{{ $cat->company_name }}</td>
                        <td>
                            <a href="{{ url('admin/partner/delegate/'.$cat->id.'/edit') }}" class="btn btn-warning">Sửa</a>
                            <a href="{{ url('admin/partner/delegate/'.$cat->id.'/delete ') }}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $cats->links() }}
        </div>
    </div>

@endsection
