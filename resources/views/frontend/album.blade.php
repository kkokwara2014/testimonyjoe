@extends('frontend.layout.main')

@section('title','Tracks')

@section('content')

<!-- ****** About Us Area Start ******* -->
<section class="about-us-area section-padding-0-80 mt-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="about-us-content">
                    <h1>@yield('title')</h1>
                    <hr>

                    <!-- Music Charts Area Start -->
                    <section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax"
                        style="background-image: url({{ asset('bootstrap2_assets/img/bg-img/31.jpg') }});">
                        <div class="container">
                            {{-- <div class="row"> --}}
                                <!-- Section Heading -->
                                {{-- <div class="col-sm-6">
                                    <div class="section-heading white">
                                        <h2>Tracks</h2>
                                    </div>
                                </div> --}}
                                <!-- Show All Button -->
                                {{-- <div class="col-sm-6">
                                    <div class="show-all-button mb-50 text-right">
                                        <a href="#" class="btn show-all-btn"><span class="fa fa-eye"></span> All
                                            Tracks</a>
                                    </div>
                                </div> --}}
                            {{-- </div> --}}

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
                                                    <source
                                                        src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
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
                                                    <source
                                                        src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
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
                                                    <source
                                                        src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
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
                                                    <source
                                                        src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
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
                                                    <source
                                                        src="{{ asset('bootstrap2_assets/audio/dummy-audio.mp3') }}">
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


                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="about-us-content">

                    <h1>Useful Links</h1>
                    <hr>

                    @include('frontend.layout.usefullinks')

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ****** About Us Area End ****** -->
<!-- ***** Newsletter Area Start ***** -->
<section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax"
    style="background-image: url({{asset('bootstrap_assets/img/bg-img/15.jpg')}});">
    {{-- <div class="container">
                <div class="row align-items-center">
                    <!-- Newsletter Content -->
                    <div class="col-12 col-lg-6">
                        <div class="newsletter-content mb-50">
                            <h2>Sign Up To Newsletter</h2>
                            <h6>Subscribe to receive info on our latest news and episodes</h6>
                        </div>
                    </div>
                    <!-- Newsletter Form -->
                    <div class="col-12 col-lg-6">
                        <div class="newsletter-form mb-50">
                            <form action="#" method="post">
                                <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
                                <button type="submit" class="btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}
</section>
<!-- ***** Newsletter Area End ***** -->

@endsection
