@extends('frontend.layout.main')

@section('title','Testimonyjoe | Home')

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
                        <h2>Testimony Joe</h2>
                    </div>

                    <!-- Featured Post Area -->
                    {{-- <div class="featured-post-area bg-img bg-overlay mb-30"
                        style="background-image: url({{asset('bootstrap2_assets/img/bg-img/11.jpg')}});">
                    <!-- Post Overlay -->
                    <div class="post-overlay">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">The light and music exposition hits los
                            angeles in the fashion week</a>
                    </div>
                </div> --}}

                <div class="row">

                    <!-- Single Post Area -->
                    <div class="col-12 col-md-6">
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="#"><img src="{{ asset('bootstrap2_assets/img/bg-img/13.jpg') }}" alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="#" class="post-title">Drug bust leads police to underground
                                    tunnel</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <div class="col-12 col-md-6">
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="{{ asset('bootstrap2_assets/img/bg-img/14.jpg') }}"
                                        alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Hear abuse victims' messages for the
                                    Pope</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <div class="col-12 col-md-6">
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="{{ asset('bootstrap2_assets/img/bg-img/15.jpg') }}"
                                        alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">New Mexico uspects' attorneys file to
                                    have all</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post Area -->
                    <div class="col-12 col-md-6">
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="{{ asset('bootstrap2_assets/img/bg-img/16.jpg') }}"
                                        alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Trump tweets false white supremacist
                                    talking</a>
                            </div>
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

                <!-- Featured Post Area -->
                {{-- <div class="featured-post-area small-featured-post bg-img bg-overlay mb-30"
                    style="background-image: url({{ asset('bootstrap2_assets/img/bg-img/12.jpg') }});">
                    <!-- Post Overlay -->
                    <div class="post-overlay">
                        <div class="post-meta">
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                        </div>
                        <a href="single-blog.html" class="post-title">Hawaii braces for Hurricane Lane</a>
                    </div>
                </div> --}}

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

<!-- Weekly Sehedule Area Start -->
{{-- <section class="razo-weekly-schedule-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="weekly-schedule-table table-responsive">
                    <!-- Section Heading -->
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Weekly Sehedule</h2>
                        </div>
                    </div>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <p>Monday</p>
                                </th>
                                <th scope="col">
                                    <p>Tuesday</p>
                                </th>
                                <th scope="col">
                                    <p>Wednesday</p>
                                </th>
                                <th scope="col">
                                    <p>Thursday</p>
                                </th>
                                <th scope="col">
                                    <p>Friday</p>
                                </th>
                                <th scope="col">
                                    <p>Saturday</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <p>As BBC Radio 5 live</p>
                                    <span>01:00 am - 02:30 am</span>
                                </th>
                                <td>
                                    <h5>Andrew Peach Birthday Surprise!</h5>
                                    <span>13:00 pm - 16:00 pm</span>
                                </td>
                                <td>
                                    <h5>As BBC Radio 5 live</h5>
                                    <span>23:00 pm - 02:00 am</span>
                                </td>
                                <td>
                                    <h5>Berkshire Sport: Extra Time</h5>
                                    <span>01:00 am - 03:30 am</span>
                                </td>
                                <td>
                                    <h5>As BBC Radio 5 live</h5>
                                    <span>01:00 am - 02:30 am</span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">
                                    <p>Berkshire Sport: Extra Time</p>
                                    <span>05:30 am - 06:30 am</span>
                                </th>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Tony Blackburn on BBC Radio</h5>
                                    <span>03:00 am - 05:00 am</span>
                                </td>
                                <td></td>
                                <td>
                                    <h5>Stereo Underground</h5>
                                    <span>03:00 am - 05:00 am</span>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <h5>BBC Music Introducing in</h5>
                                    <span>10:00 am - 12:00 pm</span>
                                </td>
                                <td>
                                    <h5>Stereo Underground</h5>
                                    <span>13:00 pm - 15:00 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <h5>Sport on BBC Radio Berkshire</h5>
                                    <span>07:00 am - 09:30 am</span>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">
                                    <p>Andrew Peach Birthday Surprise!</p>
                                    <span>13:00 pm - 16:00 pm</span>
                                </th>
                                <td>
                                </td>
                                <td>
                                    <h5>BBC Music Introducing in</h5>
                                    <span>17:00 pm - 20:00 pm</span>
                                </td>
                                <td>
                                    <h5>Andrew Peach Birthday Surprise!</h5>
                                    <span>13:00 pm - 16:00 pm</span>
                                </td>
                                <td></td>
                                <td>
                                    <h5>Danyl Johnson and Natasha Watts</h5>
                                    <span>13:00 pm - 16:00 pm</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Weekly Sehedule Area End -->

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
                    <a href="#" class="btn show-all-btn">Show All Blog</a>
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
