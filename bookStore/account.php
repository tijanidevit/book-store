<?php
session_start();
include_once 'php/connect.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poly Consult - User Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <?php 
            include "includes/header/main.php"; 
            $user_id = $student['student_id'];
            $email = $student['email'];
            $matric = $student['matric'];
            $phone = '08149617083';
            $department = 'Computer Science';

            $fullname = explode(" ", $student['fullname']);
            $first_name = $fullname[0];
            $last_name =  $fullname[1];

            $fetch_orders = $conn->query("SELECT * FROM orders JOIN pickup_location on orders.pickup_location_id = pickup_location.id JOIN book on orders.book_id = book.book_id where student_id = $user_id ORDER BY status DESC ");
        ?>
        <section class="breadcrumb-section">
            <h2 class="sr-only">Site Breadcrumb</h2>
            <div class="container">
                <div class="breadcrumb-contents">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active">My Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <div class="page-section inner-page-sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fas fa-tachometer-alt"></i>
                                        Dashboard</a>
                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                        Details</a>
                                    <a href="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12 mt--30 mt-lg--0">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>
                                            <div class="welcome mb-20">
                                                <p>Hello, <strong><?php echo $first_name ?></strong></p>
                                            </div>
                                            <p class="mb-0">From your account dashboard. you can easily check &amp; view
                                                your
                                                recent orders and account details.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order ID</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Quantity</th>
                                                            <th>Pickup Location</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while ($row = $fetch_orders->fetch_assoc()): ?>
                                                            <tr>
                                                                <td>PCO-<?php echo $row['order_id'] ?></td>
                                                                <td><?php echo $row['name'] ?></td>
                                                                <td><?php echo $row['date'] ?></td>
                                                                <td>
                                                                    <?php if ($row['status'] == 0): ?>
                                                                        Pending
                                                                    <?php else: ?>
                                                                        Delivered
                                                                    <?php endif ?>
                                                                </td>
                                                                <td><?php echo $row['qty'] ?></td>
                                                                <td><?php echo $row['pickup_location'] ?></td>
                                                            </tr>
                                                        <?php endwhile ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12  mb--30">
                                                            <input readonly id="first-name" value="<?php echo $first_name ?>" type="text">
                                                        </div>
                                                        <div class="col-lg-6 col-12  mb--30">
                                                            <input readonly id="last-name" value="<?php echo $last_name ?>" type="text">
                                                        </div>
                                                        <div class="col-12 mb--30">
                                                            <input readonly id="display-name" value="<?php echo $matric ?>" type="text">
                                                        </div>
                                                        <div class="col-12 mb--30">
                                                            <input readonly id="display-name" value="<?php echo $email ?>" type="text">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer/main.php"; ?>
</body>

</html>