<?php 
    session_start();
    if (!isset($_SESSION["admin_book"])) {
        header('location: ./');
    }
    include_once '../php/connect.php';

    $id = $_GET['id'];
    $date = date('d/m/y');
    $update_query = $conn->query("UPDATE orders set status = 1, delivery_date = '$date' WHERE order_id = $id ");
    if ($update_query) {
    	$_SESSION['delivery_success'] = "Order Set as Delivered Successfully";
    	echo "<script>window.history.back()</script>";
    }
    else{
    	$_SESSION['delivery_error'] = "An Unexpected Error Occured";
    	echo "<script>window.history.back()</script>";
    }
?>