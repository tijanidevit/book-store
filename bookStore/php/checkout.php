<?php 
	session_start();
	include_once 'connect.php';
	
	$book_id = $_POST["book_id"];
	$qty = $_POST["qty"];
	$student_id = $_POST["student_id"];
	$pickup_location_id = $_POST["pickup_location_id"];
	$fetch_book = $conn->query("SELECT * FROM book WHERE book_id = '$book_id' ");
	$row = $fetch_book->fetch_assoc();
	$original_quantity = $row["quantity"];
	$new_quantity = $original_quantity - 1;



	$order_query = $conn->query("INSERT INTO `orders`(`book_id`, `student_id`, `qty`, `pickup_location_id`) VALUES ('$book_id','$student_id','$qty','$pickup_location_id') ");

	if ($order_query) {
		$update_query = $conn->query("UPDATE book set quantity = '$new_quantity' WHERE book_id = '$book_id' ");
	}
?>