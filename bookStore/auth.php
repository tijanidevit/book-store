<?php 
session_start();
include_once 'php/connect.php';
if (isset($_SESSION["pc_student"])) {
    echo "<script> window.history.back()</script>";
}
    if (isset($_POST["register"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $matric = $_POST["matric"];

        $insert_query = $conn->query("INSERT INTO student values(null,'$fullname','$email','$password','$matric') ");
        if ($insert_query) {
            $select_query = $conn->query("SELECT * FROM student WHERE  password = '$password' AND matric = '$matric' ");
            $_SESSION["pc_student"] = $select_query->fetch_assoc();
            echo "<script> window.history.back()</script>";
        }
        else
            $errReg = true;
    }


    if (isset($_POST["login"])) {
        $password = $_POST["password"];
        $matric = $_POST["matric"];

        $select_query = $conn->query("SELECT * FROM student WHERE  password = '$password' AND matric = '$matric' ");
        if ($select_query->num_rows > 0) {
            $_SESSION["pc_student"] = $select_query->fetch_assoc();
            echo "<script> window.history.back()</script>";
        }
        else
            $errLog = true;
    }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poly Consult - Book Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <?php include "includes/header/main.php"; ?>

        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active">Login/Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <main class="inner-page-sec-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
                        <!-- Login Form s-->
                        <form method="post">
                            <div class="login-form">
                                <h4 class="login-title">New Customer</h4>
                                <p><span class="font-weight-bold">I am a new customer</span></p>
                                <?php if (isset($errReg)): ?>
                                    <div class="alert">Error with server </div>
                                <?php endif ?>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                        <label for="fullname">Full Name</label>
                                        <input class="mb-0 form-control" type="text" name="fullname" placeholder="Enter your full name">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label for="matric">Matric Number</label>
                                        <input class="mb-0 form-control" type="text" name="matric" placeholder="Enter Your Matric Number Here..">
                                    </div>
                                    <div class="col-lg-6 mb--20">
                                        <label for="password">Password </label>
                                        <input class="mb-0 form-control" type="password" name="password" placeholder="Enter your password">
                                    </div>
                                    <div class="col-lg-6 mb--20">
                                        <label for="email">Email Address</label>
                                        <input class="mb-0 form-control" type="email" name="email" placeholder="Enter your Email Address">
                                    </div>
                                    <div class="col-md-12">
                                        <button name="register" class="btn btn-outline-success">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form method="post">
                            <div class="login-form py-5">
                                <h4 class="login-title">Returning Customer</h4>
                                <p><span class="font-weight-bold">I am a returning customer</span></p>
                                <?php if (isset($errLog)): ?>
                                    <div class="alert">Invalid Credentials</div>
                                <?php endif ?>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb--15">
                                        <label for="email">Enter your email address here...</label>
                                        <input class="mb-0 form-control" type="text" name="matric" placeholder="Enter you matric number here...">
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label for="password">Password</label>
                                        <input class=" mb--20 form-control" type="password" name="password" placeholder="Enter your password">
                                    </div>
                                    <div class="col-md-12">
                                        <button name="login" class="btn btn-outline-info mb--20">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include "includes/footer/main.php"; ?>
</body>

</html>