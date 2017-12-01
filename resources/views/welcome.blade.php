<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel {{ app()->version() }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <section class="hero is-info is-bold is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title is-1" style="font-family: Raleway">Smarthings Dashboard</h1>
                    <h2 class="subtitle is-4">Sergio Ródenas Gómez</h2>

                    @auth
                        <a href="{{ route('home') }}" class="button is-primary">
                            Dashboard
                        </a>
                    @endauth

                    @guest
                        <a href="{{ route('login') }}" class="button is-inverted">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="button is-danger">
                            Register
                        </a>
                    @endguest
                </div>
            </div>
        </section>
    </body>
</html>
