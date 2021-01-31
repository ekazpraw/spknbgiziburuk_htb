<?php
include '../config.php';
$id_gejala=$_POST['id_gejala'];
$gejala=$_POST['gejala'];
mysqli_query($con, "UPDATE daftar_gejala SET gejala='$gejala' where id_gejala='$id_gejala'");
header("location: gejala.php");
?>