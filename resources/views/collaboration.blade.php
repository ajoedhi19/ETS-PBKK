@extends('layout.app')
@section('container')
<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
        </ul>
    </div>
</section>
<!--//inner-page-->
<!-- /contact-section -->
<section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="w3l-header-sec text-center mb-md-5 mb-4">
            <h6 class="title-subhny mx-0">Send Us Message</h6>
            <h3 class="title-w3l mx-0">Contact Us</h3>
            <h5 >Kami sangat terbuka untuk pihak yang ingin bekerja sama dengan kami ataupun yang ingin bekerja untuk kami</h5>
            <h5 >Jika ingin menghubungi kami bisa dengan mengisi form dibawah ini ataupun menghubungi info alamat yang terletak di bawah form</h5>
        </div>
        <div text-center mb-md-5 mb-4>

        </div>
        <div class="contact-grids d-grid">
            <div class="contact-left-img">
                <img src="/images/b1.jpg" class="img-fluid radius-image" alt="">
            </div>
            <div class="contact-right">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                    <div class="input-grids">

                        <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                               required="" />
                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                               class="contact-input" required="" />
                        <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                               required="" />
                        <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone Number*" class="contact-input"
                               required="" />
                    </div>
                    <div class="form-input">
                        <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                                  required=""></textarea>
                    </div>
                    <div class="form-buttonhny text-lg-right">
                        <button class="btn btn-style btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="contact-left mt-5 pt-lg-5">
            <div class="w3l-header-sec text-center mb-md-5 mb-4">
                <h6 class="title-subhny mx-0">Find Us</h6>
                <h3 class="title-w3l mx-0">Address Info</h3>
            </div>
            <div class="cont-details">
                <div class="cont-top margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Company Address</h6>
                        <p>Jalan Menteng Raya no 51 Jakarta</p>
                    </div>
                </div>
                <div class="cont-top margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Call Us</h6>
                        <p><a href="tel:+(021) 123456">+(021) 123456</a></p>
                    </div>
                </div>
                <div class="cont-top margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-envelope-o"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Email Us</h6>
                        <p><a href="infostarrk@starrk.ac.id" class="mail">infostarrk@starrk.ac.id</a></p>
                    </div>
                </div>
                <div class="cont-top margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-life-ring"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Customer Support</h6>
                        <p><a href="infostarrk@starrk.ac.id" class="mail">infostarrk@starrk.ac.id</a></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<script src="/jquery-3.3.1.min.js"></script>
<script src="/js/theme-change.js"></script>
<!--search-bar-->
<script src="/js/search.js"></script>
<!--//search-bar-->
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