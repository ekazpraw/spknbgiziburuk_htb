<!doctype html>
<?php include_once '../config.php'; ?>
<?php 
error_reporting(0);
if($_SESSION['level']==""){
    echo '<script type="text/javascript"> alert("Anda Belum Masuk dengan Akun Anda!");
    window.location = "../index.php";
    </script>';
}
?>
<html style="background:#000;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Sribukita - Sistem Pakar Gizi Buruk Balita</title>
<link rel="icon" href="../pavicon.png" type="image/png">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/table.css" rel="stylesheet" type="text/css">
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
        <li class="active"><a href="#">Penyakit</a></li>
        <li><a href="solusi.php">Solusi</a></li>
        <li><a href="pengguna.php">Pengguna</a></li>
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
    <h2>Daftar Penyakit:</h2>
    <div align="right"><a href="pen_tambah.php" class="read_more2">TAMBAH DATA</a></div>
    <br>
		<?php
        $sql = 'SELECT * FROM daftar_penyakit';
        $query = mysqli_query($con, $sql);
        if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
        }
        echo '<table class="table1">
		<thead>
			<tr>
				<th>ID PENYAKIT</th>
				<th>NAMA PENYAKIT</th>
				<th>NPENYAKIT</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>';
        while ($row = mysqli_fetch_array($query)){
        echo '<tr>
			<td>'.$row['id_penyakit'].'</td>
			<td>'.$row['nama_penyakit'].'</td>
			<td>'.$row['npenyakit'].'</td>
			<td>
            <a href="pen_hapus.php?id_penyakit='.$row['id_penyakit'].'">Hapus</a> | 
            <a href="pen_edit.php?id_penyakit='.$row['id_penyakit'].'">Edit</a>
            </td>
		</tr>';
        }
        echo '
        </tbody>
        </table>';
        mysqli_free_result($query);
        mysqli_close($con);
        ?>
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