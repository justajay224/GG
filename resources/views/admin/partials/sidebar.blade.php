<!-- sidebar.php -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
      <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
                  <span data-feather="home"></span>
                  Dashboard
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('kendaraan.index') ? 'active' : '' }}" href="{{ route('kendaraan.index') }}">
                  <span data-feather="file"></span>
                  Kendaraan
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('destinasi.index') ? 'active' : '' }}" href="{{ route('destinasi.index') }}">
                  <span data-feather="shopping-cart"></span>
                  Destinasi
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('pesanan.index') ? 'active' : '' }}" href="{{ route('pesanan.index') }}">
                  <span data-feather="users"></span>
                  Pesanan
              </a>
          </li>
      </ul>
  </div>
</nav>

<style>
  .sidebar {
      background: linear-gradient(180deg, #f8f9fa, #e9ecef);
      border-right: 1px solid #dee2e6;
      height: 100vh;
      position: sticky;
      top: 0;
  }

  .nav-link {
      color: #495057;
      font-weight: 500;
      padding: 10px 20px;
  }

  .nav-link:hover {
      background-color: #e2e6ea;
      color: #212529;
      border-radius: 4px;
  }

  .nav-link.active {
      background-color: #007bff;
      color: #fff;
      border-radius: 4px;
  }

  .nav-link span {
      margin-right: 10px;
  }
</style>
