<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Residencias') }}</title>

    <!-- Styles -->
<link href="{{ URL::asset('css/principal.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">
</head>
<body>


  

<div class="encabezado col-md-10 col-md-offset-1 " id="contenedor">
                <div class="logo-tnm">
                    <img src="https://sitec.itculiacan.edu.mx/wp-content/themes/fuente/images/header-sep.png"></a>
                </div>
                <div class="text-tnm" >
                    <h3 style="line-height: 0.5 !important">Tecnológico Nacional de México</h3>
                    <h4>Instituto Tecnológico de Culiacán</h4>
                </div>
                <div class="logo">
                    <img src="https://sitec.itculiacan.edu.mx/wp-content/plugins/website-logo/images/Logo-itc.png" title="Instituto Tecnológico de Culiacán" alt="Instituto Tecnológico de Culiacán">
                </div><!--logo-->
            </div>
            
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        @else
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        @endguest
                    </ul>
                </div>
        @yield('content')
        @yield('scripts')
    </div>



