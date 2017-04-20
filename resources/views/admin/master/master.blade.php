<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('tittle')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/admin/template.css') }}" rel="stylesheet">

    <!-- Script -->
    <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="logo">
                    <h1>
                        <a>Trình Phong Admin</a>
                    </h1>
                </div>
            </div>
            <div class="col-sm-5">

            </div>
            <div class="col-sm-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Tài Khoản
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.html">Thông Tin</a>
                                    </li>
                                    <li>
                                        <a href="login.blade.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

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
            @yield('content')
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
</body>
</html>