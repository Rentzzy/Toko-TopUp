<?php
	include 'koneksi.php';

	$id_akun	    = $_POST['id_akun'];
	$username       = $_POST['username'];
	$email	        = $_POST['email'];
    $password       = $_POST['password'];

	$sql	= "UPDATE akun SET username='$username', email='$email', password='$password' where id_akun='$id_akun' ";

	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("location:profil.php?id_akun=$id_akun");

	} else {
		header("location:profil.php$id_akun");
	}
?>