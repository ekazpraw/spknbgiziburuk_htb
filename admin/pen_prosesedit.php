<?php
include '../config.php';
$id = $_POST['id_penyakit'];
$nama_penyakit = $_POST['nama_penyakit'];
$npenyakit = $_POST['npenyakit'];
mysqli_query($con, "UPDATE daftar_penyakit SET nama_penyakit='$nama_penyakit', npenyakit='$npenyakit' where id_penyakit='$id'");
header("location: penyakit.php");
?>