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
    <?php
    include "koneksi.php";

    $id_akun = $_GET['id_akun'];

    $query = mysqli_query($connect, "SELECT * FROM akun WHERE id_akun='$id_akun'");
    $data = mysqli_fetch_array($query);

    ?>
    <div class="container position-sticky z-index-sticky top-0 ">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-dark blur-rounded border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4 ">
                    <div class="container-fluid px-0 ">
                        <a class="navbar-brand font-weight-bolder ms-sm-3 text-white" href="index.php" title="Designed and Coded by Creative Tim" data-placement="bottom">
                            AMARTA SHOP
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover">
                                <li class="nav-item px-2">
                                    <a class="nav-link text-white opacity-8" href="index.php">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item px-2">
                                    <a class="nav-link text-white opacity-8" href="index.php">
                                        Top Up
                                    </a>
                                </li>

                                <li class="nav-item px-2">
                                    <a class="nav-link text-white opacity-8 " href="">
                                        About Us
                                    </a>
                                </li>
                            </ul>

                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle ps-2 d-flex align-items-center text-white" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons text-white opacity-6 me-2 text-md">account_circle</i>
                                        Account
                                    </a>
                                    <ul class="dropdown-menu ">
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="profil.php?id_akun=<?php echo $data['id_akun']; ?>">Profil</a></li>
                                        <li><a class="dropdown-item" href="riwayat.php?id_akun=<?php echo $data['id_akun']; ?>">Riwayat</a></li>
                                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                    </ul>

                        </div>
                        </li>

                        </ul>
                    </div>
            </div>
            </nav>
        </div>
    </div>
    </div>
    <!-- End Nabar -->


    <!-- main -->
    <div class="page-header align-items-start min-vh-100" style="background-image: url('bglogin-02.svg');" loading="lazy">
        <span class="mask bg-gradient-dark opacity-3"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto my-8">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3">
                            <div class="bg-me shadow-primary border-radius-lg py-3 pe-1">
                                <h2 class="text-white font-weight-bolder text-center mt-2 mb-0">Profil Akun </h2>
                            </div>
                        </div>
                        <div class="card-body">
                        <a class="btn btn-primary" type="button" name="Home" href="index.php">Kembali</a>
                            <form class="text-start" method="POST" action="edit_profil.php">
                                <h6>ID Akun</h6>
                                <div class="input-group input-group-outline my-3 is-focused">
                                    <label class="form-label">ID Akun</label>
                                    <input type="text" class="form-control" name="id_akun" value="<?php echo $data['id_akun']; ?>" readonly>
                                </div>
                                <h6>Username</h6>
                                <div class="input-group input-group-outline my-3 is-focused">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>">
                                </div>
                                <h6>Alamat Email</h6>
                                <div class="input-group input-group-outline my-3 is-focused">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                                </div>
                                <h6>Password</h6>
                                <div class="input-group input-group-outline mb-3 is-focused">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $data['password']; ?>">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-warning w-100" type="submit" name="Login">Simpan</button>
                                    <a class="btn btn-danger w-100" type="button" name="hapus" href="hapus_akun.php?id_akun=<?php echo $data['id_akun'] ?>">Hapus Akun</a>
                                </div>
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
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script> -->
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