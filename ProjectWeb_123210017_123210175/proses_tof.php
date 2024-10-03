<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location:login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="./assets/img/favicon.png">

	<title>
		Amarta Shop
	</title>



	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
	<link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!-- Nucleo Icons -->
	<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

	<!-- CSS Files -->

	<link id="pagestyle" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />



</head>

<body class="index-page bg-gray-200">
	<!-- main -->
	<div class="page-header align-items-start min-vh-100" style="background-image: url('bglogin-02.svg');" loading="lazy">
		<span class="mask bg-gradient-dark opacity-3"></span>
		<div class="container my-auto">
			<div class="row">
				<div class="col-md-8 col-12 mx-auto">
					<div class="card z-index-0 fadeIn3 fadeInBottom bg-white">
						<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
							<div class="bg-me shadow-primary border-radius-lg py-3 pe-1">
								<h2 class="text-white font-weight-bolder text-center mt-2 mb-0">AMARTA SHOP</h2>
								<h5 class="text-white font-weight-bolder text-center mt-2 mb-0"> Detail Pesanan</h5>
								<div align="center" class="text-white">
									<?php
									include "koneksi.php";
									$id = $_POST['id'];
									$user_id = $_POST['user_id'];
									$server = $_POST['server'];
									$email = $_POST['email'];
									$metode = $_POST['bayar'];
									$id_akun = $_POST['id_akun'];
									$game = $_POST['game'];
									$query = mysqli_query($connect, "SELECT * FROM tof where id=$id");
									$data = mysqli_fetch_array($query);
									?>

								</div>
							</div>
						</div>
						<div class="card-body">
							<form action="detail.php" method="POST">
								<input type="text" class="form-control" name="id_akun" value="<?php echo $id_akun; ?>" hidden>
								<input type="text" class="form-control" name="game" value="<?php echo $game; ?>" hidden>
								<div class="mb-2 row input-group input-group-outline">
									<label for="inputID" class="col-sm-3 col-form-label">UID :</label>
									<div class="col-sm-8">
										<input type="text" class=" form-control" name="user_id" value="<?php echo $user_id; ?>" readonly>
									</div>
								</div>
								<div class="mb-2 row input-group input-group-outline">
									<label for="inputID" class="col-sm-3 col-form-label">Server :</label>
									<div class="col-sm-8">
										<input type="text" class=" form-control" name="server" value="<?php echo $server; ?>" readonly>
									</div>
								</div>
								<div class="mb-2 row input-group input-group-outline">
									<label for="inputID" class="col-sm-3 col-form-label">Produk :</label>
									<div class="col-sm-8">
										<input type="text" class=" form-control" name="produk" value="<?php echo $data['nama']; ?>" readonly>
									</div>
								</div>
								<div class="mb-2 row input-group input-group-outline">
									<label for="inputID" class="col-sm-3 col-form-label">Harga Rp. </label>
									<div class="col-sm-8">
										<input type="text" class=" form-control" name="harga" value="<?php echo $data['harga']; ?>" readonly>
									</div>
								</div>
								<div class="mb-2 row input-group input-group-outline">
									<label for="inputID" class="col-sm-3 col-form-label">Pembayaran :</label>
									<div class="col-sm-8">
										<input type="text" class=" form-control" name="metode" value="<?php echo $metode; ?>" readonly>
									</div>
								</div>
								<button class="btn btn-primary w-100" type="submit" name="bayar">Bayar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end main -->






















		<!--   Core JS Files   -->
		<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
		<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
		<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
		<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
		<script src="./assets/js/plugins/countup.min.js"></script>
		<script src="./assets/js/plugins/choices.min.js"></script>
		<script src="./assets/js/plugins/prism.min.js"></script>
		<script src="./assets/js/plugins/highlight.min.js"></script>
		<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
		<script src="./assets/js/plugins/rellax.min.js"></script>
		<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
		<script src="./assets/js/plugins/tilt.min.js"></script>
		<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
		<script src="./assets/js/plugins/choices.min.js"></script>
		<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
		<script src="./assets/js/plugins/parallax.min.js"></script>
		<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
		<!--  Google Maps Plugin    -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
		<script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
		</script>
		<script type="text/javascript">
			if (document.getElementById('state1')) {
				const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
				if (!countUp.error) {
					countUp.start();
				} else {
					console.error(countUp.error);
				}
			}
			if (document.getElementById('state2')) {
				const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
				if (!countUp1.error) {
					countUp1.start();
				} else {
					console.error(countUp1.error);
				}
			}
			if (document.getElementById('state3')) {
				const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
				if (!countUp2.error) {
					countUp2.start();
				} else {
					console.error(countUp2.error);
				};
			}
		</script>


</body>

</html>