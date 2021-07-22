<!DOCTYPE html>

<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Registered Lecturers</title>
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
                                                <h4 class="card-title">Add New Book</h4>
                                            </div>
                                        </div>
                                        <div class="card-body collapse show">
                                            <div class="card-block card-dashboard">

                                                <form action="#" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Title</label>
                                                            <input type="text" name="title" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">ISBN</label>
                                                            <input type="text" name="isbn" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Qty</label>
                                                            <input type="number" name="qty" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Author (<a href="new-author">Add New</a>)</label>
                                                            <select name="author" id="" class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="">Adewlae rr</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Price</label>
                                                            <input type="number" name="price" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Cover Image</label>
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="">Description</label>
                                                            <textarea name="description" class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
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