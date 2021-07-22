<?php 
session_start();
include_once '../connect.php';
if (isset($_SESSION["admin_book"])) {
	header("location: dashboard.php");
}

if (isset($_POST["submit"])) {
	$password = $_POST["password"];
	$username = $_POST["username"];

	$select_query = $conn->query("SELECT * FROM admin WHERE  username = '$username' AND password = '$password' ");
	if ($select_query->num_rows > 0) {
		$_SESSION["admin_book"] = true;
		header('location: dashboard.php');
	}
	else
		$err = true;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Poly Consult | Login</title>
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
<!--clock init-->
</head> 
<body>
	<!--/login-->

	<!--/login-top-->

	<div class="error-top">
		<h2 class="inner-tittle page text-dark" style="color: #000 !important;">Poly Consult</h2>
		<div class="login">
			<h3 class="inner-tittle t-inner">Login</h3>
			<form method="post">
				<?php if (isset($err)): ?>	
					<div class="alert alert-danger">Invalid Credentials</div>
				<?php endif ?>
				<input type="text" class="text" value="username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" >
				<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				<div class="submit"><input type="submit" name="submit" type="submit" onclick="myFunction()" value="Login" ></div>
				<div class="clearfix"></div>
			</form>
		</div>

		<!--//login-top-->
	</div>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>