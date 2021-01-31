<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "";
	$con = mysqli_connect("$host","$user","$pass");
	$db = mysqli_select_db($con, "giziburuk_nb");
?>