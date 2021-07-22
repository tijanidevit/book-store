<!DOCTYPE html>

<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Notifications</title>
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
    <link rel="stylesheet" type="text/css" href="./app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/app.css">
</head>

<body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


        <?php
        include "includes/widget/sidebar.php";
        include "includes/widget/navbar.php";

        ?>
        <div class="main-panel">
            <div class="main-content">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <!-- Basic form layout section start -->
                        <section id="dom">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title-wrap bar-success">
                                                <h4 class="card-title">Notifications</h4>
                                            </div>
                                        </div>
                                        <div class="card-body collapse show">
                                            <div class="card-block card-dashboard">
                                                <div id="table-container">

                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning mr-2">1</span> <a class="text-secondary" target="_blank" href="actions/approve-lecturer.php?id=1">veniam adipisci non quaerat voluptate placeat dolorum nobis
                                                            </a>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iusto molestiae omnis. Explicabo, assumenda </p>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning mr-2">2</span> <a class="text-secondary" target="_blank" href="actions/approve-lecturer.php?id=1">veniam adipisci non quaerat voluptate placeat dolorum nobis
                                                            </a>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iusto molestiae omnis. Explicabo, assumenda </p>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning mr-2">3</span> <a class="text-secondary" target="_blank" href="actions/approve-lecturer.php?id=1">veniam adipisci non quaerat voluptate placeat dolorum nobis
                                                            </a>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iusto molestiae omnis. Explicabo, assumenda </p>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <span class="badge badge-warning mr-2">4</span> <a class="text-secondary" target="_blank" href="actions/approve-lecturer.php?id=1">veniam adipisci non quaerat voluptate placeat dolorum nobis
                                                            </a>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit iusto molestiae omnis. Explicabo, assumenda </p>
                                                        </li>

                                                    </ul>

                                                    <!-- NB:: IF NO NOTIIFICATION  -->

                                                    <!-- <h3 class="alert alert-info text-center">You do not have any notification at the moment.</h3> -->
                                                    <!-- NB:: IF NO NOTIIFICATION  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- // Basic form layout section end -->
                    </div>
                </div>
            </div>
            <?php include "includes/widget/footer.php"; ?>


        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="./app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="./app-assets/vendors/js/core/popper.min.js"></script>
    <script src="./app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="./app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="./app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="./app-assets/vendors/js/screenfull.min.js"></script>
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="./app-assets/vendors/js/datatable/datatables.min.js"></script>
    <script src="./app-assets/vendors/js/datatable/dataTables.buttons.min.js"></script>
    <script src="./app-assets/vendors/js/datatable/buttons.flash.min.js"></script>
    <script src="./app-assets/vendors/js/datatable/jszip.min.js"></script>
    <script src="./app-assets/vendors/js/datatable/pdfmake.min.js"></script>
    <script src="./app-assets/vendors/js/datatable/vfs_fonts.js"></script>
    <script src="./app-assets/vendors/js/datatable/buttons.html5.min.js"></script>
    <script src="./app-assets/vendors/js/datatable/buttons.print.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="./app-assets/js/app-sidebar.js"></script>
    <!-- END CONVEX JS-->

</body>

</html>