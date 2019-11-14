<!-- Nav Start -->
<div class="classynav">
    <ul id="nav">
        <li class="current-item"><a href="{{route('index')}}">Home</a></li>
        <li><a href="#">About</a>
            <ul class="dropdown">
                <li><a href="{{route('abouttestimonyjoe')}}">- Testimony Joe</a></li>
                <li><a href="{{route('aboutholyghoststudio')}}">- Holy Ghost Studio</a>
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
            <li><a href="{{route('album')}}">- All Albums</a></li>
            </ul>
        </li>
        <li><a href="#">Event</a>
            <ul class="dropdown">
            <li><a href="{{route('event')}}">- Upcoming Events</a></li>
                <li><a href="{{route('event')}}">- On-going Event</a></li>
                <li><a href="{{route('event')}}">- Archived Event</a></li>
            </ul>
        </li>
    <li><a href="{{route('gallery')}}">Gallery</a></li>
    <li><a href="{{route('contact')}}">Contact</a></li>
    </ul>

    <!-- Top Search Area -->
    <div class="top-search-area">
        <form action="index.html" method="post">
            <input type="search" name="top-search-bar" class="form-control"
                placeholder="Search and hit enter...">
            <button type="submit"><i class="fa fa-search"
                    aria-hidden="true"></i></button>
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