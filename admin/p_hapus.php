<?php
include '../config.php';
$id=$_GET['id_pengguna'];
mysqli_query($con, "delete from pengguna where id_pengguna='$id'");
mysqli_query($con, "ALTER TABLE pengguna ORDER BY id_pengguna");
mysqli_query($con, "SET @count:=0");
mysqli_query($con, "UPDATE pengguna SET id_pengguna=@count:=@count+1");
mysqli_query($con, "ALTER TABLE pengguna AUTO_INCREMENT=1");
header("location: pengguna.php");
?>