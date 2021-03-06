@extends('layout.app')

@section('container')
<section class="w3l-index2" id="about1">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="w3l-header-sec text-center mb-md-5 mb-4">
                <h6 class="title-subhny mx-0">Our Story</h6>
                <h3 class="title-w3l mx-0">About Us</h3>
            </div>
            <div class="row">
                <div class="col-lg-6 left-wthree-img">
                    <div class="position-relative">
                        <img src="/images/ab2.jpg" alt="" class="radius-image img-fluid">

                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5 align-self">
                    <h4 class="sub-title-w3l mx-0">
                        Skilled Barbers Make
                        Great Beards
                    </h4>
                    <p class="mt-4">
                        Kami menyediakan layanan bercukur dengan pelayanan yang terbaik 
                        dan kualitas hasil yang terjamin. Karena Motto kami adalah <br />
                        "Melayani Dengan Hati"

                    </p>
                    <p class="mt-3">
                        Layanan bercukur kami bisa dilakukan di setiap gerai salon di seluruh Indonesia,
                        atau cukup dengan menghubungi kontak kami di nomor call center dan barber kami akan datang langsung ke rumah anda
                    </p>
                    <ul class="w3l-right-book mt-4 pl-3">
                        <li>Senin-Sabtu  -  7:30 am – 5pm</li>
                        <li> Minggu - 24 hours</li>
                        <li><p><a href="tel:+(021) 123456">+(021) 123456</a></p></li>
                    </ul>
                    <a href="about.html" class="btn btn-style btn-primary mt-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- home page block1 -->
<section id="about" class="home-services py-lg-5">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fa fa-users"></span>
                        </div>
                        <div class="info">
                            <p>01</p>
                            <h4><a href="#url">Skilled Barbers</a></h4>
                        </div>
                    </div>
                    <p class="mt-3">Kami menyediakan barber yang berpengalaman tinggi.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fa fa-shield"></span>
                        </div>
                        <div class="info">
                            <p>02</p>
                            <h4><a href="#url">Hair Stylists</a></h4>

                        </div>
                    </div>
                    <p class="mt-3">Kami memberikan berbagai macam pilihan gaya rambut.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                <div class="box-wrap">
                    <div class="box-wrap-grid">
                        <div class="icon">
                            <span class="fa fa-thermometer-full"></span>
                        </div>
                        <div class="info">
                            <p>03</p>
                            <h4><a href="#url">Beard Grooming</a></h4>
                        </div>
                    </div>
                    <p class="mt-3">Kami menyediakan perawatan janggut terbaik.</p>
                </div>
            </div>
        </div>
    </div>
</section>
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