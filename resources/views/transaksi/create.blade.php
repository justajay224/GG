<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        <h1 class="mt-5">Buat Transaksi</h1>
        <h3 class="mt-3">Kendaraan Tersedia</h3>
        <div class="row">
            @foreach($kendaraans as $kendaraan)
                @if($kendaraan->status == 'tersedia')
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="{{ Storage::url($kendaraan->foto) }}" class="card-img-top small-image" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kendaraan->nama }}</h5>
                                <p class="card-text">Supir: {{ $kendaraan->supir }}</p>
                                <p class="card-text">Biaya Tambahan: {{ $kendaraan->biaya }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

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
            {{-- <div class="mb-3">
                <label for="destinasi_id" class="form-label">Destinasi</label>
                <select class="form-control" id="destinasi_id" name="destinasi_id" required>
                    @foreach($destinasis as $destinasi)
                        <option value="{{ $destinasi->id }}">{{ $destinasi->rute}}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="mb-3">
                <label for="destinasi_id" class="form-label">Destinasi</label>
                <select class="form-control" id="destinasi_id" name="destinasi_id" required>
                    @foreach($destinasis as $destinasi)
                        <option value="{{ $destinasi->id }}">{{ $destinasi->rute }} - {{ format_rupiah($destinasi->biaya)}}</option>
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
            <button type="submit" class="btn btn-primary">Booking Sekarang</button>
        </form>
    </div>
</body>
</html>
