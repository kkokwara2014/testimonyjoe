<!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-80-0">
    <div class="container">
        <div class="row">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">About Us</h4>

                    <p>It is a long established fact that a reader will be distracted by the readable content.
                    </p>
                    <div class="copywrite-content">
                        <p>&copy;

                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | testimonyjoe.com
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Categories</h4>

                    <!-- Catagories Nav -->
                    <nav>
                        <ul class="catagories-nav">
                            <li><a href="#">Entrepreneurship</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Tutorials</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Lastest Episodes</h4>

                    <!-- Single Latest Episodes -->
                    <div class="single-latest-episodes">
                        <p class="episodes-date">December 9, 2018</p>
                        <a href="#" class="episodes-title">Episode 205 - See Ya In Three!</a>
                    </div>
                    <!-- Single Latest Episodes -->
                    <div class="single-latest-episodes">
                        <p class="episodes-date">December 8, 2018</p>
                        <a href="#" class="episodes-title">Episode 204 - See Ya In Two!</a>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Follow Us</h4>
                    <!-- Social Info -->
                    <div class="footer-social-info">
                        <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                class="fa fa-twitter"></i></a>
                        {{-- <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top"
                                    title="Pinterest"><i class="fa fa-pinterest"></i></a> --}}
                        <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                                class="fa fa-instagram"></i></a>
                        {{-- <a href="#" class="youtube" data-toggle="tooltip" data-placement="top"
                                    title="YouTube"><i class="fa fa-youtube-play"></i></a> --}}
                    </div>
                    <!-- App Download Button -->
                    <div class="app-download-button mt-30">
                        <a href="#"><img src="{{asset('bootstrap_assets/./img/core-img/app-store.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('bootstrap_assets/./img/core-img/google-play.png')}}" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- ******* All JS ******* -->
<!-- jQuery js -->
<script src="{{asset('bootstrap_assets/js/jquery.min.js')}}"></script>

<script src="{{asset('bootstrap_assets/js/popper.min.js')}}">
</script>

<script src="{{asset('bootstrap_assets/js/poca.bundle.js')}}"></script>
<script src="{{asset('bootstrap_assets/js/default-assets/active.js')}}"></script>


<!-- datepicker -->
<script src="{{asset('bootstrap_assets/js/bootstrap-datepicker.min.js')}}">
    // timepicker
<script src="{{asset('bootstrap_assets/js/jquery.timepicker.min.js')}}">
    
<script src="{{asset('bootstrap_assets/js/bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function(){
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    $('input.timepicker').timepicker({});
});
  
</script>
</body>

</html>