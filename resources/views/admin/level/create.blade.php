@extends('admin.master.master')
@section('content-admin')
    <div class="container-fluid">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">
                    <h3>Create Level</h3>
                </div>
            </div>
            <div class="panel-body">
                {!! Form::open(array('route'=>'level.store')) !!}
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
                    {!! Form::button('Create',['type' => 'submit', 'class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger text-center">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
    </div>
@endsection