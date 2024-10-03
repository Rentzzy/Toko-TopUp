
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />



</head>

<body class="index-page bg-gray-200">
    <!-- main -->
    <div class="page-header align-items-start min-vh-100" style="background-image: url('bglogin-02.svg');" loading="lazy">
        <span class="mask bg-gradient-dark opacity-3"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-me shadow-primary border-radius-lg py-3 pe-1">
                                <h2 class="text-white font-weight-bolder text-center mt-2 mb-0">AMARTA SHOP</h2>
                                <h3 class="text-white font-weight-bolder text-center mt-2 mb-0">LOG IN</h3>
                                <div align="center" class="text-white">
                                    <?php
									if (isset($_GET['pesan'])) {
                                        if ($_GET['pesan'] == "gagal") {
                                            echo "Login Gagal! Username dan Password Salah";
										} else if ($_GET['pesan'] == "logout") {
                                            echo "Anda telah berhasil Logout";
										} else if ($_GET['pesan'] == "belum_login") {
                                            echo "Masukan Username dan Password";
										} else if ($_GET['pesan'] == "akun_dibuat") {
                                            echo "Akun Anda Telah Berhasil Dibuat";
										}  else if ($_GET['pesan'] == "akun_dihapus") {
                                            echo "Akun Anda Telah Berhasil Dihapus";
										}
									}
                                    ?>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-2 text-center ms-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-facebook text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center px-1">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-twitter text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center me-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-google text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="text-start" method="POST" action="login_proses.php">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="text-center">
                                <button class="btn btn-primary w-100" type="submit" name="Login">Login</button>
                                </div>
                            </form>
                            <div class=" text-center text-black-50">
                                Belum Punya akun Registrasi <a href="regis.php"> ->Di Sini<- </a>
                            </div>
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