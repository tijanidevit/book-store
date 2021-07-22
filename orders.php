<?php 
session_start();
include_once 'connect.php';
if (!isset($_SESSION["student_book"])) {
	header("location: index.php?login");
}

$student = $_SESSION["student_book"];
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
<div class="container">
	<h4>Your Orders <?php echo $student ?> </h4>
<?php 
	$fetch_book = $conn->query("SELECT * FROM `orders` JOIN `book` on `orders`.`book_id` = `book`.`book_id` WHERE `student` = '$student' ORDER BY `order_id` DESC LIMIT 10 ");
?>
<?php if ($fetch_book->num_rows > 0): ?>
	<table class='table table-striped'>
		<tr>
			<th>Book Ordered</th>
			<th>Date of Order</th>
		</tr>
		<?php 
			while ($row = $fetch_book->fetch_assoc()) {
				?>
			<tr>
				<td><?php echo $row["name"] ?></td>
				<td><?php echo $row["date"] ?></td>
			</tr>
			<?php } ?>
		
	</table>
<?php endif ?>


<?php if ($fetch_book->num_rows < 1): ?>
	<p class="container">You have not yet made any order. Please select a book from <a href="books.php">Here</a></p>
<?php endif ?>
</div>


<?php include_once 'footer.php'; ?>