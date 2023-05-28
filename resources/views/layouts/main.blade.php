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
    <link rel="stylesheet" type="text/css" href="{{ asset('style/contactstyle.css') }}" />
</head>

<body>

    <div class="header">
        <ul class="socialicon">
            <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </li>
        </ul>
        <ul class="givusacall">
            <li>Give us a call : +91 7902307304</li>
        </ul>
        <ul class="logreg">
            <li>
                <a href="D:\GARAGE - HTML-CSS-Template\glassmorphism-login-form-tutorial-in-html-css\src\index.html">Login
                </a>
            </li>
            <li>
                <a href="#"><span class="register">Register</span></a>
            </li>
        </ul>
    </div>

    <div class="allcontain">

        <!-- Navbar Up -->
        <nav class="topnavbar navbar-default topnav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                        <span class="sr-only"> Toggle navigaion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="#"><img class="ll" src="{{ asset('asset/image/logo.jpg') }}" alt="Logo Error" /></a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="upmenu">
                <ul class="nav navbar-nav" id="navbarontop">
                    <li class="active"><a href="#">HOME</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdowncostume">
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Old</a></li>
                            <li><a href="#">New</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdowncostume">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="3">3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">CONTACT</a>
                    </li>
                    <button><span class="postnewcar">POST NEW CAR</span></button>
                </ul>
            </div>
        </nav>
    </div>


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
