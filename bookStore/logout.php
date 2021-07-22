<?php 
	session_start();
	unset($_SESSION['pc_student']);

	header('location: auth');
?>