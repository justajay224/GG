<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin | Dashboard</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/dashboard/"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* Custom Styles */
      .navbar {
        background: linear-gradient(45deg, #1e3c72, #5374ad);
      }

      .card-custom {
        height: 100%;
      }

      .card-pesanan {
        background-color: #f8f9fa;
        border-left: 4px solid #007bff;
      }

      .card-kendaraan {
        background-color: #f8f9fa;
        border-left: 4px solid #28a745;
      }

      .card-destinasi {
        background-color: #f8f9fa;
        border-left: 4px solid #ffc107;
      }

      .card-title {
        font-weight: bold;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>  
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    @include('admin.partials.sidebar')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
        >
          <h1 class="h2">Dashboard</h1>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm card-custom card-pesanan">
              <div class="card-body">
                <h5 class="card-title">Pesanan</h5>
                <p class="card-text">Anda memiliki {{ $pendingorder }} pesanan yang belum diselesaikan</p>
                <a href="{{ route('pesanan.index') }}" class="btn btn-primary mt-4">Lihat Pesanan</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm card-custom card-kendaraan">
              <div class="card-body">
                <h5 class="card-title">Kendaraan</h5>
                <p class="card-text">Anda memiliki {{ $kendaraanrusak }} kendaraan yang rusak dan {{ $kendaraanoperasi }} sedang beroperasi</p>
                <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Lihat Kendaraan</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm card-custom card-destinasi">
              <div class="card-body">
                <h5 class="card-title">Destinasi</h5>
                <p class="card-text">{{ $banyakdestinasi }} destinasi yang tersedia.</p>
                <a href="{{ route('destinasi.index') }}" class="btn btn-primary mt-5">Lihat Destinasi</a>
              </div>
            </div>
          </div>
        </div>

    </main>
  </div>
</div>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
      ></script>

      <script
        src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"
      ></script>

      <script
        src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"
      ></script>
<script src="dashboard.js"></script>
</body>
</html>
