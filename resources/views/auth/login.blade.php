<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Palatino';
            background-image: url('../images/mobil.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang transparan (hitam dengan opasitas 0.5) */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content {
            text-align: center;
            color: rgb(207, 172, 96);
        }

        .warnabtn {
            color: rgb(60, 63, 66);
            background-color: rgb(216, 207, 78);
            font-size: 120%; /* Ukuran tombol 150% dari ukuran teks biasa */
            padding: 10px 20px; /* Penyesuaian padding untuk tombol yang lebih besar */
        }

        .btn:hover {
            background-color: rgb(194, 185, 69);
            color: rgb(121, 123, 124);
        }

        h1 {
            font-size: 350%; /* Ukuran teks h1 300% dari ukuran teks biasa */
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); /* Bayangan teks */
        }

        h1 span {
            display: inline-block;
            /* -webkit-text-stroke: 1px black;  */
            color: rgb(241, 202, 116);
        }

        p {
            color: #3f3f3f;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang kotak transparan */
            margin-left: 23%;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="content">
            <h1><span>Selamat Datang di Aplikasi Kami</span></h1>
            <div class="login-form mt-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn warnabtn btn-block">Login</button>
                </form>
                <p class="mt-3">Belum punya akun? <a href="{{ url('/register') }}">Daftar sekarang</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    @if(session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
</body>
</html>
