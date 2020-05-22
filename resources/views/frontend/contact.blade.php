@extends('frontend.layout.main')

@section('title','Contact Us')

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
                        <h2>Contact Us</h2>
                    </div>
                    <p style="text-align: justify">
                        We would be highly grateful to read from you; therefore, we
                        implore you to leave a message for us and we surely will get
                        back to you. Thank you.
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
                                        <div class="col-12">
                                            <input type="text" name="sender" class="form-control mb-30"
                                                placeholder="Your Full Name" autofocus>
                                        </div>
                                        <div class="col-12">
                                            <input type="email" name="email" class="form-control mb-30"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="messagebody" class="form-control mb-30"
                                                placeholder="Your message"></textarea>


                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn razo-btn btn-3 mt-15">Send Message</button>
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
