<!-- HALAMAN HOME -->
<!DOCTYPE HTML>
<html>
<head>
    <title>WELCOME TO WEB PREDIKSI</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/skel.min.js') }}"></script>
    <script src="{{ asset('js/skel-panels.min.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/skel-noscript.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style-desktop.css') }}" />
    </noscript>
</head>
<body class="homepage">

    <!-- Header -->
    <div id="header">

        <div class="container"> 

            <!-- Logo -->
            <div id="logo">
                <b><h1><a>PREDIKSI</a></h1></b>
                <b><span class="tag">KELULUSAN MAHASISWA</span></b>
            </div>
            <br>
            @if (Route::has('login'))

            @auth
            <a class="button button-style1" href="{{ url('/Beranda') }}">BERANDA</a>
            @else
            <a class="button button-style1" href="{{ route('login') }}">LOGIN</a>
            <a class="button button-style1" href="{{ route('registrasi.create') }}">REGISTER</a>

            @endauth
            @endif
        </div>
    </div>

    <!-- Featured -->
    <div id="featured">
        <div class="container">
            <header>
                <h2>Welcome to Aplikasi Prediksi Kelulusan Mahasiswa</h2>
            </header>
            <p>Aplikasi ini membantu mahasiswa dalam memprediksi kelulusannya berdasarkan hasil olah data dari mahasiswa mahasiswa yang sudah lulus di Universitas Bumigora Mataram </p>
        </div>
    </div>

    <!-- Copyright -->
    <div id="copyright">
        <div class="container">
            Create by: <a href="http://templated.co">DONNY KURNIAWAN</a>
        </div>
    </div>

</body>
</html>
