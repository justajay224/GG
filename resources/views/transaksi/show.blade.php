<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            max-width: 700px;
            margin-top: 40px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #8e24aa;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
            text-align: center;
            font-size: 24px;
            font-weight: 500;
        }
        .card-body {
            padding: 20px;
        }
        .details-grid {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px 20px;
        }
        .details-grid p {
            margin-bottom: 10px;
        }
        .btn-primary {
            background-color: #8e24aa;
            border-color: #8e24aa;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #6a1b9a;
            border-color: #6a1b9a;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .alert {
            margin-top: 20px;
            border-radius: 10px;
        }
        .qr-image {
            width: 100px;
            margin-top: 10px;
        }
        .btn-back {
            background-color: #6a1b9a;
            border-color: #6a1b9a;
            color: white;
        }
        .btn-back:hover {
            background-color: #8e24aa;
            border-color: #8e24aa;
        }
    </style>

    <script>
        function prosesPembayaran() {
            document.getElementById('bayar-button').style.display = 'none';
            document.getElementById('processing-text').style.display = 'block';
            setTimeout(function() {
                document.getElementById('processing-text').innerText = 'Transaksi berhasil diproses';
            }, 2000);
        }
    </script>
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Detail Transaksi
            </div>
            
            <div class="card-body">
                <button class="btn btn-back mb-3" onclick="window.history.back()">Kembali</button>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="details-grid">
                    <p><strong>ID Transaksi:</strong></p>
                    <p>{{ $transaksi->id }}</p>
                    <p><strong>Kendaraan:</strong></p>
                    <p>{{ $transaksi->kendaraan->nama }}</p>
                    <p><strong>Destinasi:</strong></p>
                    <p>{{ $transaksi->destinasi->rute }}</p>
                    <p><strong>Nomor Telepon:</strong></p>
                    <p>{{ $transaksi->nomor_telepon }}</p>
                    <p><strong>Tanggal Keberangkatan:</strong></p>
                    <p>{{ $transaksi->tanggal_keberangkatan }}</p>
                    <p><strong>Jumlah Penumpang:</strong></p>
                    <p>{{ $transaksi->jumlah_penumpang }}</p>
                    <p><strong>Total Pembayaran:</strong></p>
                    <p>{{ $transaksi->total_pembayaran }}</p>
                    <p><strong>Metode Pembayaran:</strong></p>
                    <p>{{ $transaksi->metode_pembayaran }}</p>
                    <p><strong>Status:</strong></p>
                    <p>{{ $transaksi->status }}</p>
                    @if($transaksi->metode_pembayaran == 'QRIS')
                        <p><strong>QR Code:</strong></p>
                        <p><img src="{{ asset('images/Qris.jpeg') }}" alt="QRIS" class="qr-image"></p>
                    @elseif($transaksi->metode_pembayaran == 'GOPAY' || $transaksi->metode_pembayaran == 'DANA')
                        <p><strong>Nomor:</strong></p>
                        <p>08124344562 (Ajay Maulana)</p>
                    @elseif($transaksi->metode_pembayaran == 'Transfer Bank')
                        <p><strong>Bank:</strong></p>
                        <p>BCA: 53224323423</p>
                    @endif
                </div>
                @if($transaksi->status == 'pending')
                    <button id="bayar-button" class="btn btn-primary mt-4" onclick="prosesPembayaran()">Bayar</button>
                    <div id="processing-text" class="alert alert-info" style="display: none;">
                        Transaksi sedang diproses...
                    </div>
                @elseif($transaksi->status == 'selesai')
                    <div class="alert alert-info mt-4" role="alert">
                        Transaksi telah berhasil. Tunggu informasi melalui WA.
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
