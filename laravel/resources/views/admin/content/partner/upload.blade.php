@extends('admin.layouts.glance')
@section('title')
    Upload file
@endsection
@section('content')
    <h1> Upload file</h1>

    <div class="row">
        {{--@if(count($errors) > 0)
            <div class="alert alert-danger">
                Upload Validation Error<br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif--}}
        <div class="form-three widget-shadow">
            <form name="import" action="{{ url('admin/partner/import') }}" method="post" enctype="multipart/form-data"
                  class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <input type="file" name="select_file" accept=".xlsx, .xls, .csv"/>
                    <br><br>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>

@endsection