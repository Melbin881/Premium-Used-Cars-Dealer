<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Highline Autohaus</title>
    <meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia" />
    <meta name="author" content="Web Domus Italia" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/source/bootstrap-3.3.6-dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/source/font-awesome-4.5.0/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/style/slider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/style/mystyle.css') }}" />
</head>

<body>

    @yield('contents')


    <script type="text/javascript" src="{{ asset('asset/source/bootstrap-3.3.6-dist/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/js/isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/js/myscript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/bootstrap-3.3.6-dist/js/jquery.1.11.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/bootstrap-3.3.6-dist/js/bootstrap.js') }}"></script>

    @yield('js')
</body>

</html>
