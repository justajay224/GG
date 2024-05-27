{{-- <!-- resources/views/admin/kendaraan/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('admin.partials.navbar_admin')

    <div class="container mt-5">
        <h1>Edit Kendaraan</h1>
        <!-- resources/views/admin/kendaraan/edit.blade.php -->
        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $kendaraan->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="supir" class="form-label">Supir</label>
                <input type="text" class="form-control" id="supir" name="supir" value="{{ $kendaraan->supir }}" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
                <img src="{{ Storage::url($kendaraan->foto) }}" alt="{{ $kendaraan->nama }}" width="100" class="mt-2">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="tersedia" {{ $kendaraan->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="sedang beroperasi" {{ $kendaraan->status == 'sedang beroperasi' ? 'selected' : '' }}>Sedang Beroperasi</option>
                    <option value="rusak" {{ $kendaraan->status == 'rusak' ? 'selected' : '' }}>Rusak</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
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
        <div class="container mt-5">
            <h1>Edit Kendaraan</h1>
            <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Kembali</a>
            <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $kendaraan->nama }}" required>
                </div>
                <div class="mb-3">
                    <label for="supir" class="form-label">Supir</label>
                    <input type="text" class="form-control" id="supir" name="supir" value="{{ $kendaraan->supir }}" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <img src="{{ Storage::url($kendaraan->foto) }}" alt="{{ $kendaraan->nama }}" width="100" class="mt-2">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="tersedia" {{ $kendaraan->status == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                        <option value="sedang beroperasi" {{ $kendaraan->status == 'sedang beroperasi' ? 'selected' : '' }}>Sedang Beroperasi</option>
                        <option value="rusak" {{ $kendaraan->status == 'rusak' ? 'selected' : '' }}>Rusak</option>
                    </select>
                </div>
                <div class="mb-3">
                  <label for="biaya" class="form-label">Biaya</label>
                  <input type="number" step="0.01" class="form-control" id="biaya" name="biaya" value="{{ $kendaraan->biaya }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    
        </div>
    </main>
  </div>
</div>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
<script src="dashboard.js"></script>
</body>
</html>
