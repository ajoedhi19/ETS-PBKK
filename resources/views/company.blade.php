@extends('layout.app')

@section('container')
<section class="w3l-index2" id="about1">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="w3l-header-sec text-center mb-md-5 mb-4">
                <h6 class="title-subhny mx-0">Our Story</h6>
                <h3 class="title-w3l mx-0">About Company</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 left-wthree-img">
                    <div class="position-relative">
                        <img src="/images/ab3.jpg" alt="" class="radius-image img-fluid">

                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5 align-self">
                    <h4 class="sub-title-w3l mx-0">
                        Starrk Company
                    </h4>
                    <p class="mt-4">
                        Starrrk Comapany merupakan perusahaan startup yang bergerak 
                        pada bidang online service yang akan memberikan kemudahan layanan 
                        dan kenyamanan bagi para pengguna untuk meringankan pekerjaan pengguna 
                    </p>

                    <a href="Company.cshtml" class="btn btn-style btn-primary mt-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home page block1 -->
<!-- //home page block1 -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/theme-change.js"></script>
<!--search-bar-->
<script src="/js/search.js"></script>
<!--//search-bar-->
<!-- owl carousel -->
<script src="/js/owl.carousel.js"></script>
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

<!-- //script for tesimonials carousel slider -->
<!-- stats number counter-->
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.countup.js"></script>
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
<script src="/js/bootstrap.min.js"></script>
@endsection

