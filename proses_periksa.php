<?php include_once 'config.php'; ?>
<?php 
if($_SESSION['level']==""){
    echo '<script type="text/javascript"> alert("Anda Belum Masuk dengan Akun Anda!");
    window.location = "index.php#tes_gizi";
    </script>';
}
?>
<?php
	if (!isset ($_SESSION['n_atas1'])){ $_SESSION['n_atas1'] = 1; }
    if (!isset ($_SESSION['n_atas2'])){ $_SESSION['n_atas2'] = 1; }
	if (!isset ($_SESSION['n_atas3'])){ $_SESSION['n_atas3'] = 1; }
	if (!isset($_SESSION['jumlah_keluhan'])){ $_SESSION['jumlah_keluhan'] = 0; }
    else { $_SESSION['jumlah_keluhan'] = $_SESSION['jumlah_keluhan']; }
	if (isset($_GET['jawaban'])){
		$jawaban = $_GET['jawaban'];
		$rute = $_GET['rute'];
    switch ($jawaban){
    case 'benar':
    $ssql = "SELECT * FROM basis_aturan WHERE id_gejala='$rute'";
    $query = mysqli_query($con, $ssql);
        while ($record = mysqli_fetch_array($query)){
            $rute = $record['rute'];
            $fakta_ya = $record['fakta_ya'];
            $kwarshiorkor = $record['kwarshiorkor'];
            $marasmikkwarshiorkor = $record['marasmik-kwarshiorkor'];
            $marasmus = $record['marasmus'];
        $_SESSION['keluhan'] [$_SESSION['jumlah_keluhan']] = $fakta_ya;
        $_SESSION['jumlah_keluhan'] += 1;
        $_SESSION['n_atas1'] *= $kwarshiorkor;
        $_SESSION['n_atas2'] *= $marasmikkwarshiorkor;
        $_SESSION['n_atas3'] *= $marasmus;
    if (strcmp($rute, 'final')==0){
        $solusi = $rute;
        $sakit = $record['id_penyakit'];
    header ("location:periksa.php?solusi=$rute");
    }else{ header ("location:periksa.php?rute=$rute"); }}				
break;
    case 'tidak':
    $ssql = "SELECT * FROM basis_aturan WHERE id_gejala='$rute'";
    $query = mysqli_query($con, $ssql);
        while ($record = mysqli_fetch_array($query)){
            $rute = $record['rute'];
            $fakta_tidak = $record['fakta_tidak'];
        $_SESSION['keluhan'] [$_SESSION['jumlah_keluhan']] = $fakta_tidak;
        $_SESSION['jumlah_keluhan'] += 1;
        $_SESSION['n_atas1'] *= 1;
        $_SESSION['n_atas2'] *= 1;
        $_SESSION['n_atas3'] *= 1;
    if (strcmp($rute, 'final')==0){
        $solusi = $rute;
        $sakit = $record['id_penyakit'];
    header ("location:periksa.php?solusi=$rute&sakit=$sakit");
    }else{ header ("location:periksa.php?rute=$rute"); }}
break;
    case 'mulai':
            $rute = $_GET['rute'];
    header ("location:periksa.php?rute=$rute");
break;
}}
?>