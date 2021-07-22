<?php 
session_start();
include_once 'connect.php';
if (!isset($_SESSION["student_book"])) {
	header("location: index.php?login");
}
if (!isset($_GET["id"])) {
	header("location: books.php");
	exit();
}
$id = $_GET["id"];
$fetch_book = $conn->query("SELECT * FROM book WHERE book_id = '$id' ");
$row = $fetch_book->fetch_assoc();
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

<br />
<?php if ($fetch_book->num_rows > 0): ?>
	<section class="container">
		<h4 class="text-center text-uppercase"><?php echo $row["name"] ?></h4>
		<form>	
			<div class="row">	
				<div class="col-6">
					<div class="card">
						<img src="images/<?php echo $row["cover"] ?>" width="100%" height="300px"/>
					</div> 
				</div>
				<div class="col-6">
					<h4 class="card-title text-center"><?php echo $row["name"] ?></h4>
					<p class="card-text">Price: &#8358;<?php echo $row["price"] ?></p>
					<p class="card-text">Department: <?php echo $row["dept"] ?></p>
					<p class="card-text">Description: <?php echo $row["description"] ?></p>
					<p><?php echo $row["quantity"] ?> copies available</p>
					<a href="order.php?id=<?php echo $row["book_id"] ?>" class="btn btn-outline-gold float-right">Order Now</a>
				</div>
			</div>
		</form>	
	</section>
<?php endif ?>


<?php if ($fetch_book->num_rows < 1): ?>
	<p class="container">This book does not exist in the store. Please select a book from <a href="books.php">Here</a></p>
<?php endif ?>


<?php include_once 'footer.php'; ?>