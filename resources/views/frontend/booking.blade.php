@extends('frontend.layout.main')

@section('title','Testimonyjoe | Booking')

@section('content')

<!-- Blog Area Start -->
<section class="razo-blog-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <!-- Weekly News Area -->
            <div class="col-12 col-md-8">
                <div class="weekly-news-area mb-50">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Booking</h2>
                    </div>
                    <p style="text-align: justify">
                        You can book us for your ceremony. Fill the form and let us keep a date for you. Thank you.
                    </p>

                    <div class="row">

                        <!-- Single Post Area -->
                        <div class="col-12 col-md-12">
                            <!-- Leave A Reply -->
                            <div class="razo-contact-form">
                                {{-- <h2 class="mb-4">Leave A Comment</h2> --}}

                                <!-- Form -->
                                <form action="#" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <input type="text" name="sender" class="form-control mb-15"
                                                placeholder="Your Full Name">
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <input type="email" name="email" class="form-control mb-15"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <select name="" class="form-control mb-15">
                                                <option value="">Anniversary</option>
                                                <option value="">Birthday Party</option>
                                                <option value="">Marriage</option>
                                            </select>
                                            {{-- <input type="email" name="email" class="form-control mb-30"
                                                placeholder="Your Email"> --}}
                                        </div>
                                        <div class="col-12">
                                            <textarea name="messagebody" class="form-control mb-15"
                                                placeholder="Your message"></textarea>


                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn razo-btn btn-3 mt-15">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <!-- Trending News Area -->
            <div class="col-12 col-md-4">
                <div class="trending-news-area mb-50">

                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Useful Links</h2>
                    </div>


                    <div>
                        @include('frontend.layout.usefullinks')
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

