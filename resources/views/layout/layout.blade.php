<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Andrew Bielecki')</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    <meta name="description" content="@yield('description', 'Home Page for Andrew Bielecki')"/>
    <meta name="robots" content="index, follow">
    <script src="{{ mix('/js/app.js') }}"></script>
    {{-- For page specific css --}}
    @stack('head_scripts')
</head>

<body class="has-background-white-bis">
    <div class="wrapper">
        <section class="hero is-info">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Andrew Bielecki
                    </h1>
                    <h2 class="subtitle">
                        Full Stack Software Engineer
                    </h2>
                </div>
            </div>
        </section>
        @yield('layout')
        @stack('body_scripts')
    </div>

    <footer class="ab_footer has-background-info has-text-white">
        <div class="container">
            &copy; {{ date('Y') }} Andrew Bielecki
        </div>
    </footer>
</body>
</html>
