<!doctype html>
<?php include_once '../config.php'; ?>
<html style="background:#000;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Sribukita - Sistem Pakar Gizi Buruk Balita</title>
<link rel="icon" href="../pavicon.png" type="image/png">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css"> 
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"> 
    <link href="../css/animate.css" rel="stylesheet" type="text/css">
    <script href="../js/datepicker.js"></script>
    <style type="text/css"> .ff{ color: #fff; } </style>
</head>
<body>
<!-- HEADER--> 
<header id="header_wrapper">
<div class="container">
<div class="header_box">
    <div class="logo">
    <h2 class="ff">Sribukita</h2></div>
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
        <li><a href="index.php">Beranda</a></li>
        <li><a href="gejala.php">Gejala</a></li>
        <li><a href="penyakit.php">Penyakit</a></li>
        <li><a href="solusi.php">Solusi</a></li>
        <li><a href="pengguna.php">Pengguna</a></li>
        <li class="active"><a href="#">Basis Aturan</a></li>
        <li><a href="../keluar.php">Keluar</a></li>
    </ul>
</div>
</nav>
</div>
</div>
</header>
<!-- PENUTUP HEADER-->
<!-- MODUL PERTANYAAN -->
<section id="beranda" class="top_cont_outer">
<div class="hero_wrapper">
<div class="container">
<div class="beranda">
<div class="row">
<div>
<div class="top_left_cont zoomIn wow animated">
    <h2>Daftar Basis Aturan:</h2>
<form action="b_prosestambah.php" method="post">
    <p>ID GEJALA: &nbsp;&nbsp;&nbsp;
    <select class="read_more2" name="id_gejala" required="required">
	<option value="">&nbsp;&nbsp;&nbsp;PILIH JENIS GEJALA</option>
    <?php
        $query = mysqli_query($con, "select * from daftar_gejala");
        while ($data = mysqli_fetch_array($query)){
        echo "<option value=$data[id_gejala]>"."&nbsp;&nbsp;&nbsp;"."$data[gejala]</option>";
        }
    ?>
    </select>
    </p>
    <p>PERTANYAAN GEJALA: &nbsp;&nbsp;&nbsp;<input type="text" name="pertanyaan" class="read_more2" required="required"></p>
    <p>JIKA JAWABAN IYA: &nbsp;&nbsp;&nbsp;<input type="text" name="fakta_ya" class="read_more2" required="required"></p>
    <p>JIKA JAWABAN TIDAK: &nbsp;&nbsp;&nbsp;<input type="text" name="fakta_tidak" class="read_more2" required="required"></p>
    <p>BOBOT PENYAKIT KWARSHIORKOR (CONTOH: 0.00): &nbsp;&nbsp;&nbsp;<input type="text" name="kwarshiorkor" class="read_more2" required="required"></p>
    <p>BOBOT PENYAKIT MARASMIK-KWARSHIORKOR (CONTOH: 0.00): &nbsp;&nbsp;&nbsp;<input type="text" name="marasmik-kwarshiorkor" class="read_more2" required="required"></p>
    <p>BOBOT PENYAKIT MARASMUS (CONTOH: 0.00): &nbsp;&nbsp;&nbsp;<input type="text" name="marasmus" class="read_more2" required="required"></p>
    <p>PILIH GEJALA SELANJUTNYA (UNTUK PERTANYAAN SELANJUTNYA SECARA OTOMATIS): &nbsp;&nbsp;&nbsp;
    <select class="read_more2" name="rute" required="required">
	<option value="">&nbsp;&nbsp;&nbsp;PILIH JENIS GEJALA PERTANYAAN SELANJUTNYA</option>
    <?php
        $query = mysqli_query($con, "select * from daftar_gejala");
        while ($data = mysqli_fetch_array($query)){
        echo "<option value=$data[id_gejala]>"."&nbsp;&nbsp;&nbsp;"."$data[gejala]</option>";
        }
    ?>
	<option value="final">&nbsp;&nbsp;&nbsp;PILIH INI JIKA PERTANYAAN SELANJUTNYA SUDAH TIDAK ADA / BERAKHIR (FINISH)</option>
    </select>
    </p>
    <button type="submit" class="read_more2">TAMBAH DATA</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- PENUTUP MODUL PERTANYAAN --> 
<!-- FOOTER -->
<footer class="footer_wrapper" id="contact_periksa">
<div class="container">
<div class="footer_bottom">
    Copyright ©<?php echo date("Y"); ?> <i class="fa fa-heart pulse"></i> Rifki Nur Apriyono - <b><a style="color: #008cba" href="https://www.unas.ac.id/" target="_blank">Universitas Nasional</a></b>
</div>
</div>
</footer>
<!-- PENUTUP FOOTER -->
<script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.nav.js"></script> 
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/wow.js"></script> 
<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>