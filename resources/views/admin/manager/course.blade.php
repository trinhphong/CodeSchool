@extends('admin.master.master')
@section('content-admin')
    <div class="container-fluid">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3>Quản lý Course</h3>
                </div>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Language</th>
                            <th>Name</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->language}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{link_to_route('course.edit','Edit',[$course->id],['class'=>'btn btn-primary'])}}</td>
                            <td>{{link_to_route('level.index','Quản Lý Level',[$course->id],['class'=>'btn btn-danger'])}}</td>
                        </tr>
                    </tbody>
                </table>
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
            </div>
        </div>
    </div>
@endsection