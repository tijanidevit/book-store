<?php 
	session_start();
	include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Poly Consult Books</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/tijani.css" />
</head>
<body>
	<?php if (isset($_GET["login"])): ?>
		<?php if (!isset($_SESSION["student_book"])): ?>
			<script>alert("Please Login or Register to continue")</script>			
		<?php endif ?>
	<?php endif ?>
	<?php include_once 'header.php' ?>
	<header> 
		<div class="title-area">
			<h1>Poly Consult</h1>
		</div>
		<?php if (!isset($_SESSION["student_book"])): ?>
		<div class="button-area">
			<a href="register.php" class="btn-get">Get Started</a>
			<a href="login.php" class="btn-log">Login</a>
			<a href="#contact" class="btn-get">Contact Us</a>
		</div>
			
		<?php endif ?>
	</header>
	
	<br>
	<section class="container">
		<h4 class="text-center text-uppercase">Choose Book Today</h4>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/books1.png" width="100%" height="40%" />
				<p class="text-center">Education is the best legacy! The books you read determines what you know</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/up.jpg" width="100%" height="40%" />
				<p class="text-center">Getting the best of books and reasing them brings new ideas and innovations</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/widened.jpg" width="100%" height="40%" />
				<p class="text-center">Widen your knowledge with several books available for sales at your own reach</p>
			</div>
		</div>
	</section>

	<div class="container" style="margin-top: -10%">
		<h4 class="text-center text-uppercase">Recently Added Books</h4>
		<div class="row">
			<?php 
				$fetch_book = $conn->query("SELECT * FROM book ORDER by book_id desc LIMIT 6 ");
				while ($row = $fetch_book->fetch_assoc()) {
			?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="card">
					<img src="images/<?php echo $row["cover"] ?>" width="100%" height="300px"/>
					<h4 class="card-title text-center"><?php echo $row["name"] ?></h4>
					<p class="card-text">&#8358;<?php echo $row["price"] ?> - <?php echo $row["dept"] ?></p>
					<p><?php echo $row["quantity"] ?> copies available <a href="details.php?id=<?php echo $row["book_id"] ?>" class="btn btn-outline-gold float-right">Details</a></p>
				</div> 
			</div>
			<?php } ?>
		</div>
	</div>

	<?php include_once 'footer.php'; ?>