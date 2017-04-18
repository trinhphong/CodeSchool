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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirrormini/lib/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirrormini/theme/dracula.css') }}" rel="stylesheet">

    <!-- Script -->
    <script>window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(),]); ?></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('codemirrormini/lib/codemirror.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/css/css.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('codemirrormini/mode/javascript/javascript.js') }}"></script>
</head>
<body>
    <header>

    </header>

    <div class="container-fluid" style="height: 100%">
            @yield('content')
    </div>

    <footer>

    </footer>
</body>
</html>