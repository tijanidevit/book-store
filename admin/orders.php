<?php 
session_start();
if (!isset($_SESSION["admin_book"])) {
	header('location: index.php');
}
include_once '../connect.php';

$order_query = $conn->query("SELECT * FROM orders JOIN book on book.book_id = orders.book_id ORDER BY order_id DESC");
$orders = $order_query->num_rows;
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
					<h4 class="text-center text-uppercase">Orders List</h4>
					<?php if ($orders > 0): ?>
						
					<div class="tables">

						<table class="table">
							<thead>
								<tr>
									<th>Book Ordered</th>
									<th>Student</th>
									<th>Date of Order</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($row = $order_query->fetch_assoc()) {
								 ?>
								<tr>
									<td><?php echo $row["name"] ?></td>
									<td><?php echo $row["student"] ?></td>
									<td><?php echo $row["date"] ?></td>
									<td>&#8358;<?php echo $row["price"] ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<?php endif ?>
					<?php if ($orders < 1): ?>
						<p class="container">No orders has been made yet.</p>
					<?php endif ?>
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