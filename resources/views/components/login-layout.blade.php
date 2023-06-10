<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("plugins/overlayscrollbars/css/overlayscrollbars.min.css") }}">

    <link type="text/css" rel="stylesheet" href="{{ asset("plugins/fontawesome-free/css/all.min.css") }}">

    <link type="text/css" rel="stylesheet" href="{{ asset("app/css/adminlte.min.css") }}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="login-page">
    <div class="login-box">
        @yield('content')
    </div>

    <script src="{{asset("plugins/overlayscrollbars/js/overlayscrollbars.browser.es6.min.js")}}"></script>
    <script src="{{asset("plugins/popper/popper.min.js")}}"></script>
    <script src="{{asset("plugins/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("app/js/adminlte.min.js")}}"></script>
</body>
</html>
