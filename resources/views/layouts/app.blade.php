<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="http://bulma.io">
                <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>

            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item is-tab" href="">Learn</a>
                <a class="navbar-item is-tab" href="">Discuss</a>
                <a class="navbar-item is-tab" href="">Share</a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link  is-active" href="">
                        Hi Musa!
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item " href="">
                            <i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i>Profile
                        </a>
                        <a class="navbar-item " href="">
                            <i class="fa fa-bell fa-fw" aria-hidden="true"></i>Notifications
                        </a>
                        <a class="navbar-item " href="">
                            <i class="fa fa-gear fa-fw" aria-hidden="true"></i>Settings
                        </a>

                        <hr class="navbar-divider">

                        <a class="navbar-item is-active" href="">
                            <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Logout
                        </a>

                    </div>
                </div>
                <a class="nav-item is-tab">
                    <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>&nbsp; Login
                </a>
                <a class="nav-item is-tab">
                    <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>&nbsp; Register
                </a>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
