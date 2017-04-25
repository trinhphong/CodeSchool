@extends('admin.master.master')
@section('content-admin')
    <div class="container-fluid">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3>Update Level</h3>
                </div>
            </div>
            <div class="panel-body">
                {!! Form::model($level, array('route'=>['level.update',$level->id],'method'=>'PUT')) !!}
                <div class="form-group">
                    {!! Form::label('name','Level Name') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description','Description') !!}
                    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('note','Note') !!}
                    {!! Form::text('note',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image','Tên image') !!}
                    {!! Form::text('image',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('course_id','Course') !!}
                    {!! Form::text('course_id',1,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('slide_id','Slide') !!}
                    {!! Form::text('slide_id',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('Update',['type' => 'submit', 'class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection