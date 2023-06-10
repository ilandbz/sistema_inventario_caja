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
<body class="layout-fixed sidebar-mini sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <x-navbar></x-navbar>
        <x-sidebar></x-sidebar>
        <main class="app-main">
            <x-content-header></x-content-header>
            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </main>
        <x-footer></x-footer>
    </div>

    <script src="{{asset("plugins/overlayscrollbars/js/overlayscrollbars.browser.es6.min.js")}}"></script>
    <script src="{{asset("plugins/popper/popper.min.js")}}"></script>
    <script src="{{asset("plugins/bootstrap/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("app/js/adminlte.min.js")}}"></script>

    <script type="text/javascript">
        function confirmarEliminar()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
          return true;
        else
          return false;
        }
    </script>
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };

        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
</body>
</html>
