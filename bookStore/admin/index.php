<?php 
session_start();
include_once '../php/connect.php';
if (isset($_SESSION["admin_book"])) {
    header("location: dashboard.php");
}

if (isset($_POST["login"])) {
    $password = $_POST["password"];
    $username = $_POST["username"];

    $select_query = $conn->query("SELECT * FROM admin WHERE  username = '$username' AND password = '$password' ");
    if ($select_query->num_rows > 0) {
        $_SESSION["admin_book"] = true;
        header('location: dashboard.php');
    }
    else
        $err = true;
}
?>
<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Poly Consult</title>
    <link rel="apple-touch-icon" sizes="60x60" href="./app-assets/img/ico/apple-icon-60.html">
    <link rel="apple-touch-icon" sizes="76x76" href="./app-assets/img/ico/apple-icon-76.html">
    <link rel="apple-touch-icon" sizes="120x120" href="./app-assets/img/ico/apple-icon-120.html">
    <link rel="apple-touch-icon" sizes="152x152" href="./app-assets/img/ico/apple-icon-152.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/convex-bootstrap-admin-dashboard-template/app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="./app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/app.css">
</head>

<body data-col="1-column" class=" 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
        <!--Login Page Starts-->
        <section id="login">
            <div class="container-fluid">
                <div class="row full-height-vh">
                    <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                        <div class="card px-4 py-2 box-shadow-2 width-400">
                            <div class="card-header text-center">
                                <img src="./app-assets/img/logos/logo-color-big.png" alt="company-logo" class="mb-3" width="80">
                                <h4 class="text-uppercase text-bold-400 grey darken-1">Login</h4>

                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <form method="POST">
                                        <?php if (isset($err)): ?>
                                            <div class="form-group col-12">
                                                <span class="alert btn-block alert-danger">Invalid Credentials</span>
                                            </div>
                                        <?php endif ?>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="..." required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control form-control-lg" name="password" id="inputPass" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-5">
                                                        <input type="checkbox" class="custom-control-input" checked id="rememberme">
                                                        <label class="custom-control-label float-left" for="rememberme">Remember Me</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="text-center col-md-12">
                                                <button type="submit" name="login" id="btn-submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Login Page Ends-->
    </div>
    <script src="./app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script>
        $(function() {
            $('#btn-submit').click(function() {
                $(this).prepend('<i class="fa fa-spinner fa-spin"></i> ');

                setTimeout(() => {
                    $('#btn-submit .fa-spin').remove();
                }, 2000);
            })
        })
    </script>
</body>

</html>