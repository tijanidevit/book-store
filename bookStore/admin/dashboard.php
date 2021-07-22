<?php 
	session_start();
	if (!isset($_SESSION["admin_book"])) {
		header('location: ./');
	}
	include_once '../php/connect.php';

	$book_query = $conn->query("SELECT * FROM book");
	$books = $book_query->num_rows;

	$orders_query = $conn->query("SELECT * FROM orders WHERE status = 0");
	$undelivered_orders = $book_query->num_rows;

	$orders_query = $conn->query("SELECT * FROM orders WHERE status = 1");
	$delivered_orders = $book_query->num_rows;

	$total_orders = $undelivered_orders + $delivered_orders;

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
	<title>Admin</title>
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
	<link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/perfect-scrollbar.min.css">
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
						<!--Statistics cards Starts-->

						<div class="row">

							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
								<div class="card bg-white">
									<div class="card-body">
										<div class="card-block pt-2 pb-0">
											<div class="media">
												<div class="media-body white text-left">
													<h4 class="font-medium-5 card-title mb-0"><?php echo $books ?></h4>
													<span class="grey darken-1">Total Books</span>
												</div>
												<div class="media-right text-right">
													<i class="icon-wallet font-large-1 success"></i>
												</div>
											</div>
										</div>
										<div id="Widget-line-chart2" class="height-150 lineChartWidget WidgetlineChart2 mb-2">
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
								<div class="card bg-white">
									<div class="card-body">
										<div class="card-block pt-2 pb-0">
											<div class="media">
												<div class="media-body white text-left">
													<h4 class="font-medium-5 card-title mb-0"><?php echo $total_orders ?>
													</h4>
													<span class="grey darken-1">Total Orders</span>
												</div>
												<div class="media-right text-right">
													<i class="icon-cup font-large-1 primary"></i>
												</div>
											</div>
										</div>
										<div id="Widget-line-chart" class="height-150 lineChartWidget WidgetlineChart mb-2">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
								<div class="card bg-white">
									<div class="card-body">
										<div class="card-block pt-2 pb-0">
											<div class="media">
												<div class="media-body white text-left">
													<h4 class="font-medium-5 card-title mb-0"><?php echo $undelivered_orders ?>
													</h4>
													<span class="grey darken-1">Undelivered Orders</span>
												</div>
												<div class="media-right text-right">
													<i class="icon-wallet font-large-1 warning"></i>
												</div>
											</div>
										</div>
										<div id="Widget-line-chart1" class="height-150 lineChartWidget WidgetlineChart1 mb-2">
										</div>

									</div>
								</div>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-6 col-12">
								<div class="card bg-white">
									<div class="card-body">
										<div class="card-block pt-2 pb-0">
											<div class="media">
												<div class="media-body white text-left">
													<h4 class="font-medium-5 card-title mb-0"> <?php echo $delivered_orders ?></h4>
													<span class="grey darken-1">Delivered Orders</span>
												</div>
												<div class="media-right text-right">
													<i class="icon-wallet font-large-1 success"></i>
												</div>
											</div>
										</div>
										<div id="Widget-line-chart3" class="height-150 lineChartWidget WidgetlineChar1 mb-2">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Statistics cards Ends-->
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
	<script src="./app-assets/vendors/js/prism.min.js"></script>
	<script src="./app-assets/vendors/js/jquery.matchHeight-min.js"></script>
	<script src="./app-assets/vendors/js/screenfull.min.js"></script>
	<script src="./app-assets/vendors/js/pace/pace.min.js"></script>
	<!-- BEGIN VENDOR JS-->
	<!-- BEGIN PAGE VENDOR JS-->
	<script src="./app-assets/vendors/js/chartist.min.js"></script>
	<!-- END PAGE VENDOR JS-->
	<!-- BEGIN CONVEX JS-->
	<script src="./app-assets/js/app-sidebar.js"></script>
	<!-- END CONVEX JS-->
	<!-- BEGIN PAGE LEVEL JS-->
	<script src="./app-assets/js/dashboard-ecommerce.js"></script>
	<!-- END PAGE LEVEL JS-->
</body>

</html>