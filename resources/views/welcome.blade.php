<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Auth</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-app">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Laravel Auth</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    @if (Route::has('login'))
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::check())
                                <li>
                                    <a class="page-scroll" href="{{ url('/home') }}">Home</a>
                                </li>
                            @else
                                <li>
                                    <a class="page-scroll" href="{{ url('/login') }}">Login</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="{{ url('/register') }}">Register</a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </nav>

        <header>
            <div class="header-layout">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1 id="homeHeading" class="base-font">A laravel basic authentication demonstration</h1>
                        <hr>
                        <p class="base-font">Check it out and start discovering on your own.</p>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Building an web app with laravel is cool</h2>
                        <hr class="light">
                        <p class="text-faded">
                            Life is short, laravel makes it easier.So start building apps with laravel as soon as possible!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
