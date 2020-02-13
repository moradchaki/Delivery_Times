<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mon site</title>

        <!-- Styles -->
        <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>

    </head>
    <body>
      <nav class="navbar is-dark">
        <div class="navbar-brand">
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">Welcome</a>
                <a class="navbar-item" href="{{ url('new') }}">Personal</a>
                <a class="navbar-item" href="#">Business</a>
                <a class="navbar-item" href="#">About</a>
                <a class="navbar-item" href="#">Pricing</a>
                <a href="#" class="navbar-item">FAQ</a>
                <a href="#" class="navbar-item">Cities</a>
                <a href="{{ url('partners')}}" class="navbar-item">Partners</a>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ route('login') }}">Log In</a>
                    <a class="navbar-item" href="{{ route('register') }}">Join now</a>
                </div>
            </div>
        </div>
    </nav>


                <div class="container">
                    <div class="navbar-menu">
                        <div class="navbar-end">
                            @if (Auth::guest())

                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @yield('content')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
