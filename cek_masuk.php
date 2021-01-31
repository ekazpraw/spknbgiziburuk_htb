<?php 
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($con, "select * from pengguna where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location: admin/index.php");
	}else if($data['level']=="pengguna"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengguna";
		header("location: periksa.php");
	}else{
		header("location:masuk.php?pesan=Anda Gagal Masuk!");
	}	
}else{
	header("location:masuk.php?pesan=Anda Gagal Masuk!");
}
?>