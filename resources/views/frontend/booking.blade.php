@extends('frontend.layout.main')

@section('title','Booking')

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

                    {{-- for messages --}}
                    @include('admin.messages.success')

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
                                <form action="{{ route('save.bookings') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <input type="text" name="fullname" class="form-control mb-15"
                                                placeholder="Your Full Name" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <input type="email" name="email" class="form-control mb-15"
                                                placeholder="Your Email Address" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <input type="text" name="phone" class="form-control mb-15"
                                                placeholder="Your Phone Number" pattern="[0-9]+" maxlength="11"
                                                required>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <select name="eventtype" class="form-control mb-15" required>
                                                <option selected="disabled">Select Ceremony Type</option>
                                                <option value="">Anniversary</option>
                                                <option value="">Birthday Party</option>
                                                <option value="">Child Dedication</option>
                                                <option value="">House Warming</option>
                                                <option value="">Marriage</option>
                                            </select>

                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" name="eventdate" class="form-control mb-15"
                                                placeholder="Your Event Date" id="datepicker" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input type="text" name="eventtime" class="form-control mb-15 timepicker"
                                                placeholder="Your Event Time" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <select name="location" class="form-control mb-15" required>
                                                <option selected="disabled">Select Location</option>
                                                @foreach ($locations as $location)
                                                <option value="{{ $location->name }}">{{ $location->name }}</option>

                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-12">
                                            <textarea name="additionalinfo" class="form-control mb-15"
                                                placeholder="Additional Information"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn razo-btn btn-3 mt-15">Submit</button>
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
