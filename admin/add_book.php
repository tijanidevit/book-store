<?php 
session_start();
if (!isset($_SESSION["admin_book"])) {
	header('location: index.php');
}
include_once '../connect.php';

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$authors = $_POST["authors"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$dept = $_POST["dept"];

	$cover = $_FILES["cover"]["name"];
	$cover_loc = $_FILES["cover"]["tmp_name"];

	move_uploaded_file($cover_loc, '../images/'.$cover);

	$quantity = $_POST["quantity"];

	$insert_query = $conn->query("INSERT INTO book values(null,'$name','$authors','$description','$price','$dept','$cover','$quantity') ");
	if ($insert_query) {
		$success = true;
	}
	else
		$err = true;
}
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
					<h4 class="text-center text-uppercase">Add a new book</h4>
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="card">
								<form method="post" enctype="multipart/form-data" style="padding:20px" >
									<?php if (isset($err)): ?>	
										<div class="alert alert-danger">Server Error!!!</div>
									<?php endif ?>
									<?php if (isset($success)): ?>	
										<div class="alert alert-success"><?php echo $name ?> Added Successfully</div>
									<?php endif ?>
									<div class="form-group">
										<label>Book Name</label>
										<input type="text" class="form-control" name="name" required >
									</div>
									<div class="form-group">
										<label>Authors</label>
										<input type="text" class="form-control" name="authors" required >
									</div>
									<div class="form-group">
										<label>Price</label>
										<input type="price" minvalue="100" class="form-control" name="price" required >
									</div>
									<div class="form-group">
										<label>Quantity</label>
										<input type="price" minvalue="1" class="form-control" name="quantity" required >
									</div>
									<div class="form-group">
										<label>Cover Image</label>
										<input type="file" accept="images/*" class="form-control" name="cover" required >
									</div>
									<div class="form-group">
										<select class="form-control" name="dept"> 
											<option>Computer Science</option>
											<option>Mathematics and Statistics</option>
											<option>Marketing</option>
											<option>Taxation</option>
											<option>Science Laboratory Technology</option>
											<option>Mechanical Engineeringz</option>
										</select>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea type="text" class="form-control" name="description" required></textarea>
									</div>
									<div class="submit"><input type="submit" name="submit" type="submit" value="Add" ></div>
									<div class="clearfix"></div>
								</form> 
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
					<!--/charts-inner-->
				</div>
				<!--//outer-wp-->
			</div>
			<br />
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