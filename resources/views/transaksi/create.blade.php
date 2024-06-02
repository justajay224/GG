<!-- resources/views/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Indo | Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .small-image {
            height: 120px; /* Adjusted height */
            width: 100%; /* Ensure the image takes the full width of the card */
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-primary {
            background-color: #8e24aa;
            border-color: #8e24aa;
        }
        .btn-primary:hover {
            background-color: #6a1b9a;
            border-color: #6a1b9a;
        }
        .card-title {
            font-size: 1rem; /* Adjusted font size */
            font-weight: 500;
        }
        .card-text {
            font-size: 0.875rem; /* Adjusted font size */
        }
        .header {
            /* background-color: #8e24aa; */
            background: linear-gradient(90deg, #8b57ac, #5536df);
            color: white;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-3">
        <div class="header">
            <h1>Booking Sekarang</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('transaksi.store') }}" method="POST" class="my-3">
                    @csrf
                    <div class="mb-3">
                        <label for="kendaraan_id" class="form-label">Pilih Kendaraan</label>
                        <select class="form-control" id="kendaraan_id" name="kendaraan_id" required>
                            @foreach($kendaraans as $kendaraan)
                                @if($kendaraan->status == 'tersedia')
                                    <option value="{{ $kendaraan->id }}">{{ $kendaraan->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="destinasi_id" class="form-label">Destinasi</label>
                        <select class="form-control" id="destinasi_id" name="destinasi_id" required>
                            @foreach($destinasis as $destinasi)
                                <option value="{{ $destinasi->id }}">{{ $destinasi->rute }} - {{ format_rupiah($destinasi->biaya) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_keberangkatan" class="form-label">Tanggal Keberangkatan</label>
                        <input type="date" class="form-control" id="tanggal_keberangkatan" name="tanggal_keberangkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_penumpang" class="form-label">Jumlah Penumpang</label>
                        <input type="number" class="form-control" id="jumlah_penumpang" name="jumlah_penumpang" required>
                    </div>
                    <div class="mb-3">
                        <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                        <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                            <option value="QRIS">QRIS</option>
                            <option value="DANA">DANA</option>
                            <option value="GOPAY">GOPAY</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Booking</button>
                </form>
            </div>
            <div class="col-md-6 my-4">
                <div class="row">
                    @foreach($kendaraans as $kendaraan)
                        @if($kendaraan->status == 'tersedia')
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <img src="{{ Storage::url($kendaraan->foto) }}" class="card-img-top small-image mt-2" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $kendaraan->nama }}</h5>
                                        <p class="card-text">Supir: {{ $kendaraan->supir }}</p>
                                        <p class="card-text">Biaya Tambahan: {{ format_rupiah($kendaraan->biaya) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
