<?php 
    session_start();
    if (!isset($_SESSION["admin_book"])) {
        header('location: ./');
    }
    include_once '../php/connect.php';

    $order_query = $conn->query("SELECT * FROM orders JOIN pickup_location on orders.pickup_location_id = pickup_location.id JOIN book on book.book_id = orders.book_id JOIN student on student.student_id = orders.student_id WHERE status = 0 ORDER BY order_id DESC");
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
    <title>Undelivered Orders</title>
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
    <style>
        .picture {
            height: 50px;
            width: 50px;
            border-radius: 50px;
        }
    </style>
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
                                                <h4 class="card-title">Undelivered Orders</h4>
                                            </div>
                                        </div>
                                        <div class="card-body collapse show">
                                            <div class="card-block card-dashboard">
                                                <?php if (isset($_SESSION['delivery_success'])): ?>
                                                    <div class="alert alert-success"><?php echo $_SESSION['delivery_success']; unset($_SESSION['delivery_success']) ?></div>
                                                <?php endif ?>

                                                <?php if (isset($_SESSION['delivery_error'])): ?>
                                                    <div class="alert alert-danger"><?php echo $_SESSION['delivery_error']; unset($_SESSION['delivery_error']) ?></div>
                                                <?php endif ?>
                                                <h1 class="text-center" id="content-loader">
                                                    <i class="fa fa-spinner fa-spin"></i>
                                                </h1>
                                                <div id="table-container" style="display:none" class="table-responsive">
                                                    <table class="table table-striped table-bordered file-export" id="table-el">
                                                        <thead>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Order Ref</th>
                                                                <th>Title</th>
                                                                <th>Author</th>
                                                                <th>Order Ref</th>
                                                                <th>Student Name</th>
                                                                <th>Qty</th>
                                                                <th>Pickup Location</th>
                                                                <th>Date Ordered</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-body">
                                                            <?php $sn = 0; while ($order = $order_query->fetch_assoc()): $sn++; ?>
                                                                <tr>
                                                                    <td><?php echo $sn ?></td>
                                                                    <td>PCO-<?php echo $order['order_id'] ?></td>
                                                                    <td><?php echo $order['name'] ?></td>
                                                                    <td><?php echo $order['authors'] ?></td>
                                                                    <td>PCO-<?php echo $order['order_id'] ?></td>
                                                                    <td><?php echo $order['fullname'] ?></td>
                                                                    <td><?php echo $order['qty'] ?></td>
                                                                    <td><?php echo $order['pickup_location'] ?></td>
                                                                    <td><?php echo $order['date'] ?></td>
                                                                    <td><a href="set_as_delivered.php?id=<?php echo $order['order_id'] ?>" class="btn btn-sm btn-primary">Delivered</a></td>
                                                                </tr>
                                                            <?php endwhile ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Order Ref</th>
                                                                <th>Title</th>
                                                                <th>Author</th>
                                                                <th>Order Ref</th>
                                                                <th>Student Name</th>
                                                                <th>Qty</th>
                                                                <th>Pickup Location</th>
                                                                <th>Date Ordered</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
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

    <script src="./app-assets/js/data-tables/datatable-advanced.js"></script>
    <script>
        $(function() {
            setTimeout(() => {
                $('#content-loader').slideUp('slow', function() {
                    $('#table-container').slideDown();
                });
            }, 1000);
        })
    </script>
</body>

</html>