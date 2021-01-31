<?php
include '../config.php';
$id=$_GET['id_gejala'];
mysqli_query($con, "delete from daftar_gejala where id_gejala='$id'");
header("location: gejala.php");
?>