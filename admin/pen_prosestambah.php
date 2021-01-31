<?php
include '../config.php';
$id = $_POST['id_penyakit'];
$nama_penyakit = $_POST['nama_penyakit'];
$npenyakit = $_POST['npenyakit'];
mysqli_query($con, "INSERT INTO daftar_penyakit VALUES('$id','$nama_penyakit','$npenyakit')");
header("location: penyakit.php"); 
?>