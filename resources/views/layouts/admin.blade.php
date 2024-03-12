<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dynamic Floors</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{{asset('assets/css/vendor/material-design-iconic-font.min.css')}}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/cryptocurrency-icons.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.css')}}">
    @stack('head')
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/helper.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body class="skin-dark">

<div class="main-wrapper">

    <!-- Header Section Start -->
    <div class="header-section">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo (Header Left) Start -->
                <div class="header-logo col-auto">
                    <a href="{{url('/admin')}}">
                        <img class="img-fluid" src="{{asset('logo.png')}}" alt="">
                        <img class="img-fluid" src="{{asset('logo.png')}}" class="logo-light" alt="">
                    </a>
                </div><!-- Header Logo (Header Left) End -->

                <!-- Header Right Start -->
                <div class="header-right flex-grow-1 col-auto">
                    <div class="row justify-content-between align-items-center">

                        <!-- Side Header Toggle & Search Start -->
                        <div class="col-auto">
                            <div class="row align-items-center">

                                <!--Side Header Toggle-->
                                <div class="col-auto">
                                    <button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button>
                                </div>

                                <!--Header Search-->
                                <div class="col-auto">

                                    <div class="header-search">

                                        <button class="header-search-open d-block d-xl-none"><i
                                                class="zmdi zmdi-search"></i></button>

                                        <div class="header-search-form">
                                            <form action="#">
                                                <input type="text" placeholder="Search Here">
                                                <button><i class="zmdi zmdi-search"></i></button>
                                            </form>
                                            <button class="header-search-close d-block d-xl-none"><i
                                                    class="zmdi zmdi-close"></i></button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div><!-- Side Header Toggle & Search End -->

                        <!-- Header Notifications Area Start -->
                        <div class="col-auto">

                            <ul class="header-notification-area">

                                <!--Notification-->
                                <li class="adomx-dropdown col-auto">
                                    <a class="toggle" href="#"><i class="zmdi zmdi-notifications"></i><span
                                            class="badge"></span></a>

                                    <!-- Dropdown -->
                                    <div class="adomx-dropdown-menu dropdown-menu-notifications">
                                        <div class="head">
                                            <h5 class="title">You have 4 new notification.</h5>
                                        </div>
                                        <div class="body custom-scroll">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-notifications-none"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-block"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-info-outline"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shield-security"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-notifications-none"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-block"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-info-outline"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shield-security"></i>
                                                        <p>There are many variations of pages available.</p>
                                                        <span>11.00 am   Today</span>
                                                    </a>
                                                    <button class="delete"><i class="zmdi zmdi-close-circle-o"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="footer">
                                            <a href="#" class="view-all">view all</a>
                                        </div>
                                    </div>

                                </li>

                                <!--User-->
                                <li class="adomx-dropdown col-auto">
                                    <a class="toggle" href="#">
                                            <span class="user">
                                        <span class="avatar">
                                            <img src="assets/images/avatar/avatar-1.jpg" alt="">
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">@if(auth()->check()) {{auth()->user()->name}} @endif</span>
                                            </span>
                                    </a>

                                    <!-- Dropdown -->
                                    <div class="adomx-dropdown-menu dropdown-menu-user">
                                        <div class="head">
                                            <h5 class="name"><a href="#">@if(auth()->check()) {{auth()->user()->name}} @endif</a></h5>
                                        </div>
                                        <div class="body">

                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-settings"></i>Setting</a></li>


                                                <li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    <a href="route('logout')"
                                                       onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="zmdi zmdi-lock-open"></i>Sing out</a>
                                                    </form>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                </li>

                            </ul>

                        </div><!-- Header Notifications Area End -->

                    </div>
                </div><!-- Header Right End -->

            </div>
        </div>
    </div><!-- Header Section End -->
    <!-- Side Header Start -->
    <div class="side-header show">
        <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
        <!-- Side Header Inner Start -->
        <div class="side-header-inner custom-scroll">

            <nav class="side-header-menu" id="side-header-menu">
                <ul>
                    <li class="has-sub-menu"><a href="{{url('/admin')}}"><i class="ti-home"></i>
                            <span>Dashboard</span></a></li>
                    <li><a href="{{url('/admin/floors')}}"> <span>Floors</span></a></li>
                    <li><a href="{{url('/admin/brands')}}"> <span>Brands</span></a></li>
                    <li><a href="{{url('/admin/colors')}}"> <span>Colors</span></a></li>
                    <li><a href="{{url('/admin/cleaners')}}"> <span>Cleaners</span></a></li>
                    <li><a href="{{url('/admin/accessories')}}"> <span>Accessories</span></a></li>
                    <li><a href="{{url('/admin/profiles')}}"> <span>Profiles</span></a></li>
                    <li><a href="{{url('/admin/services')}}"> <span>Services</span></a></li>
                    <li><a href="{{url('/admin/wall_decor')}}"> <span>Wall Decor</span></a></li>
                    <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span>Products</span></a>
                        <ul class="side-header-sub-menu">
                            <li><a href="{{url('/admin/products')}}"><span>Products</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div><!-- Side Header Inner End -->
    </div><!-- Side Header End -->

    @yield('content')

<!-- Footer Section Start -->
    <div class="footer-section">
        <div class="container-fluid">

            <div class="footer-copyright text-center">
                <p class="text-body-light">{{date('Y')}} &copy; <a
                        href="https://themeforest.net/user/codecarnival">Dynamic floors</a></p>
            </div>

        </div>
    </div><!-- Footer Section End -->

</div>

<!-- JS
============================================ -->

<!-- Global Vendor, plugins & Activation JS -->
<script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<!--Plugins JS-->
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/tippy4.min.js.js')}}"></script>
@stack('scripts')
<!--Main JS-->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
