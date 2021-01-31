<?php
include '../config.php';
$id = $_POST['id_pengguna'];
$nama_pengguna = $_POST['nama_pengguna'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
mysqli_query($con, "UPDATE pengguna SET nama_pengguna='$nama_pengguna', username='$username', password='$password', level='$level' where id_pengguna='$id'");
mysqli_query($con, "ALTER TABLE pengguna ORDER BY id_pengguna");
mysqli_query($con, "SET @count:=0");
mysqli_query($con, "UPDATE pengguna SET id_pengguna=@count:=@count+1");
mysqli_query($con, "ALTER TABLE pengguna AUTO_INCREMENT=1");
header("location: pengguna.php");
?>