<!-- sidebar.php -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kendaraan.index') }}">
            <span data-feather="file"></span>
            Kendaraan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('destinasi.index') }}">
            <span data-feather="shopping-cart"></span>
            Destinasi
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pesanan.index') }}">
            <span data-feather="users"></span>
            Pesanan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bar-chart-2"></span>
            Reports
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="layers"></span>
            Integrations
          </a>
        </li>
      </ul>
    </div>
  </nav>