<?php
include '../config.php';
$id = $_POST['id_solusi'];
$solusi = $_POST['solusi'];
$id_penyakit = $_POST['id_penyakit'];
mysqli_query($con, "INSERT INTO daftar_solusi VALUES('$id','$solusi','$id_penyakit')");
header("location: solusi.php"); 
?>