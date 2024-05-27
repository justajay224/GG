<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script>
        function prosesPembayaran() {
            document.getElementById('bayar-button').style.display = 'none'; // Sembunyikan tombol "Bayar"
            document.getElementById('processing-text').style.display = 'block'; // Tampilkan teks "Transaksi sedang diproses"
            // Di sini Anda dapat menambahkan kode untuk memproses pembayaran, misalnya mengirimkan permintaan HTTP ke server
            // Jika Anda hanya ingin menampilkan teks dan tidak melakukan operasi lain, Anda bisa langsung menonaktifkan tombol setelah beberapa saat
            setTimeout(function() {
                document.getElementById('processing-text').innerText = 'Transaksi berhasil diproses'; // Ubah teks setelah beberapa waktu
            }, 2000); // Misalnya, 2000 untuk 2 detik
        }
    </script>

    <style>
        .container {
            margin-bottom: 35px;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        <h1 class="mt-5">Detail Transaksi</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mt-3">
            <p><strong>ID Transaksi:</strong> {{ $transaksi->id }}</p>
            <p><strong>Kendaraan:</strong> {{ $transaksi->kendaraan->nama }}</p>
            <p><strong>Destinasi:</strong> {{ $transaksi->destinasi->rute }}</p>
            <p><strong>Nomor Telepon:</strong> {{ $transaksi->nomor_telepon }}</p>
            <p><strong>Tanggal Keberangkatan:</strong> {{ $transaksi->tanggal_keberangkatan }}</p>
            <p><strong>Jumlah Penumpang:</strong> {{ $transaksi->jumlah_penumpang }}</p>
            <p><strong>Total Pembayaran:</strong> {{ $transaksi->total_pembayaran }}</p>
            <p><strong>Metode Pembayaran:</strong> {{ $transaksi->metode_pembayaran }}</p>
            <p><strong>Status:</strong> {{ $transaksi->status }}</p>
            @if($transaksi->metode_pembayaran == 'QRIS')
                <img src="{{ asset('images/Qris.jpeg') }}" alt="QRIS" style="width: 15%;">
                <br>
            @elseif($transaksi->metode_pembayaran == 'GOPAY' || $transaksi->metode_pembayaran == 'DANA')
                
                <p>Nomor: 08124344562 (Ajay Maulana)</p>
                <br>
            @elseif($transaksi->metode_pembayaran == 'Transfer Bank')
                <p>Bank BCA: 53224323423</p>
                <br>
            @endif
            @if($transaksi->status == 'pending')
                <button id="bayar-button" class="btn btn-primary mt-4" onclick="prosesPembayaran()">Bayar</button>
                <div id="processing-text" style="display: none;">
                    Transaksi sedang diproses...
                </div>
            @elseif($transaksi->status == 'selesai')
                <div class="alert alert-info mt-4" role="alert">
                    Transaksi telah berhasil. Tunggu Infromasi Melalui WA.
                </div>
            @endif
        </div>
    </div>
</body>
</html>
