<!-- Nav Start -->
<div class="classynav">
    <ul id="nav">
        <li class="{{ (request()->is('/'))?'active':'' }}"><a href="{{url('/')}}">Home</a></li>
        <li><a href="#">About</a>
            <ul class="dropdown">
                <li class="{{ (request()->is('about/testimonyjoe'))?'active':'' }}"><a
                        href="{{url('about/testimonyjoe')}}">- Testimony Joe</a></li>
                <li class="{{ (request()->is('about/holyghoststudio'))?'active':'' }}"><a
                        href="{{url('about/holyghoststudio')}}">- Holy Ghost Studio</a>
                </li>

                <li><a href="#">- Dropdown</a>
                    <ul class="dropdown">
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a>
                            <ul class="dropdown">
                                <li><a href="#">- Even Dropdown</a></li>
                                <li><a href="#">- Even Dropdown</a></li>
                                <li><a href="#">- Even Dropdown</a></li>
                                <li><a href="#">- Even Dropdown</a></li>
                            </ul>
                        </li>
                        <li><a href="#">- Dropdown Item</a></li>
                        <li><a href="#">- Dropdown Item</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a href="#">Albums</a>
            <ul class="dropdown">
                <li class="{{ (request()->is('album'))?'active':'' }}"><a href="{{url('album')}}">- All Albums</a></li>
            </ul>
        </li>
        <li><a href="#">Event</a>
            <ul class="dropdown">
                <li class="{{ (request()->is('event'))?'active':'' }}"><a href="{{url('event')}}">- Upcoming Events</a>
                </li>
                <li class="{{ (request()->is('event'))?'active':'' }}"><a href="{{url('event')}}">- On-going Event</a>
                </li>
                <li class="{{ (request()->is('event'))?'active':'' }}"><a href="{{url('event')}}">- Archived Event</a>
                </li>
            </ul>
        </li>
        <li class="{{ (request()->is('gallery'))?'active':'' }}"><a href="{{url('gallery')}}">Gallery</a></li>
        <li class="{{ (request()->is('contact'))?'active':'' }}"><a href="{{url('contact')}}">Contact</a></li>
    </ul>

    <!-- Top Search Area -->
    <div class="top-search-area">
        <form action="index.html" method="post">
            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>

    <!-- Top Social Area -->
    <div class="top-social-area">
        <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
        <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
        {{-- <a href="#" class="fa fa-pinterest" aria-hidden="true"></a> --}}
        <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
        {{-- <a href="#" class="fa fa-youtube-play" aria-hidden="true"></a> --}}
    </div>

</div>
<!-- Nav End -->