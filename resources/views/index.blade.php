@extends('layouts.main')

@section('contents')
    <div class="allcontain">
        <div id="carousel-up" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('asset/image/porsche thumbnail.jpg') }}" alt="oldcar" />
                    <div class="carousel-caption">
                        <h2>Porsche Cayman</h2>
                        <p>There Is No Substitute</p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('asset/image/lamborgini thumbnail.jpg') }}" alt="porche" />
                    <div class="carousel-caption">
                        <h2>Lamborgini Huracan</h2>
                        <p>
                            We are Lamborghini. Dream, inspire, lead, wait, last:<br />
                            see the future and write your history.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('asset/image/mercedes thumbnail.jpg') }}" alt="benz" />
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
                                <label for="budget">Budget (INR):</label>
                                <select id="budget" name="budget">
                                    <option value="0">₹0</option>
                                    <option value="1000">₹1000</option>
                                    <option value="5000">₹5000</option>
                                    <option value="10000">₹10000</option>
                                </select>

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
        <div class="feturedsection">
            <h1 class="text-center">
                <span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;
            </h1>
        </div>
        <div class="feturedimage">
            <div class="row firstrow">
                <div class="col-lg-6 costumcol colborder1">
                    <div class="row costumrow">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                            <img src="{{ asset('asset/image/featurporch.jpg') }}" alt="porsche" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon">
                            <div class="featurecontant">
                                <h1>LOREM IPSUM</h1>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur ,<br />
                                    sed do eiusmod tempor incididunt
                                </p>
                                <h2>Price &#8377;</h2>
                                <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                                <div id="readmore">
                                    <h1>Car Name</h1>
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur ,<br />
                                        sed do eiusmod tempor incididunt <br />"Lorem ipsum dolor
                                        sit amet, consectetur ,<br />
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit
                                        amet, consectetur1 , sed do eiusmod tempor
                                        incididunt"Lorem ipsum dolor sit amet, consectetur1 sed do
                                        eiusmod tempor incididunt"Lorem ipsum dolor sit amet,
                                        consectetur1<br />
                                    </p>
                                    <button id="btnRL">READ LESS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 costumcol colborder2">
                    <div class="row costumrow">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                            <img src="{{ asset('asset/image/featurporch1.jpg') }}" alt="porsche1" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon">
                            <div class="featurecontant">
                                <h1>LOREM IPSUM</h1>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur ,<br />
                                    sed do eiusmod tempor incididunt
                                </p>
                                <h2>Price &#8377;</h2>
                                <button id="btnRM2">READ MORE</button>
                                <div id="readmore2">
                                    <h1>Car Name</h1>
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur ,<br />
                                        sed do eiusmod tempor incididunt <br />"Lorem ipsum dolor
                                        sit amet, consectetur ,<br />
                                        sed do eiusmod tempor incididunt"Lorem ipsum dolor sit
                                        amet, consectetur1 , sed do eiusmod tempor
                                        incididunt"Lorem ipsum dolor sit amet, consectetur1 sed do
                                        eiusmod tempor incididunt"Lorem ipsum dolor sit amet,
                                        consectetur1<br />
                                    </p>
                                    <button id="btnRL2">READ LESS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ________________________LATEST CARS SECTION _______________________-->
        <div class="latestcars">
            <h1 class="text-center">&bullet; LATEST CARS &bullet;</h1>
            <ul class="nav nav-tabs navbar-left latest-navleft">
                <li role="presentation" class="li-sortby">
                    <span class="sortby">SORT BY: </span>
                </li>
                <li data-filter=".RECENT" role="presentation">
                    <a href="#mostrecent" class="prcBtnR">MOST RECENT </a>
                </li>
                <li data-filter=".POPULAR" role="presentation">
                    <a href="#mostpopular" class="prcBtnR">MOST POPULAR </a>
                </li>
                <li role="presentation">
                    <a href="#" class="alphSort">ALPHABETICAL </a>
                </li>
                <li data-filter=".HPRICE" role="presentation">
                    <a href="#" class="prcBtnH">HIGHEST PRICE </a>
                </li>
                <li data-filter=".LPRICE" role="presentation">
                    <a href="#" class="prcBtnL">LOWEST PRICE </a>
                </li>
                <li id="hideonmobile"></li>
            </ul>
        </div>
        <br />
        <br />
        <!-- ________________________Latest Cars Image Thumbnail________________-->
        <div class="grid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car1.jpg') }}" alt="car1" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rolls Royce</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">4,50,00,000&#8377;;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car2.jpg') }}" alt="car2" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Renault</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">900 &euro;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car3.jpg') }}" alt="car3" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Ford Mustang</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">75,00,000 &#8377;;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car4.jpg') }}" alt="car4" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Rover</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">90,00,000 &#8377;;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car5.jpg') }}" alt="car5" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Porche</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">1200 &euro;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car6.jpg') }}" alt="car6" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Porche 911</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">4000 &euro;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car7.jpg') }}" alt="car7" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Chevrolet SS</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">3000 &euro;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="txthover">
                        <img src="{{ asset('asset/image/car8.jpg') }}" alt="car8" />
                        <div class="txtcontent">
                            <div class="stars">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                            <div class="simpletxt">
                                <h3 class="name">Meclaren</h3>
                                <p>
                                    "Lorem ipsum dolor sit amet, consectetur,<br />
                                    sed do eiusmod tempor incididunt"
                                </p>
                                <h4 class="price">2500 &euro;</h4>
                                <button>READ MORE</button><br />
                                <div class="wishtxt">
                                    <p class="paragraph1">
                                        Add to Wishlist
                                        <span class="glyphicon glyphicon-heart"></span>
                                    </p>
                                    <p class="paragraph2">
                                        Compare
                                        <span class="icon"><img src="{{ asset('asset/image/compicon.png') }}" alt="compicon" /></span>
                                    </p>
                                </div>
                            </div>
                            <div class="stars2">
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                                <div class="glyphicon glyphicon-star"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- _______________________________News Letter ____________________-->
        <div class="newslettercontent">
            <div class="leftside">
                <img src="{{ asset('asset/image/border.png') }}" alt="border" />
                <h1>NEWSLETTER</h1>
                <p>
                    Subscribe to the COLLECTIONCARS mailing list to <br />
                    receive updates on new arrivals, special offers <br />
                    and other discount information.
                </p>
            </div>
            <div class="rightside">
                <img class="newsimage" src="{{ asset('asset/image/newsletter.jpg') }}" alt="newsletter" />
                <input type="text" class="form-control" id="subemail" placeholder="EMAIL" />
                <button>SUBSCRIBE</button>
            </div>
        </div>

@endsection
