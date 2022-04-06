<header id="site-header" class="w3lhny-head fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
            <h1>
                <a class="navbar-brand">
                    Cukurin
                </a>
            </h1>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li><a href="/" class="nav-link {{ ($title === "home") ? 'activate' : '' }}">Home</a></li>
                    <li><a href="/profile" class="nav-link {{ ($title === "profile") ? 'activate' : '' }}">profile</a></li>
                    <li><a href="company" class="nav-link {{ ($title === "company") ? 'activate' : '' }}">company</a></li>
                    <li><a href="service" class="nav-link {{ ($title === "service") ? 'activate' : '' }}">service</a></li>
                    <li><a href="collaboration" class="nav-link {{ ($title === "collaboration") ? 'activate' : '' }}">collaboration</a></li>

                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="login" class = "nav-link"><i class="bi bi-box-arrow-right"></i>login</a>
                    </li>    
                </ul>
                <!--/search-right-->
            </div>

        </nav>
    </div>

    
    <!-- //search -->
</header>

<script>
    on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)
</script>