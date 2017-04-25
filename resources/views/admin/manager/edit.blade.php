@extends('admin.master.master')
@section('content-admin')
    <div class="container-fluid">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3>Update Course</h3>
                </div>
            </div>
            <div class="panel-body">
               {!! Form::model($course, array('route'=>['course.update',$course->id],'method'=>'PUT')) !!}
                <div class="form-group">
                    {!! Form::label('name','Name Course') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('language','Language') !!}
                    {!! Form::text('language',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description','Description') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Update',['type' => 'submit', 'class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection