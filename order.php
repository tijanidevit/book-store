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
$student = $_SESSION["student_book"];
$id = $_GET["id"];
$fetch_book = $conn->query("SELECT * FROM book WHERE book_id = '$id' ");
$row = $fetch_book->fetch_assoc();
$original_quantity = $row["quantity"];
$new_quantity = $original_quantity - 1;
$date = date('y/m/d');

$order_query = $conn->query("INSERT INTO `orders`(`book_id`, `student`, `date`) VALUES ('$id','$student','$date') ");

if ($order_query) {
	$update_query = $conn->query("UPDATE book set quantity = '$new_quantity' WHERE book_id = '$id' ");
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

<br />
<?php if ($fetch_book->num_rows > 0): ?>
	<section class="">
		<h4 class="text-center text-uppercase"><?php echo $row["name"] ?> ordered successfully. Please get payment ready on delivery</h4>
			<center><img src="images/check.gif"/></center>
	</section>
<?php endif ?>


<?php if ($fetch_book->num_rows < 1): ?>
	<p class="container">This book does not exist in the store. Please select a book from <a href="books.php">Here</a></p>
<?php endif ?>


<?php include_once 'footer.php'; ?>