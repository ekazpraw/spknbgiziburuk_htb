<?php
include '../config.php';
$id=$_GET['id_solusi'];
mysqli_query($con, "delete from daftar_solusi where id_solusi='$id'");
header("location: solusi.php");
?>