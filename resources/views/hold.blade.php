<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Dynamic Floors</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo.png')}}"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/lightgallery.css"/>
    <link rel="stylesheet" href="css/woocommerce.css"/>
    <link rel="stylesheet" href="css/royal-preload.css"/>

    <link rel="stylesheet" href="style.css"/>
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
</head>

<body>
{{--<div id="royal_preloader"></div>--}}
<div id="page" class="site">
    <header id="site-header" class="site-header header-transparent">
        <!-- Main Header start -->
        <div class="octf-main-header is-fixed">
            <div class="octf-area-wrap">
                <div class="container-fluid octf-mainbar-container">
                    <div class="octf-mainbar">
                        <div style="background-color: black;" class="octf-mainbar-row octf-row">
                            <div class="octf-col logo-col no-padding">
                                <div id="site-logo" class="site-logo">
                                    <a href="{{url('/')}}">
                                        <img src="{{asset('logo.png')}}" alt="Dynamic Floors" class="">
                                    </a>
                                </div>
                            </div>
                            <div  class="octf-col menu-col no-padding">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul class="menu">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        @foreach(\App\Models\Floor::all() as $floor)
                                            <li class="menu-item-has-children"><a href="#">{{$floor->name}}</a>
                                                <ul class="sub-menu">
                                                    @if($floor->floor_brands)
                                                        @foreach($floor->floor_brands as $floor_brand)
                                                            <li>
                                                                <a href="{{url('/floor_brands/'.$floor_brand->id)}}">{{$floor_brand->brand->name}}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif

                                                </ul>
                                            </li>
                                        @endforeach
                                        <li class="menu-item-has-children"><a href="#">Accessories</a>
                                            <ul class="sub-menu">
                                                @foreach(\App\Models\ProfileType::where('id',6)->get() as  $profile_type)
                                                    <li>
                                                        <a href="{{url('/skirting/'.$profile_type->id) }}">{{$profile_type->name}}</a>
                                                    </li>
                                                @endforeach
                                                <li><a href="{{url('/profiles')}}">Profiles</a></li>
                                                <li><a href="{{url('/cleaners/1')}}">Cleaners</a></li>
                                                <li><a href="#">Others</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{url('/about')}}">About</a></li>

                                        <li><a href="{{url('/contact')}}">Contacts</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="octf-col cta-col text-right no-padding">
                                <!-- Call To Action -->
                                <div style="background-color: black;" class="octf-btn-cta">
                                    <div class="octf-sidepanel octf-cta-header">
                                        <div class="site-overlay panel-overlay"></div>
                                        <div id="panel-btn" class="panel-btn octf-cta-icons">
                                            <i class="ot-flaticon-menu"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_mobile">
            <div class="container-fluid">
                <div class="octf-mainbar-row octf-row">
                    <div class="octf-col">
                        <div class="mlogo_wrapper clearfix">
                            <div class="mobile_logo">
                                <a href="{{url('/')}}">
                                    <img src="{{url('logo.png')}}" alt="Dynamic Floors">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div style="background-color: black;" class="octf-col justify-content-end">
                        <div class="octf-menu-mobile octf-cta-header">
                            <div id="mmenu-toggle" class="mmenu-toggle">
                                <button><i class="ot-flaticon-menu"></i></button>
                            </div>
                            <div class="site-overlay mmenu-overlay"></div>
                            <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                <div class="mmenu-inner">
                                    <a class="mmenu-close" href="#"><i class="ot-flaticon-right-arrow"></i></a>
                                    <div class="mobile-nav">
                                        <ul id="menu-main-menu" class="mobile_mainmenu none-style">
                                            <li><a href="{{url('/')}}">Home</a></li>

                                            @foreach(\App\Models\Floor::all() as $floor1)
                                                <li class="menu-item-has-children"><a href="#">{{$floor1->name}}</a>
                                                    <ul class="sub-menu">
                                                        @if($floor1->floor_brands)
                                                            @foreach($floor1->floor_brands as $floor_brand)
                                                                <li>
                                                                    <a href="{{url('/floor_brands/'.$floor_brand->id)}}">{{$floor_brand->brand->name}}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                </li>
                                            @endforeach

                                            <li class="menu-item-has-children"><a href="#">Accessories</a>
                                                <ul class="sub-menu">
                                                    @foreach(\App\Models\ProfileType::where('id',6)->get() as  $profile_type)
                                                        <li>
                                                            <a href="{{url('/skirting/'.$profile_type->id) }}">{{$profile_type->name}}</a>
                                                        </li>
                                                    @endforeach
                                                    <li><a href="{{url('/profiles')}}">Profiles</a></li>
                                                    <li><a href="{{url('/cleaners/1')}}">Cleaners</a></li>
                                                    <li><a href="#">Others</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="{{url('/contact')}}">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <img src="{{asset('logo.png')}}" class="footer-logo" alt="">
                        <p>We provides a full range of interior design, architectural design.</p>
                        <div class="footer-social list-social">
                            <ul>
                                <li><a href="http://facebook.com" target="_self"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="http://twitter.com" target="_self"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://linkedin.com" target="_self"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="http://instagram" target="_self"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <h6>Contacts</h6>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="list-item-text">411 University St, Seattle, USA</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="list-item-text">theratio_interior@mail.com</span>
                            </li>
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="list-item-text">+1 800 456 789 123</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <div class="widget-footer widget-contact">
                        <h6>Latest Projects</h6>
                        <ul>
                            <li><a href="#">Stylish Family Appartment</a></li>
                            <li><a href="#">Modern Villa in Belgium</a></li>
                            <li><a href="#">Private House in Spain</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="widget-footer footer-widget-subcribe">
                        <h6>Subscribe</h6>
                        <form class="mc4wp-form" method="post">
                            <div class="mc4wp-form-fields">
                                <div class="subscribe-inner-form">
                                    <input type="email" name="EMAIL" placeholder="YOUR EMAIL" required="">
                                    <button type="submit" class="subscribe-btn-icon"><i class="ot-flaticon-send"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p>Follow our newsletter to stay updated about agency.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #site-footer -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                    <p>Copyright © 2020 Theratio by <a class="text-light" href="#">ThemeModern</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-5 col-md-12 align-self-center">
                    <ul class="icon-list-items inline-items justify-content-lg-end">
                        <li class="icon-list-item inline-item">
                            <a href="#"><span class="icon-list-text">Terms of use</span></a>
                        </li>
                        <li class="icon-list-item inline-item">
                            <a href="#"><span class="icon-list-text">Privacy Environmental Policy</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/mousewheel.min.js"></script>
<script src="js/lightgallery-all.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/easypiechart.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/royal_preloader.min.js"></script>
<!-- REVOLUTION JS FILES -->

<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script src="js/rev-script-1.js"></script>
<script>
    window.jQuery = window.$ = jQuery;
    (function ($) {
        "use strict";
        //Preloader
        Royal_Preloader.config({
            mode: 'progress',
            background: '#1a1a1a',
        });
    })(jQuery);
</script>
</body>
</html>
