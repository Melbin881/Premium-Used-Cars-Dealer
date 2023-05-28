
@extends('layouts.main')

@section('contents')


    <div class="allcontain">
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
                <li><a href="#">Login </a></li>
                <li>
                    <a href="#"><span class="register">Register</span></a>
                </li>
            </ul>
        </div>
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
                    <a class="ll" href="#"><img src="{{asset('asset/image/logo.png')}}" alt="logo" /></a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="upmenu">
                <ul class="nav navbar-nav" id="navbarontop">
                    <li class="active"><a href="index.html">HOME</a></li>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT
                        </a>
                    </li>
                    <button><span class="postnewcar">POST NEW CAR</span></button>
                </ul>
            </div>
        </nav>
    </div>

    <div class="allcontain">
        <div id="carousel-up" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{asset('asset/image/rolls-royce thumbnai.jpg')}}" alt="rollsroyce" />
                    <div class="carousel-caption">
                        <h2>Rolls-royce</h2>
                        <p>
                            WELCOME TO THE WORLD OF ROLLS-ROYCE. <br />
                            "Strive above all for perfection. Take the best there is. <br />
                            And make it better.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('asset/image/bmw2.jpg')}}" alt="BMW" />
                    <div class="carousel-caption">
                        <h2>BMW</h2>
                        <p>The Ultimate Driving Machine</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('asset/image/mercedes thumbnail.jpg')}}" alt="benz" />
                    <div class="carousel-caption">
                        <h2>Mercedes Benz AMG</h2>
                        <p>
                            The Best or Nothing Unlike Any Other Engineered to move the
                            human spirit.
                        </p>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default midle-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
                        <h1>SEARCH TEXT</h1>
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarmidle">
                    <div class="searchtxt">
                        <h1>SEARCH TEXT</h1>
                    </div>
                    <form class="navbar-form navbar-left searchformmargin" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control searchform" placeholder="Enter Keyword" />
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbarborder">
                        <li class="li-category">
                            <a class="btn dropdown-toggle btn-costume" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                            <ul class="dropdown-menu" id="mydd">
                                <li><a href="#">Epic</a></li>
                                <li><a href="#">Old</a></li>
                                <li><a href="#">New</a></li>
                            </ul>
                        </li>
                        <li class="li-minyear">
                            <a class="btn dropdown-toggle btn-costume" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Min Year
                                <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                            <ul class="dropdown-menu" id="mydd2">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                        </li>
                        <li class="li-maxyear">
                            <a class="btn dropdown-toggle btn-costume" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Max Year
                                <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                            <ul class="dropdown-menu" id="mydd3">
                                <li><a href="#">1900</a></li>
                                <li><a href="#">2000</a></li>
                                <li><a href="#">2016</a></li>
                            </ul>
                        </li>
                        <li class="li-slideprice">
                            <p>
                                <label class="slidertxt" for="amount">Price </label>
                                <input class="priceslider" type="text" id="amount" readonly="readonly" />
                            </p>
                            <div id="slider-range"></div>
                        </li>
                        <li class="li-search">
                            <button class="searchbutton">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    
    <div class="allcontain">
        <div class="contact">
            <div class="newslettercontent">
                <div class="leftside">
                    <img id="image_border" src="{{asset('asset/image/border.png')}}" alt="border" />
                    <div class="contact-form">
                        <h1>Contact Us</h1>
                        <div class="form-group group-coustume">
                            <input type="text" class="form-control name-form" placeholder="Name" />
                            <input type="text" class="form-control email-form" placeholder="E-mail" />
                            <input type="text" class="form-control subject-form" placeholder="Subject" />
                            <textarea rows="4" cols="50" class="message-form"></textarea>
                            <button type="submit" class="btn btn-default btn-submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
                <div class="google-maps">
                    <div id="googleMap"></div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('js')

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter = new google.maps.LatLng(41.567197, 14.681526);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            };

            var map = new google.maps.Map(
                document.getElementById("googleMap"),
                mapProp
            );

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);
        }
    </script>

    <script>
        $(window).resize(function() {
            var new_height = $("#image_border").height();
            console.log(new_height);
            $("#googleMap").height(new_height);
        });

        $(window).load(function() {
            var new_height = $("#image_border").height();
            console.log(new_height);
            $("#googleMap").height(new_height);
            google.maps.event.addDomListener(window, "load", initialize());
        });
    </script>



@endsection