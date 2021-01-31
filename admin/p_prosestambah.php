<?php
include '../config.php';
$id = $_POST['id_pengguna'];
$nama_pengguna = $_POST['nama_pengguna'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
mysqli_query($con, "INSERT INTO pengguna VALUES('$id','$nama_pengguna','$username','$password','$level')");
header("location: pengguna.php"); 
?>