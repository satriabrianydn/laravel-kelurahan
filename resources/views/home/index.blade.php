<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Wakanda</title>
   <link href="css/style.css" rel="stylesheet">
   
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

        .news img {
            border-radius: 8px;
            width: 20%;
            margin: 20px auto;
            display: block;
        }

        footer {
            text-align: center;
            padding: 40px;
            background-color: #ffffff; /* Merah */
            color: #fff;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2); /* Efek shadow */
        }

        .social-media {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-media img {
            width: 0px;
            margin: 0 10px;
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

    <section>
        <h1>Selamat datang di Kelurahan WAKANDA</h1>
        <p>Informasi dan berita terkini tentang Kelurahan WAKANDA.</p>

        <div class="news">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Peristiwa Terkini">
        </div>
        
        <div class="description">
            <h3>Alamat Kelurahan</h3>
            <p>Kelurahan WAKANDA terletak di Mantung Baru, Sanggrahan, Sukoharjo, dengan kode pos 571227. Untuk informasi lebih lanjut, hubungi kami di Nomor Telepon 0809876534.</p>
        </div>
    </section>
	
	 <section id="services">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Prosedur Permohonan Surat</h2>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Login</h4>
                                <p>Pemohon Surat melakukan login, melalui halaman Login.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number2.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Menginput Data</h4>
                                <p>Input data pemohon dengan sebelumnya melakukan Login dengan username dan password.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number3.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mengajukan Surat Permohonan</h4>
                                <p>Setelah input data pemohon dengan lengkap dan benar, Pemohon memilih Surat yang mau direquest serta melengkapi data request, Kemudian Dikirim dan Menunggu persetujuan dari Lurah.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number4.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Permohonan Disetujui</h4>
                                <p>Permohonan di setujui oleh lurah, kemudian staf akan mencetak surat sesuai request surat yang diajukan, pemohon mengambil surat yang sudah dicetak dan bertandatangan di Kantor Kelurahan Wakanda.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                </div>
            </div>
            <!--/.row-->
        </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kelurahan WAKANDA</p>
        <div class="social-media">
            <img src="images/medsos.png" alt="Facebook">
        </div>
    </footer>
</body>
</html>