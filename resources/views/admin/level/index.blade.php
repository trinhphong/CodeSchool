@extends('admin.master.master')
@section('content-admin')
    <div class="container-fluid">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3>Quản lý Level</h3>
                </div>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($levels as $level)
                        <tr>
                            <td>{{$level->id}}</td>
                            <td>{{$level->name}}</td>
                            <td>{{$level->description}}</td>
                            <td>
                                <a href="{{ route('level.create') }}" class="btn btn-primary">
                                    Create
                                    <span><i class="glyphicon glyphicon-edit"></i></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
            </div>
        </div>
    </div>
@endsection