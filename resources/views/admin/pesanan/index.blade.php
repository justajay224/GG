<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar {
            background: linear-gradient(45deg, #1e3c72, #5374ad);
        }
    </style>
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
        <!-- Sidebar -->
        @include('admin.partials.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-5">
                <h1>Daftar Pesanan</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Kendaraan</th>
                        <th>Destinasi</th>
                        <th>Tanggal Keberangkatan</th>
                        <th>Jumlah Penumpang</th>
                        <th>Total Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transaksis as $transaksi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaksi->kendaraan->nama }}</td>
                            <td>{{ $transaksi->destinasi->rute }}</td>
                            <td>{{ $transaksi->tanggal_keberangkatan }}</td>
                            <td>{{ $transaksi->jumlah_penumpang }}</td>
                            <td>{{ $transaksi->total_pembayaran }}</td>
                            <td>{{ $transaksi->status }}</td>
                            <td>
                              @if($transaksi->status == 'pending')
                                  <form id="updateStatusForm{{$transaksi->id}}" action="{{ route('transaksi.updateStatus', $transaksi->id) }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="status" value="selesai">
                                      <button type="submit" class="btn btn-success">Selesai</button>
                                  </form>
                              @endif
                          </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>


</body>
</html>
