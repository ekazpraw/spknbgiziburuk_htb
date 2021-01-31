<!doctype html>
<?php
	include_once 'config.php';
	unset ($_SESSION['keluhan']);
	unset ($_SESSION['jumlah_keluhan']);
	unset ($_SESSION['n_atas1']);
	unset ($_SESSION['n_atas2']);
	unset ($_SESSION['n_atas3']);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Sribukita - Sistem Pakar Gizi Buruk Balita</title>
<link rel="icon" href="pavicon.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css"> 
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <script href="js/datepicker.js"></script>
    <style type="text/css"> .ff{ color: #fff; } </style>
</head>
<body>
<!-- HEADER--> 
<header id="header_wrapper">
<div class="container">
<div class="header_box">
    <div class="logo">
    <h2 class="ff">SRIBukIta</h2></div>
<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div id="main-nav" class="collapse navbar-collapse navStyle">
    <ul class="nav navbar-nav" id="mainNav">
        <li class="active"><a href="#beranda" class="scroll-link">Beranda</a></li>
        <li><a href="#aboutUs" class="scroll-link">Tentang Gizi</a></li>
        <li><a href="#tes_gizi" class="scroll-link">Konsultasi Gizi</a></li>
        <li><a href="masuk.php">Masuk</a></li>
    </ul>
</div>
</nav>
</div>
</div>
</header>
<!-- PENUTUP HEADER--> 
<!-- KONTEN UTAMA--> 
<section id="beranda" class="top_cont_outer">
<div class="hero_wrapper">
<div class="container">
<div class="beranda">
<div class="row">
<div>
<div class="top_left_cont zoomIn wow animated">
    <div align="center"><img src="logo.png" width="260px"></div>
    <br><br>
    <h2>Selamat datang di <strong>SRIBUKITA</strong> (Sistem Pakar Deteksi Gizi Buruk Balita)</h2>
    <p>SRIBUKITA merupakan sistem pakar untuk mendiagnosa gizi buruk pada balita berbasis web.</p>
    <p>SRIBUKITA bertujuan untuk dapat memberikan informasi kepada masyarakat luas tentang apa itu gizi dan serta langkah apa saja yang harus dilakukan jika memang ada yang mengidap gizi buruk tersebut.</p>
    <a href="#tes_gizi" class="read_more2">KONSULTASI</a> </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- PENUTUP KONTEN UTAMA-->
<!-- TENTANG GIZI -->
<section id="aboutUs">
<div class="inner_wrapper">
<div class="container">
    <br>
    <h2><strong>TENTANG GIZI</strong></h2>
    <hr>
<div class="inner_section">
<div class="row">
<div>
<div class=" delay-01s animated fadeInDown wow animated">
    <br>
    <h3>Berikut adalah penjelasan secara umum tentang gizi:</h3><br/> 
    <p>Penyakit gizi buruk merupakan penyakit dengan jumlah penderita yang <strong>terus meningkat tiap tahunnya</strong> di Indonesia.
        Presentasi angka gizi buruk <strong>yang ada di Indonesia berkisar 3,4%.</strong></p>
    <p>Ciri-ciri gizi buruk: <strong>menunjukkan pertumbuhan yang tidak maksimal, perkembangan intelektual tidak maksimal, munculnya gangguan penglihatan, mudah lelah, tidak memiliki nafsu makan, bentuk tulang yang tidak normal, mudah sakit</strong>.</p>
    <p><strong>Terbatasnya jumlah tenaga medis dapat dibantu dengan aplikasi sistem pakar</strong> tanpa bermaksud menggantikan Pakar. Sistem Pakar yaitu sistem (mesin pengetahuan) yang <strong>mampu menggantikan fungsi kepakaran</strong>.
    </p><br/>
    <p><strong>Penelitian ini</strong> bertujuan <strong>mendeteksi</strong> penyakit gizi buruk <strong>pada usia 1-3 tahun (balita)</strong>. Menggunakan algoritma Naïve Bayes Clasifier.<br>
        Dalam penelitian ini diketahui <strong>3 jenis penyakit</strong> berdasarkan gejalanya yaitu:</p><br>
    <ol>
        <li>Kwarshiorkor (P1),</li>
        <li>Marasmik-Kwarshiorkor (P2),</li>
        <li>Marasmus (P3),</li>
    </ol>
    <p>dan dengan: <strong>24 gejala gizi buruk.</strong></p><br>
    <p>Hasil penelitian menunjukkan hasil perkalian tertinggi dari klasifikasi naive bayes merupakan jenis penyakit gizi buruk yang diderita pasien.
    </p>
    <p>Hasil deteksi dapat dimanfaatkan sebagai informasi awal deteksi gizi buruk.</p>
</div>
</div>
</div>
</div>
</div> 
</div>
</section>
<!-- PENUTUP TENTANG GIZI --> 
<!-- TES GIZI -->
<section id="tes_gizi">
<div class="inner_wrapper">
<div class="container">
    <br>
    <h2><strong>KONSULTASI</strong></h2>
    <hr>
<div class="inner_section">
<div class="row">
<div class="">
<div class=" delay-01s animated fadeInDown wow animated">
    <br>
    <h3><strong>SRIBUKITA</strong> menyediakan layanan untuk mendiagnosa secara mandiri apakah anda/atau anak anda telah mengidap gizi buruk atau tidaknya.</h3><br/> 
    <div align="center"><img src="konsultasi.png" width="300px"></div>
    <p>Keakuratan informasi yang diberikanpun "mungkin" tidaklah jauh berbeda dengan seorang dokter karena <strong>SRIBUKITA</strong> telah dipertimbangkan dan dikerjakan sebaik mungkin serta mengambil data dari jurnal-jurnal yang terkait.<br><br>
    Untuk melakukan tes, anda akan diberikan beberapa pertanyaan tentang kondisi anda saat ini, dan di bagian akhir pertanyaan anda dapat melihat hasil serta rekomendasi dari sistem</p><br/>
</div>
    <div class="work_bottom"><a href="periksa.php" class="contact_btn">MULAI</a>
    </div>
    <br>
    <br>
</div>
</div>
</div>
</div> 
</div>
</section>
<!-- FOOTER -->
<footer class="footer_wrapper" id="contact">
<!--<div class="container">
<section class="page_section contact" id="contact">
<div class="contact_section">
    <h2><strong>Metode</strong></h2>
<div class="row">
<div class="col-lg-4">
    <h2 style="font-size:20pt;">Pengetahuan</h2>
    <p style="text-align:justify;">Langkah paling awal untuk membuat sistem pakar adalah dengan menggali informasi tentang suatu masalah yang akan dipecahkan dengan bantuan seorang pakar maupun sumber pengetahuan lainya seperti buku.</p>
</div>
<div class="col-lg-4">
    <h2 style="font-size:20pt;">Naive-Bayes</h2>
    <p style="text-align:justify;">Data yang didaptakan dari pakar maupun buku berupa probabilitas tentang beberapa orang pengidap penyakit gizi buruk, mengengah ataupun baik sama sekali tidak teridentifikasi sebagai gizi buruk.<br>Data ini kemudian digunakan untuk menentukan aturan sistem dalam menentukan keputusan.</p>
</div>
<div class="col-lg-4">
    <h2 style="font-size:20pt;">Keakuratan</h2>
    <p>Pada Sistem pakar ini (SRIBUKITA), tingkat keakuratan masih belum maksimal karena data yang diperoleh masih sedikit sehingga masih belum dapat menggantikan pakar yang sesungguhnya.</p>
</div>
</div>
</div>
</section>
</div>-->
<div class="container">
<div class="footer_bottom">
    Copyright ©<?php echo date("Y"); ?> <i class="fa fa-heart pulse"></i> Rifki Nur Apriyono - <b><a style="color: #008cba" href="https://www.unas.ac.id/" target="_blank">Universitas Nasional</a></b>
</div>
</div>
</footer>
<!-- PENUTUP FOOTER -->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>