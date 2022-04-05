@extends('layout.app')
@section('container')
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>We Make Your Hair Look Great! </h5>
                                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2 mb-lg-5" href="#read">
                                        Contact Us
                                    </a>
                                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2 mb-lg-5" href="about.html">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>
                                        We Make Your Hair
                                        Look Perfect
                                    </h5>
                                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2 mb-lg-5" href="#read">
                                        Contact Us
                                    </a>
                                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2 mb-lg-5" href="Profile.cshtml">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>We Make Your Hair Look Awesome!</h5>
                                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2 mb-lg-5" href="#read">
                                        Contact Us
                                    </a>
                                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2 mb-lg-5" href="Profile.cshtml">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>
                                        We Make Your Hair
                                        Look Perfect
                                    </h5>
                                    <a class="btn btn-style btn-white mt-sm-5 mt-4 mr-2 mb-lg-5" href="#read">
                                        Contact Us
                                    </a>
                                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2 mb-lg-5" href="Profile.cshtml">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->




<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/theme-change.js"></script>
<!--search-bar-->
<script src="assets/js/search.js"></script>
<!--//search-bar-->
<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          667: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    })
</script>
<!-- //script -->
<!-- stats number counter-->
<script src="~/js/jquery.waypoints.min.js"></script>
<script src="~/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats number counter -->
<!--/MENU-JS-->
<script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
</script>
@endsection