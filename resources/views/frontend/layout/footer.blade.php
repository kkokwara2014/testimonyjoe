<!-- Footer Area Start -->
<footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-6 col-xl-6">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img
                                src="{{ asset('bootstrap2_assets/img/core-img/logo2.png') }}" alt=""></a>

                        <p class="mb-30">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>

                        <!-- Footer Content -->
                        <div class="footer-content">

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex">
                                <div class="icon">
                                    <i class="icon_pin"></i>
                                </div>
                                <div class="text">
                                    <p>24 No. Amazing Valley, Aewsome St. New York, USA</p>
                                </div>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex">
                                <div class="icon">
                                    <i class="icon_phone"></i>
                                </div>
                                <div class="text">
                                    <p>+447 123 4567890</p>
                                </div>
                            </div>
                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex">
                                <a href="#">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="icon">
                                                <i class="fa fa-whatsapp"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="text">
                                                <p>+447 123 4567890</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Single Contact Info -->
                            <div class="single-contact-info d-flex">
                                <div class="icon">
                                    <i class="icon_mail_alt"></i>
                                </div>
                                <div class="text">
                                    <p>info.colorlib@gmail.com</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-6 col-xl-6">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Facebook Feed</h4>

                        <!-- Single Twitter Feed -->
                        <div class="single-twitter-feed d-flex">
                            <div class="tweet-icon">
                                <i class="fa fa-facebook-official"></i>
                            </div>
                            <div class="tweet">
                                <p><a href="#">Kerem Suer</a> @kerem American conducts it first ever done strike Qaeda
                                </p>
                            </div>
                        </div>

                        <!-- Single Twitter Feed -->
                        <div class="single-twitter-feed d-flex">
                            <div class="tweet-icon">
                                <i class="fa fa-facebook-official"></i>
                            </div>
                            <div class="tweet">
                                <p><a href="#">Axel Hervelle</a> @axel_hervelle Tens of thousands attend rallies held in
                                    D.C.</p>
                            </div>
                        </div>

                        <!-- Single Twitter Feed -->
                        <div class="single-twitter-feed d-flex">
                            <div class="tweet-icon">
                                <i class="fa fa-facebook-official"></i>
                            </div>
                            <div class="tweet">
                                <p><a href="#">Chris Pratt</a> @chris_pratt Hundreds of protesters shut down meeting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Main Footer Area End -->

    <!-- Copywrite Text -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p>
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> testimonyjoe.com | All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- All JS Files -->

<!-- jQuery -->
<script src="{{ asset('bootstrap2_assets/js/jquery.min.js')}}"></script>
<!-- Popper -->
<script src="{{ asset('bootstrap2_assets/js/popper.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('bootstrap2_assets/js/bootstrap.min.js')}}"></script>
<!-- All Plugins -->
<script src="{{ asset('bootstrap2_assets/js/razo.bundle.js')}}"></script>
<!-- Active -->
<script src="{{ asset('bootstrap2_assets/js/default-assets/active.js')}}"></script>

<!-- datepicker -->
<script src="{{asset('admin_assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}">
</script>
<!-- bootstrap time picker -->
<script src="{{asset('admin_assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
      });
  }, 7000);

    $(function () {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

         //Time picker start time
    $('.timepicker').timepicker({
      showInputs: false,
    })
      })
</script>

</body>

</html>
