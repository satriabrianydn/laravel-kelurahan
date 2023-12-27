<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Wakanda - Berita Terkini</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }

        header {
            background-color: #ff0000; /* Merah */
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek shadow */
        }

        header img {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100px;
            height: auto;
        }

        nav {
            background-color: #ff0000; /* Merah */
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek shadow */
        }

        nav a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            background-color: #ff0000; /* Merah */
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #000;
        }

        section {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: center;
            color: #000;
        }

        .news-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .news-item {
            width: 30%;
            margin-bottom: 20px;
        }

        .news-item img {
            border-radius: 8px;
            width: 100%;
            height: auto;
        }

        footer {
            text-align: center;
            padding: 40px;
            background-color: #ff0000; /* Merah */
            color: #fff;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2); /* Efek shadow */
        }

        .social-media {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-media img {
            width: 40px;
            margin: 0 10px;
        }

        .visible-row {
            height: 200px;
            background-color: #f8f9fa; /* Warna latar belakang baris */
            border: 1px solid #dee2e6; /* Garis pinggir baris */
            padding: 5px; /* Padding untuk konten di dalam baris */
            margin-bottom: 15px; /* Jarak antar baris */
        }

        .custom-row img {
            width: 100%; /* Gambar akan mengisi lebar baris */
            height: 100%; /* Gambar akan mengisi tinggi baris */
            object-fit: cover; /* Memastikan gambar terisi dengan benar */
        }
    </style>
</head>
<body>
    <header>
        <img src="{{ asset('assets/img/logo.png') }}" alt="Kelurahan Wakanda">
        <h1>Kelurahan Wakanda</h1>
    </header>

    <nav>
        <a href="{{ route('home.index') }}">Beranda</a>
        <a href="{{ route('home.profil') }}">Profil</a>
        <a href="{{ route('home.layanan') }}">Layanan</a>
        <a href="{{ route('home.berita') }}">Berita Terkini</a>
        <a href="{{ route('home.kontak') }}">Informasi Kontak</a>
		<a href="{{ route('auth.login') }}">Login</a>
    </nav>

<!-- Tambahkan di bagian <section> berita untuk mengedit/hapus berita -->
<section>
    <h2>Berita Terkini Kelurahan Wakanda</h2>
    <a href="{{ route('tambah.berita') }}" class="btn btn-primary mt-3">+ Tambah Berita</a>
    <a href="#" class="btn btn-primary mt-3">+ Edit Berita</a>
    <a href="#" class="btn btn-primary mt-3">+ Hapus Berita</a>
    @foreach($beritas as $berita)
        <div class="col-md-3 mt-3">
            <div class="card mb-3">
                <img src="{{ $berita->gambar }}" class="card-img-left" alt="{{ $berita->judul }}">
                <div class="card-body">
                    <h5 class="card-title text-danger">{{ $berita->judul }}</h5>
                    <p class="card-text">{{ $berita->deskripsi }}</p>
                    <a href="{{ $berita->pdf_link }}" target="_blank" class="btn btn-danger">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Tambahkan lebih banyak kartu berita sesuai kebutuhan -->
</section>


    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kelurahan XYZ</p>
        <div class="social-media">
            <img src="images/medsos.png" alt="Facebook">
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

