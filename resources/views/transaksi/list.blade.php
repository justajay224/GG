<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        <h1 class="mt-5">Daftar Transaksi</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
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
                @foreach($transaksi as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->kendaraan->nama }}</td>
                    <td>{{ $item->destinasi->rute }}</td>
                    <td>{{ $item->tanggal_keberangkatan }}</td>
                    <td>{{ $item->jumlah_penumpang }}</td>
                    <td>{{ $item->total_pembayaran }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="{{ route('transaksi.show', $item->id) }}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
