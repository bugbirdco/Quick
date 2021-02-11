<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Default')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app">
    @yield('content')
    @stack('portal')
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
