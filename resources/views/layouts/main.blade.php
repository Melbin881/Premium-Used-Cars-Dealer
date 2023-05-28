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



    <div class="bottommenu">
        <div class="bottomlogo">
            <span class="dotlogo">&bullet;</span>
                <img class="ll" src="{{ asset('asset/image/logo.jpg') }}" alt="logo1" />
            <span class="dotlogo">&bullet;</span>
        </div>
        <ul class="nav nav-tabs bottomlinks">
            <li role="presentation"><a href="#/" role="button">ABOUT US</a></li>
            <li role="presentation"><a href="#/">CATEGORIES</a></li>
            <li role="presentation"><a href="#/">PREORDERS</a></li>
            <li role="presentation"><a href="#/">CONTACT US</a></li>
            <li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
        </ul>
        <p>Pre-Owned Used Cars</p>
        <img src="{{ asset('asset/image/line.png') }}" alt="line" /> <br />
        <div class="bottomsocial">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>
        <div class="footer">
            <div class="copyright">
                &copy; Copy right {{ date('Y') }} | <a href="#">Privacy </a>|
                <a href="#">Policy</a>
            </div>
            <div class="atisda">
                Designed by
                <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency
                </a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('asset/source/bootstrap-3.3.6-dist/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/js/isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/js/myscript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/bootstrap-3.3.6-dist/js/jquery.1.11.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/source/bootstrap-3.3.6-dist/js/bootstrap.js') }}"></script>

    @yield('js')

</body>

</html>
