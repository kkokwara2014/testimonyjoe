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
                        <li><a href="#"><span class="fa fa-home"></span></a></li>
                        <li><a href="#">About</a>
                            <ul class="dropdown">
                                <li><a href="#"> Testimony Joe</a></li>
                                <li><a href="#"> Holyghost Studio</a></li>

                                <li><a href="#"> Equipment</a>
                                    <ul class="dropdown">
                                        <li><a href="#"> Rentals</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Albums</a></li>
                        <li><a href="{{ route('booking') }}">Booking</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="{{ route('contactus') }}">Contact</a></li>
                        <li><a href="#">More</a>
                            <div class="megamenu">
                                <ul class="single-mega cn-col-4">
                                    <li><a href="./index.html">- Home</a></li>
                                    <li><a href="./charts.html">- Charts</a></li>
                                    <li><a href="./single-charts.html">- Charts Details</a></li>
                                    <li><a href="./podcast.html">- Podcast</a></li>
                                    <li><a href="./single-podcast.html">- Podcast Details</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="./show.html">- Show</a></li>
                                    <li><a href="./events.html">- Event</a></li>
                                    <li><a href="./blog.html">- Blog</a></li>
                                    <li><a href="./single-blog.html">- Blog Details</a></li>
                                    <li><a href="./index.html">- Home</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="./charts.html">- Charts</a></li>
                                    <li><a href="./single-charts.html">- Charts Details</a></li>
                                    <li><a href="./podcast.html">- Podcast</a></li>
                                    <li><a href="./single-podcast.html">- Podcast Details</a></li>
                                    <li><a href="./show.html">- Show</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="./show.html">- Show</a></li>
                                    <li><a href="./events.html">- Event</a></li>
                                    <li><a href="./blog.html">- Blog</a></li>
                                    <li><a href="./single-blog.html">- Blog Details</a></li>
                                    <li><a href="./index.html">- Home</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                    <!-- Share Icon -->
                    <div class="social-share-icon">
                        <i class="social_share"></i>
                    </div>

                    <!-- Search Icon -->
                    <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                        <i class="icon_search"></i>
                    </div>
                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>
