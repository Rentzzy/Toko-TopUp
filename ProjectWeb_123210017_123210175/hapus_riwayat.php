<?php
	include "koneksi.php";
	
	$id_akun = $_GET['id_akun'];
	$query=mysqli_query($connect,"DELETE FROM transaksi where id_akun=$id_akun");
	
	if($query)
	{
	 	header("location:riwayat.php?id_akun=$id_akun");
	}
	else
	{
	 	echo "Proses Input gagal";
	}
?>