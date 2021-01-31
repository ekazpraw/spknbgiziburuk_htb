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
        <li class="active"><a href="#">Pengguna</a></li>
        <li><a href="basis_aturan.php">Basis Aturan</a></li>
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
    <h2>Daftar Pengguna:</h2>
<form action="p_prosesedit.php" method="post">
    <?php
	$id = $_GET['id_pengguna'];
	$data = mysqli_query($con, "select * from pengguna where id_pengguna='$id'");
	while($d = mysqli_fetch_array($data)){
    ?>
    <p>ID PENGGUNA: &nbsp;&nbsp;&nbsp;<input type="text" name="id_pengguna" class="read_more2" value="<?php echo $d['id_pengguna']; ?>" readonly></p>
    <p>NAMA PENGGUNA: &nbsp;&nbsp;&nbsp;<input type="text" name="nama_pengguna" class="read_more2" value="<?php echo $d['nama_pengguna']; ?>" required="required"></p>
    <p>USERNAME: &nbsp;&nbsp;&nbsp;<input type="text" name="username" class="read_more2" value="<?php echo $d['username']; ?>" required="required"></p>
    <p>PASSWORD: &nbsp;&nbsp;&nbsp;<input type="password" name="password" value="<?php echo $d['password']; ?>" class="read_more2" required="required"></p>
    <p>LEVEL: &nbsp;&nbsp;&nbsp;
    <select class="read_more2" name="level" required="required">
	<option value="">&nbsp;&nbsp;&nbsp;PILIH LEVEL USER</option>
        <option value="admin">&nbsp;&nbsp;&nbsp;ADMIN</option>
        <option value="pengguna">&nbsp;&nbsp;&nbsp;PENGGUNA</option>
    </select>
    </p>
    <button type="submit" class="read_more2">PERBAHARUI DATA</button>
    <?php } ?>
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