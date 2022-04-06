<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width" />
    <title>@ViewBag.Title</title>
    <link href="/css/style-starter.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <a href="/fonts/fontawesome-webfont.eot"></a>
    <a href="/fonts/fontawesome-webfont.ttf"></a>
    <a href="/fonts/fontawesome-webfont.woff"></a>
    <a href="/fonts/fontawesome-webfont.woff2"></a>
    <a href="/fonts/FontAwesome.otf"></a>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery.countup.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/theme-change.js"></script>
    <link href="//fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap"
          rel="stylesheet">
</head>
<body>
    @include('components.navbar')

    @yield('container')

    @include('components.footer')

    
</body>
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
</html>