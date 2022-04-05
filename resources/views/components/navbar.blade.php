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
                <!--/search-right-->
            </div>

        </nav>
    </div>
    <!-- search -->
    <div class="search">
        <div class="cd-main-header">
            <ul class="cd-header-buttons">
                <li>
                    <a class="cd-search-trigger" href="#cd-search">
                        <span></span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="cd-search" class="cd-search">
            <form action="#" method="post">
                <input name="Search" type="search" placeholder="Click enter after typing...">
            </form>
        </div>
    </div>
    <!-- //search -->
</header>