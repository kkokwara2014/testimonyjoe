@extends('frontend.layout.main')

@section('title','Contact Us')

@section('content')

<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('bootstrap_assets/img/bg-img/2.jpg')}});">
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
            <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section class="poca-contact-area mt-50 mb-100">
    <div class="container">
      {{-- <div class="row">
        <div class="col-12">
          <div class="google-maps mb-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11956.9355465873!2d24.0768412544878!3d56.9550599906977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z4Kaw4Ka_4KaX4Ka-LCDgprLgp43gpq_gpr7gpp_gp43gpq3gpr_gpoY!5e0!3m2!1sbn!2sbd!4v1543911160102"
              allowfullscreen></iframe>
          </div>
        </div>
      </div> --}}

      <div class="row">
        <!-- Contact Information -->
        <div class="col-12 col-md-6">
          <div class="contact-information">
            <div class="contact-heading mb-50">
              <h2>Contact Details</h2>
              <h6>We will be happy to assist you with any question</h6>
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing esed diam nonumy eirmod tempor invidunt ut labore et dolore magna. Integer vehicula mauris libero, at molestie eros imperdiet sit amet. Suspendisse mattis ante sit amet ante.</p>
            </div>


            <h5><span class="fa fa-map-marker"></span> 40 Baria Sreet 133/2 NewYork City, US</h5>
            <h5><span class="fa fa-phone"></span> +01-3-8888-6868</h5>
            <h5><span class="fa fa-envelope"></span> talktous@testimonyjoe.com </h5>
            {{-- <h5><span class="fa fa-map-marker"></span> Mon - Fri: 8:00 AM to 6:00 PM</h5> --}}
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-12 col-md-6">
          <div class="contact-form">
            <div class="contact-heading">
              <h2>Get In Touch</h2>
              <h5>Don't hesitate to contact us</h5>
            </div>
            <!-- Form -->
            <form action="#" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-12">
                  <input type="text" name="sender" class="form-control mb-30" placeholder="Your Name">
                </div>
                <div class="col-12">
                  <input type="email" name="email" class="form-control mb-30" placeholder="Your Email">
                </div>
                <div class="col-12">
                  <textarea name="messagebody" class="form-control mb-30" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn poca-btn">Send Message</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Area End ***** -->

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