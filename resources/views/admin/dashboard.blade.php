<!-- resources/views/admin/admin_dashboard.blade.php -->
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('admin.partials.navbar_admin')

    <div class="container mt-5">
        <h1>Welcome to Admin Dashboard</h1>
        <!-- Add your dashboard content here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
<!-- index.php -->
<!-- index.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

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
    </style>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
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
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Pesanan</h5>
                <p class="card-text">Anda memiliki 10 pesanan baru.</p>
                <a href="pesanan.php" class="btn btn-primary">Lihat Pesanan</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Kendaraan</h5>
                <p class="card-text">5 kendaraan membutuhkan perawatan.</p>
                <a href="kendaraan.php" class="btn btn-primary">Lihat Kendaraan</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Destinasi</h5>
                <p class="card-text">3 destinasi baru tersedia.</p>
                <a href="destinasi.php" class="btn btn-primary">Lihat Destinasi</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Pelanggan</h5>
                <p class="card-text">Anda memiliki 2 pelanggan baru.</p>
                <a href="pelanggan.php" class="btn btn-primary">Lihat Pelanggan</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <h3>Grafik Pesanan</h3>
            <canvas id="pesananChart"></canvas>
          </div>
          <div class="col-md-6">
            <h3>Grafik Kendaraan</h3>
            <canvas id="kendaraanChart"></canvas>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-6">
            <h3>Grafik Pelanggan</h3>
            <canvas id="pelangganChart"></canvas>
          </div>
          <div class="col-md-6">
            <h3>Grafik Destinasi</h3>
            <canvas id="destinasiChart"></canvas>
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


