@extends('frontend.layout.main')

@section('title','Booking')

@section('content')
<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay"
    style="background-image: url({{asset('bootstrap_assets/img/bg-img/2.jpg')}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h2 class="title mt-70">@yield('title')</h2>
            </div>
        </div>
    </div>
</div>
<div class="breadcumb--con">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ****** About Us Area Start ******* -->
<section class="about-us-area section-padding-0-80 mt-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="about-us-content">
                    {{-- <img src="{{asset('bootstrap_assets/img/bg-img/20.jpg')}}" class="mb-30" alt=""> --}}
                    <h1>Booking Form</h1>

                    <p>Please fill the form appropriately to book us for your ceremony.</p>
                    <br>

                    <div class="row">

                        <div class="col-md-7">
                            <!-- Form -->
                            <form action="#" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="fullname" class="form-control mb-30"
                                            placeholder="Your Full Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control mb-30"
                                            placeholder="Your Email">
                                    </div>
                                    <div class="col-12">
                                        <input type="tel" name="phone" class="form-control mb-30"
                                            placeholder="Your Phone Number" maxlength="11">
                                    </div>
                                    <div class="col-12">
                                        <input type="date" name="dateofceremony" class="form-control mb-30">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control mb-30"
                                            placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn poca-btn">Send Booking</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5"></div>
                    </div>


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