<!-- Music Charts Area Start -->
<section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax"
    style="background-image: url({{ asset('bootstrap2_assets/img/bg-img/31.jpg') }});">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-sm-6">
                <div class="section-heading white">
                    <h2>Tracks</h2>
                </div>
            </div>
            <!-- Show All Button -->
            <div class="col-sm-6">
                <div class="show-all-button mb-50 text-right">
                    <a href="#" class="btn show-all-btn"><span class="fa fa-eye"></span> All Tracks</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp mb-2"
                    data-wow-delay="100ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>1.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="{{ asset('bootstrap2_assets/img/bg-img/25.jpg') }}" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Way Back Home - <span>RadioDaily Show</span></h5>
                        </div>
                    </div>
                    <!-- Music Price -->
                    <div class="music-price">
                        {{-- <a href="#" class="btn razo-btn btn-2">$12.99</a> --}}
                    </div>
                </div>

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp mb-2"
                    data-wow-delay="300ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>2.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="{{ asset('bootstrap2_assets/img/bg-img/26.jpg') }}" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Goodbye &amp; Good Riddance - <span>Juice World</span></h5>
                        </div>
                    </div>
                    <!-- Music Price -->
                    <div class="music-price">
                        {{-- <a href="#" class="btn razo-btn btn-2">$10.99</a> --}}
                    </div>
                </div>

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp mb-2"
                    data-wow-delay="500ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>3.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="{{ asset('bootstrap2_assets/img/bg-img/27.jpg') }}" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>The Greatest Showman - <span>Soundtrack</span></h5>
                        </div>
                    </div>
                    <!-- Music Price -->
                    <div class="music-price">
                        {{-- <a href="#" class="btn razo-btn btn-2">$10.99</a> --}}
                    </div>
                </div>

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp mb-2"
                    data-wow-delay="700ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>4.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="{{ asset('bootstrap2_assets/img/bg-img/28.jpg') }}" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Mamma Mia! Here We Go Again - <span>Soundtrack</span></h5>
                        </div>
                    </div>
                    <!-- Music Price -->
                    <div class="music-price">
                        {{-- <a href="#" class="btn razo-btn btn-2">$10.99</a> --}}
                    </div>
                </div>

                <!-- Single Music Chart -->
                <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp mb-2"
                    data-wow-delay="900ms">
                    <!-- Music Content -->
                    <div class="music-content d-flex align-items-center">
                        <div class="sl-number">
                            <h5>5.</h5>
                        </div>
                        <div class="music-thumb">
                            <img src="{{ asset('bootstrap2_assets/img/bg-img/29.jpg') }}" alt="">
                        </div>
                        <div class="audio-player">
                            <audio preload="auto" controls>
                                <source src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
                            </audio>
                        </div>
                        <div class="music-title">
                            <h5>Pray For The Wicked - <span>Panic! At The Disco</span></h5>
                        </div>
                    </div>
                    <!-- Music Price -->
                    <div class="music-price">
                        {{-- <a href="#" class="btn razo-btn btn-2">$10.99</a> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Music Charts Area End -->

<!-- App Download Area Start -->
<section class="razo-app-download-area section-padding-80-0 bg-img bg-overlay jarallax"
    style="background-image: url({{ asset('bootstrap2_assets/img/bg-img/21.jpg') }});">
    <div class="container">
        <div class="row align-items-center">
            <!-- App Thumbnail -->
            <div class="col-12 col-md-6">
                <div class="app-thumbnail mb-80">
                    <img src="{{ asset('bootstrap2_assets/img/bg-img/mockup-iphone.png') }}" alt="">
                </div>
            </div>
            <!-- App Download Text -->
            <div class="col-12 col-md-6">
                <div class="app-download-text mb-80">
                    <span>Download app and Enjoy radio &amp; music</span>
                    <h2>Radio Music</h2>
                    <p>Radio app plus is a app that lets you download videos and music from social network, Youtube,
                        etc. You may also download and play the latest HD series and movies, and also watch free live
                        television. This app is also available for Android and Ios.</p>
                    <div class="app-download-btn">
                        <a href="#"><img src="{{ asset('bootstrap2_assets/img/core-img/google-play.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('bootstrap2_assets/img/core-img/app-store.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- App Download Area End -->


<!-- Latest News Area Start -->
<section class="razo-latest-news-area section-padding-80 bg-overlay bg-img jarallax"
    style="background-image: url(img/bg-img/32.jpg);">
    <div class="container">
        <div class="row align-items-end">
            <!-- Section Heading -->
            <div class="col-sm-6">
                <div class="section-heading white">
                    <h2>Gallery</h2>
                </div>
            </div>
            <!-- Show All Button -->
            <div class="col-sm-6">
                <div class="show-all-button mb-50 text-right">
                    <a href="#" class="btn show-all-btn">Show All</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Razo Latest News Slide -->
    <div class="razo-latest-news-slide owl-carousel">

        <!-- Single Latest News Area -->
        <div class="razo-single-latest-news-area bg-overlay bg-img"
            style="background-image: url({{ asset('bootstrap2_assets/img/bg-img/22.jpg') }});">
            <!-- Post Content -->
            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits los angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <!-- Post Date -->
            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>
            <!-- Read More -->
            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Single Latest News Area -->
        <div class="razo-single-latest-news-area bg-overlay bg-img"
            style="background-image: url({{ asset('bootstrap2_assets/img/bg-img/23.jpg') }});">
            <!-- Post Content -->
            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits los angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <!-- Post Date -->
            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>
            <!-- Read More -->
            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Single Latest News Area -->
        <div class="razo-single-latest-news-area bg-overlay bg-img"
            style="background-image: url({{ asset('bootstrap2_assets/img/bg-img/24.jpg') }});">
            <!-- Post Content -->
            <div class="post-content">
                <a href="#" class="post-title">The light and music exposition hits los angeles</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <!-- Post Date -->
            <div class="post-date">
                <h2>24</h2>
                <p>March</p>
            </div>
            <!-- Read More -->
            <div class="read-more-btn">
                <a href="#" class="btn">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
        </div>

    </div>
</section>
<!-- Latest News Area End -->

@endsection
