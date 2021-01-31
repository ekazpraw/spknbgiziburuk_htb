<?php
include '../config.php';
$id = $_POST['id_solusi'];
$solusi = $_POST['solusi'];
$id_penyakit = $_POST['id_penyakit'];
mysqli_query($con, "UPDATE daftar_solusi SET solusi='$solusi', id_penyakit='$id_penyakit' where id_solusi='$id'");
header("location: solusi.php");
?>