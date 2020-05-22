<div class="classy-nav-container breakpoint-off">
    <div class="container">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="razoNav">

            <!-- Logo -->
            <a class="nav-brand" href="{{ route('index') }}"><img src="{{ asset('bootstrap2_assets/img/core-img/logo.png') }}" alt=""></a>

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
                        <li><a href="{{ route('index') }}"><span class="fa fa-home"></span></a></li>
                        <li><a href="#">About</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('abouttestimonyjoe') }}"> Testimony Joe</a></li>
                                <li><a href="{{ route('aboutholyghoststudio') }}"> Holyghost Studio</a></li>

                                <li><a href="#"> Equipment</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('aboutrental') }}"> Rentals</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('album') }}">Tracks</a></li>
                        <li><a href="{{ route('booking') }}">Booking</a></li>
                        <li><a href="{{ route('event') }}">Events</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('contactus') }}">Contact</a></li>
                        <li><a href="#"><span class="fa fa-user-circle-o"></span></a>
                            <ul class="dropdown">
                                <li><a href="{{ route('login') }}"><span class="fa fa-sign-in"></span> Login</a></li>

                            </ul>
                        </li>

                        {{-- <li><a href="#">More</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li><a href="#">- Home</a></li>
                                    <li><a href="#">- Charts</a></li>
                                    <li><a href="#">- Charts Details</a></li>
                                    <li><a href="#">- Podcast</a></li>
                                    <li><a href="#">- Podcast Details</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="#">- Show</a></li>
                                    <li><a href="#">- Event</a></li>
                                    <li><a href="#">- Blog</a></li>
                                    <li><a href="#">- Blog Details</a></li>
                                    <li><a href="#">- Home</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="#">- Charts</a></li>
                                    <li><a href="#">- Charts Details</a></li>
                                    <li><a href="#">- Podcast</a></li>
                                    <li><a href="#">- Podcast Details</a></li>
                                    <li><a href="#">- Show</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="#">- Show</a></li>
                                    <li><a href="#">- Event</a></li>
                                    <li><a href="#">- Blog</a></li>
                                    <li><a href="#">- Blog Details</a></li>
                                    <li><a href="#">- Home</a></li>
                                </ul>
                            </div>
                        </li> --}}

                    </ul>

                    <!-- Share Icon -->
                    <div class="social-share-icon">
                        <i class="social_share"></i>
                    </div>

                    <!-- Search Icon -->
                    {{-- <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                        <i class="icon_search"></i>
                    </div> --}}
                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>
