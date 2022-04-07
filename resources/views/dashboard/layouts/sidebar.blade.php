<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/dashboardbarang') ? 'active' : '' }}" href="/dashboard/dashboardbarang">
            <span data-feather="shopping-cart"></span>
            Pesan barang
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/dashboardservice') ? 'active' : '' }}" href="/dashboard/dashboardservice">
            <span data-feather="shopping-cart"></span>
            Pesan Service
          </a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/barang') ? 'active' : '' }}" href="/dashboard/barang">
              <span data-feather="shopping-cart"></span>
              Update Barang
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/serve') ? 'active' : '' }}" href="/dashboard/serve">
              <span data-feather="shopping-cart"></span>
              Update Service
            </a>
        </li>
      </ul>
    </div>
  </nav>