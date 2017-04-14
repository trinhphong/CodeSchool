<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
    <div>
        <h1>This is Header</h1>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <h1>This is Footer</h1>
    </footer>
</body>
</html>