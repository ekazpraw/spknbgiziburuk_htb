<?php
include '../config.php';
$id = $_POST['id_gejala'];
$pertanyaan = $_POST['pertanyaan'];
$fakta_ya = $_POST['fakta_ya'];
$fakta_tidak = $_POST['fakta_tidak'];
$kwarshiorkor = $_POST['kwarshiorkor'];
$marasmikkwarshiorkor = $_POST['marasmik-kwarshiorkor'];
$marasmus = $_POST['marasmus'];
$rute = $_POST['rute'];
$status = '';
$id_penyakit = 0;
mysqli_query($con, "INSERT INTO basis_aturan VALUES('$id','$pertanyaan','$fakta_ya','$fakta_tidak','$kwarshiorkor','$marasmikkwarshiorkor','$marasmus','$rute','$status','$id_penyakit')");
header("location: basis_aturan.php"); 
?>