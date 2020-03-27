<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Default')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app" class="d-none" :class="{'d-flex': ready}">
    <header>
        @include('partials.header')
    </header>
    <main>
        <b-container :fluid='@json($fluid ?? false)'>
            @yield('content')
        </b-container>
    </main>
    <footer>
        <b-container fluid>
            @include('partials.footer')
        </b-container>
    </footer>
    @stack('portal')
</div>

<script>
    window.$setup = {
        constructor: {},
        data: {}
    };
</script>
@stack('setup')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
