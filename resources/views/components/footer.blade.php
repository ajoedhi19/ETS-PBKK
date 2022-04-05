<footer class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
        <div class="container py-lg-4">
            <div class="row footer-top-29">
                <div class="col-lg-6 col-md-6 footer-list-29 footer-1 pr-lg-5">
                    <div class="footer-logo mb-3">
                        <a class="footer-brand-logo" href="index.html"><span class="sublog">C</span>ukurin</a>

                    </div>
                    <p class="pr-lg-5">
                        Memberikan pelayanan terbaik dengan moto <br />"Melayani Dengan Hati"
                    </p>
                    <div class="main-social-footer-29 mt-4">
                        <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                        <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                        <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5">
                    <h6 class="footer-title-29">
                        Stay Updated!
                    </h6>
                    <form action="#" method="post" class="subscribe-wthree pt-lg-2 mt-4">
                        <div class="d-md-flex flex-wrap subscribe-wthree-field">
                            <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                            <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- //footer -->
    
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
</footer>