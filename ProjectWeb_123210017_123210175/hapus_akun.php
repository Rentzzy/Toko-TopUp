<?php
	include "koneksi.php";
	
	$id_akun = $_GET['id_akun'];
	$query=mysqli_query($connect,"DELETE FROM akun where id_akun=$id_akun");
	
	if($query)
	{
	 	header("location:login.php?pesan=akun_dihapus");
	}
	else
	{
	 	echo "Proses Input gagal";
	}
?>