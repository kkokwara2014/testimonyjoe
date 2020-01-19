<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="testimonyjoe">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>@yield('title')</title>

        <!-- Favicon -->
        <link rel="icon" href="{{asset('bootstrap_assets/img/core-img/favicon.ico')}}">

        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{asset('bootstrap_assets/style.css')}}">

        <!-- Date Picker -->
    <link rel="stylesheet"
    href="{{asset('bootstrap_assets/css/bootstrap-datepicker.min.css')}}">

        <!-- Date Picker -->
    <link rel="stylesheet"
    href="{{asset('bootstrap_assets/css/jquery.timepicker.min.css')}}">

    </head>

    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-thumbnail">
                <img src="{{asset('bootstrap_assets/img/core-img/preloader.png')}}" alt="">
            </div>
        </div>


        <!-- ***** Header Area Start ***** -->
        <header class="header-area">
            <!-- Main Header Start -->
            <div class="main-header-area">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="pocaNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="#"><img
                                src="{{asset('bootstrap_assets/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="current-item"><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="">About</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('abouttestimonyjoe')}}">- Testimony Joe</a></li>
                                            <li><a href="{{route('aboutholyghoststudio')}}">- Holy Ghost Studio</a></li>
                                            <li><a href="{{route('aboutrentals')}}">- Rentals</a></li>
                                            
{{--                                             
                                            <li><a href="#">- Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">- Even Dropdown</a></li>
                                                            <li><a href="#">- Even Dropdown</a></li>
                                                            <li><a href="#">- Even Dropdown</a></li>
                                                            <li><a href="#">- Even Dropdown</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                    <li><a href="#">- Dropdown Item</a></li>
                                                </ul>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    <li><a href="{{route('album')}}">Album</a></li>
                                    <li><a href="{{route('booking')}}">Booking</a></li>
                                    <li><a href="{{route('event')}}">Event</a></li>
                                    <li><a href="{{route('gallery')}}">Gallery</a></li>
                                    {{-- <li><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="#">- Blog</a></li>
                                            <li><a href="#">- Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>

                                <!-- Top Search Area -->
                                <div class="top-search-area">
                                    <form action="index.html" method="post">
                                        <input type="search" name="top-search-bar" class="form-control"
                                            placeholder="Search and hit enter...">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>

                                <!-- Top Social Area -->
                                <div class="top-social-area">
                                    <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                                    <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                                    <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->