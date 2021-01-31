<?php
include '../config.php';
$id = $_POST['id_gejala'];
$gejala = $_POST['gejala'];
mysqli_query($con, "INSERT INTO daftar_gejala VALUES('$id','$gejala')");
header("location: gejala.php"); 
?>