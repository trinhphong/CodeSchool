@extends('layouts.app')

@section('head')
    <style>
        @media (max-width: 750px) {
            img {
                display: none;
            }
        }
    </style>
    @endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="height:450px;background: url('https://d1ffx7ull4987f.cloudfront.net/images/courses/hero/115/front-end-foundations-25091a7930fa01a9fc002a2d1e14e043.jpg') center no-repeat; background-size: cover">
                <div class="col-md-12" style="padding-top: 50px; position: relative">
                    <div class="col-md-5" style="height:400px; background-color: white;display: flex; align-items: center; border-radius: 3px 3px 0 0;">
                        <div style="display: block; padding-right: 5em; padding-left: 5em">
                            <p style="text-transform: uppercase; font-size: 85%; margin-bottom: 0; margin-top: 0; font-weight: 300; line-height: 1.5">{{$course->language}}</p>
                            <h1 style="margin: 0; font-weight: 700; line-height: 1.1; font-size: 300%">{{$course->name}}</h1>
                            <p style="font-size: 100%;">{{$course->description}}</p>
                            <button class="btn btn-primary">Start Course</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8" style="background-color: whitesmoke;">
                    <h2>Course Overview</h2>
                    <table>
                        @foreach($list_levels as $val)
                        <tr>
                            <td rowspan="3">
                                <img style="margin-right:20px; height: 100px; width:100px;" src="{{ asset('image/level/level-'.$val->id.'.png') }}"/>
                            </td>
                            <td>
                                <h5>
                                    <div>
                                        <span>Level {{$val->id }}</span><span style="color: orange"> | {{$val->note}}</span>
                                    </div>
                                </h5>
                            </td>
                        </tr>
                        <tr style="padding: 10px">
                            <td>
                                <h4>{{$val->name}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>{{$val->description}}</h5>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-4" style="background-color: red;">
                    <h1>ABC</h1>
                </div>
            </div>
        </div>
    </div>
@endsection