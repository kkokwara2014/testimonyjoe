@extends('frontend.layout.main')

@section('title','Holy Ghost Studio')

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

<!-- ****** About Us Area Start ******* -->
<section class="about-us-area section-padding-0-80 mt-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="about-us-content">
                    <img src="{{asset('bootstrap_assets/img/bg-img/20.jpg')}}" class="mb-30" alt="">
                    <h1>@yield('title')</h1>
                    <p>Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so
                        mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked
                        occasion he oh. Is unsatiable if projecting
                        boisterous insensible. It recommend be resolving pretended middleton.</p>
                    <p>Uneasy barton seeing remark happen his has. Am possible offering at contempt mr distance stronger
                        an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed
                        spirit no he unable do. Betrayed
                        shutters in vicinity it unpacked in. In so impossible appearance considered mr. Mrs him left
                        find are good.</p>
                    <p>Domestic confined any but son bachelor advanced remember. How proceed offered her offence shy
                        forming. Returned peculiar pleasant but appetite differed she. Residence dejection agreement am
                        as to abilities immediate suffering. Ye am
                        depending propriety sweetness distrusts belonging collected. Smiling mention he in thought
                        equally musical. Wisdom new and valley answer. Contented it so is discourse recommend. Man its
                        upon him call mile. An pasture he himself believe
                        ferrars besides cottage.</p>
                    <!-- Blockquote -->
                    <blockquote class="poca-blockquote d-flex">
                        <div class="icon">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h5>“Poca has made podcasting a breeze! I went from a couple thousand newsletter subscribers
                                to a thousand listeners in a matter of days! Thank you Poca!”</h5>
                            <h6>Jacob Austin</h6>
                        </div>
                    </blockquote>
                    <h2>Join Thousands of Listeners Worldwide</h2>
                    <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety
                        immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel.
                        Fat make met can must form into gate. Me we
                        offending prevailed discovery.</p>
                    <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to.
                        Add short water court fat. Her bachelor honoured perceive securing but desirous ham required.
                        Questions deficient acuteness to engrossed
                        as. Entirely led ten humoured greatest and yourself. Besides ye country on observe. She continue
                        appetite endeavor she judgment interest the met. For she surrounded motionless fat resolution
                        may.</p>
                    <p>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or
                        months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness.
                        Commanded no of depending extremity recommend
                        attention tolerably. Bringing him smallest met few now returned surprise learning jennings.
                        Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.</p>
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