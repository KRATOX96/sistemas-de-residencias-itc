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

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css">
</head>
<body>


  

<div class="encabezado col-md-12 col-md-offset-1 " id="contenedor">
                <div class="logo-tnm">
                    <img src="https://sitec.itculiacan.edu.mx/wp-content/themes/fuente/images/header-sep.png"></a>
                </div>
                <div class="text-tnm">
                    <h3>Tecnológico Nacional de México</h3>
                    <h4>Instituto Tecnológico de Culiacán</h4>
                </div>
                <div class="logo">
                    <img src="https://sitec.itculiacan.edu.mx/wp-content/plugins/website-logo/images/Logo-itc.png" title="Instituto Tecnológico de Culiacán" alt="Instituto Tecnológico de Culiacán">
                </div><!--logo-->
            </div>

        @yield('content')
    </div>



    <!-- Scripts -->
    <script
      src="http://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
      crossorigin="anonymous">
      
    </script>
    <!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
