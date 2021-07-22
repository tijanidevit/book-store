<?php 
session_start();
include_once 'connect.php';
if (!isset($_SESSION["student_book"])) {
	header("location: index.php?login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Poly Consult Books</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/tijani.css" />
</head>
<body>
	<?php include_once 'header.php' ?>
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

<section class="container" style="margin-top:-8%">
	<h4 class="text-center text-uppercase">Choose a Department to continue</h4>
	<form>	
		<div class="row">	
			<div class="col-10">		
				<select class="form-control" name="department"> 
					<option>Computer Science</option>
					<option>Mathematics and Statistics</option>
					<option>Marketing</option>
					<option>Taxation</option>
					<option>Science Laboratory Technology</option>
					<option>Mechanical Engineeringz</option>
				</select>
			</div>
			<div class="col-2">
				<button class="btn btn-outline-gold form-control" type="submit">Search</button>
			</div>
		</div>
	</form>	
</section>

<?php if (isset($_GET["department"])): ?>
<?php $dept = $_GET["department"] ?>
<br />
<div class="container">
	<h4 class="text-center text-uppercase">Books From <?php echo $dept ?></h4>
	<div class="row">
		<?php 
		$fetch_book = $conn->query("SELECT * FROM book WHERE dept like '%$dept%' ORDER by name ");
		if ($fetch_book->num_rows > 0) {
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
			<?php }}
			else
				echo "<p>No books available for this department</p>";
			 ?>
		</div>
</div>
<?php endif ?>

	<?php include_once 'footer.php'; ?>