<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>atSistemas - Un blog sin WordPress - Ejercicio Conceptos Básicos</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/custom.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="//www.atsistemas.com/.resources/atsistemas-theme-module/webresources/atsistemas-theme/assets/imagenes/atsistemas.ico" type="image/x-icon" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="isotipo" src="https://www.atsistemas.com/.imaging/mte/atsistemas-theme/80x51/dam/Redise%C3%B1o-home/isotipo.png/jcr:content/isotipo.png.png" alt="atSistemas">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @component('components.menu')
                        @endcomponent
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                    <div class="col-md-4">
                        @component('components.sidebar', ['nombreBlog'=>'atSistemas Blog'])
                        @endcomponent
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
