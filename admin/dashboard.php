<?php 
	session_start();
	if (!isset($_SESSION["admin_book"])) {
		header('location: index.php');
	}
	include_once '../connect.php';

	$book_query = $conn->query("SELECT * FROM book");
	$books = $book_query->num_rows;

	$orders_query = $conn->query("SELECT * FROM orders");
	$orders = $book_query->num_rows;
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Poly Consult | Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>

	<!--//skycons-icons-->
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<?php include_once 'header.php'; ?>
				<!-- //header-ends -->
				<div class="outter-wp">
					<!--custom-widgets-->
					<div class="custom-widgets">
						<div class="row-one">
							<div class="col-md-6 col-lg-6 widget">
								<div class="stats-left ">
									<h5>Total</h5>
									<h4> Books</h4>
								</div>
								<div class="stats-right">
									<label><?php echo $books ?></label>
								</div>
								<div class="clearfix"> </div>	
							</div>
							<div class="col-md-6 col-lg-6 widget states-mdl">
								<div class="stats-left">
									<h5>Total</h5>
									<h4>Orders</h4>
								</div>
								<div class="stats-right">
									<label> <?php echo $orders ?></label>
								</div>
								<div class="clearfix"> </div>	
							</div>
							<div class="clearfix"> </div>	
						</div>
					</div>
					<!--//bottom-grids-->

				</div>
				<!--/charts-inner-->
			</div>
			<!--//outer-wp-->
		</div>
		<!--footer section start-->
		<footer>
			<p>&copy; FPI POLY CONSULT <?php echo date('Y') ?></p>
		</footer>
		<!--footer section end-->
	</div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->
<?php include_once 'sidebar.php'; ?>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>