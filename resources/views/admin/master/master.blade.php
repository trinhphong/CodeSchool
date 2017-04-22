@extends('layouts.app')

@section('head')
    <link href="{{ asset('css/admin/template.css') }}" rel="stylesheet">
    @endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-sm-2">
                <div class="sidebar content-box" style="display: block">
                    <ul class="nav">
                        <li>
                            <a href="index.html">
                                <i class="glyphicon glyphicon-dashboard"></i>
                                Bảng Điều Khiển
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="glyphicon glyphicon-book"></i>
                                Quản Lý Bài Học
                                <span class="caret pull-right"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="insert.html">Thêm Bài Học</a></li>
                                <li><a href="delete.html">Xóa Bài Học</a></li>
                                <li><a href="update.html">Sửa Bài Học</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="student.html">
                                <i class="glyphicon glyphicon-user"></i>
                                Quản Lý Học Viên
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-10">
                @yield('content-admin')
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="copy text-center">
                Trình Phong
            </div>
        </div>
    </footer>
@endsection