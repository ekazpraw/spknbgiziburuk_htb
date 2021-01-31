<?php
include '../config.php';
$id=$_GET['id_basisaturan'];
mysqli_query($con, "delete from basis_aturan where id_gejala='$id'");
header("location: basis_aturan.php");
?>