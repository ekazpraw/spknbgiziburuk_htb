<?php
include '../config.php';
$id=$_GET['id_penyakit'];
mysqli_query($con, "delete from daftar_penyakit where id_penyakit='$id'");
header("location: penyakit.php");
?>