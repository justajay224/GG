<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #333;
        }
        .main-section {
            background-color: #6a1b9a;
            color: white;
            padding: 80px 0;
        }
        .main-section h1 {
            font-size: 48px;
            font-weight: bold;
        }
        .main-section p {
            font-size: 18px;
        }
        .btn-download {
            margin-top: 20px;
        }
        .btn-download .btn {
            font-size: 18px;
            padding: 10px 30px;
        }
        .btn-outline-light {
            border-color: white;
            color: white;
        }
        .btn-outline-light:hover {
            background-color: white;
            color: #6a1b9a;
        }
        .main-section img {
            max-width: 100%;
            height: auto;
        }
        .stats-section {
            background-color: #4a148c;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        .stats-section h2 {
            margin-bottom: 40px;
        }
        .stats-section .stat {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .features-section {
            background-color: #f3f2fc;
            padding: 60px 0;
            text-align: center;
        }
        .features-section h2 {
            margin-bottom: 40px;
        }
        .feature-box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .feature-box img {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }
        .feature-box h4 {
            margin-bottom: 15px;
        }
        .feature-box:hover {
            transform: scale(1.05);
            background-color: #6a1b9a;
            color: white;
            cursor: pointer;
        }
        .feature-box:hover h4,
        .feature-box:hover p,
        .feature-box:hover img {
            color: white;
        }
        .step:hover {
            transform: scale(1.05);
            background-color: #6a1b9a;
            color: white;
            cursor: pointer;
        }
        
        .steps-section {
            background-color: #ffffff;
            padding: 60px 0;
        }
        .steps-section h2 {
            color: #6a1b9a;
            margin-bottom: 40px;
            text-align: right;
        }
        .step {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .step-number {
            background-color: #6a1b9a;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        .step-content {
            flex-grow: 1;
        }
        .steps-section img {
            max-width: 100%;
            height: auto;
        }
        .booking-section {
            background-color: #f3f2fc;
            padding: 40px 0;
            text-align: center;
        }
        .booking-section .btn-booking {
            background-color: #6a1b9a;
            color: white;
            font-size: 18px;
            padding: 15px 30px;
            border-radius: 5px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }
        .booking-section .btn-booking:hover {
            background-color: #4a148c;
        }
        .features-section h4{
            color: #52bebc;
            font-size: 18px;
            font-weight: bold;
        }
        .features-section p{
            font-size: 12px;
        }
    </style>
    
    
</head>
<body>
    @include('partials.navbar')

    <div class="main-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-left text-center">
                    <h1>Pesan Travel Apa Pun, Kapan Pun!</h1>
                    <p>#TravelindoTemanTravelmu</p>
                    <p>Selamat datang di Travelindo, mitra perjalanan Anda untuk menjelajahi Nusantara dan dunia. Nikmati layanan berkualitas tinggi dan perjalanan yang menyenangkan. Dari pantai eksotis hingga pegunungan memukau, kami siap membawa Anda ke destinasi impian dengan nyaman dan aman. Ciptakan kenangan abadi bersama Travelindo.</p>
                    <div class="btn-download">
                        <a href="{{ url('/transaksi') }}" class="btn btn-outline-light btn-lg">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/home.png') }}" alt="TREVO Image">
                </div>
            </div>
        </div>
    </div>

    <div class="features-section">
        <div class="container">
            <h2>Kenapa Pesan Travel di Travelindo ?</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="{{ asset('images/price.png') }}" alt="Icon 1">
                        <h4>Harga Terjangkau</h4>
                        <p>Nikmati tiket perjalanan dengan harga kompetitif, memastikan Anda mendapatkan nilai terbaik tanpa mengorbankan kualitas. </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="{{ asset('images/dest.png') }}" alt="Icon 2">
                        <h4>Beragam Destinasi</h4>
                        <p>Travelindo menawarkan berbagai pilihan destinasi, memberikan fleksibilitas untuk menemukan perjalanan yang sesuai dengan kebutuhan Anda.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="{{ asset('images/easy.png') }}" alt="Icon 3">
                        <h4>Pemesanan Mudah</h4>
                        <p>Booking travel dengan cepat dan mudah melalui platform kami. Proses pemesanan yang sederhana memungkinkan Anda mendapatkan tiket dengan nyaman dan tanpa repot.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <img src="{{ asset('images/service.png') }}" alt="Icon 4">
                        <h4>Pelayanan Prima</h4>
                        <p>Kami berkomitmen memberikan layanan pelanggan terbaik, mulai dari pemesanan hingga saat perjalanan berlangsung, menjamin pengalaman yang menyenangkan dan bebas masalah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="steps-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/phone.png') }}" alt="Phone Image">
                </div>
                <div class="col-md-6">
                    <h2>Cara Pesan di Travelindo</h2>
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Daftar</h4>
                            <p>Daftar dengan alamat email dan masukkan password.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Booking</h4>
                            <p>Klik Pesan Sekarang pada halaman ini atau klik Booking di navbar</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Pilih Mobil dan Detail Pemesanan</h4>
                            <p>Cari mobil sesuai budget dan kebutuhanmu serta pilih destinasi sesuai dengan yang diinginkan. Masukkan nomer telepon, tanggal Keberangkatan, dan jumlah penumpang. 
                                Pilih metode pembayaran yang diinginkan dan klik Booking Sekarang</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Lakukan Pembayaran</h4>
                            <p>Lakukan pembayaran sesuai dengan metode pembayaran yang dipilih sebelumnya. Jika sudar bayar klik Bayar dan tunggu informasi hingga pihak dari kami mengkonfirmasi pesanan</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h4>Booking Selesai</h4>
                            <p>Setelah kami konfirmasi maka booking selesai. Informasi lebih lanjut akan kami hubungi melalui email dan nomer handphone yang telah dimasukkan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="booking-section">
        <div class="container">
            <a href="{{ url('/transaksi') }}" class="btn btn-booking">Pesan Sekarang</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
