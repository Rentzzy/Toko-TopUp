<?php
	session_start();
	include "koneksi.php";

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$data = mysqli_query($connect, "INSERT INTO akun VALUES('','$username', '$password', '$email')");


	if($data){
		header("location:login.php?pesan=akun_dibuat");
	}
	else{
		header("location:login.php?pesan=gagal");
	}
?>