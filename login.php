<?php
ob_start();
session_start();
if (isset($_SESSION['email'])) {
    if ($_SESSION['role'] == 'administrator' || $_SESSION['role'] == 'panti' ) {
        header("Location: dashboard/index.php");
    }else{
        header("Location: view/index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet" />

    <title>Andini</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />

    <link rel="stylesheet" href="assets/css/styling2.css" />
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" alt="" />
                        </a>
                        <ul class="nav">
                        <li><a href="view/question/perilaku-prososial.php">Tes Kesehatan</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="welcome-area1" id="welcome">
        <!-- <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>
                            <strong>Login</strong>
                        </h1>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <section>
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100 margin-bottom-100">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="margin-bottom-30">
                        <h1>
                            <strong>Login</strong>
                        </h1>
                    </div>
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                            echo " <div class='alert alert-danger alert-dismissible fade show'>
                                        <strong>Mohon Maaf!</strong> Username atau password yang anda masukkan salah.
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>";
                        }
                    }
                    ?>

                    <form method="post" action="function/cekLogin.php">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password" />
                        </div>
                        <div class="text-end" style="text-align: right;">
                            <a href="view/question/registration.php"><label class="form-label">Register</label></a>
                        </div>

                        <div class="text-center text-lg-start mt-4">
                            <button type="submit" name="submit" class="btn btn-success btn-block btn-lg margin-top-30">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">
                        Copyright &copy; 2023 Tugas Akhir Andini Rahmadanti
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <?php include 'view/main_view/footer.php'; ?>