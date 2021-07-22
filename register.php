<?php 
session_start();
include_once 'connect.php';
if (isset($_SESSION["student_book"])) {
	header("location: index.php");
}

if (isset($_POST["submit"])) {
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$matric = $_POST["matric"];

	$insert_query = $conn->query("INSERT INTO student values(null,'$fullname','$email','$password','$matric') ");
	if ($insert_query) {
		$_SESSION["student_book"] = $matric;
		header('location: index.php');
	}
	else
		$err = true;
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

<br />

<div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<form method="post">
				<h4 class="text-center">Register Here</h4>
				<?php if (isset($err)): ?>	
					<div class="alert alert-danger">Invalid Credentials</div>
				<?php endif ?>
				<div class="card" style="padding:20px">
					<div class="form-group">
						<label>Fullname</label>
						<input type="text" name="fullname" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="email" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Matric NUmber</label>
						<input type="text" name="matric" class="form-control" required />
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required />
					</div>
					<div class="form-group">
						<button name="submit" class="form-control btn btn-outline-gold">Register</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-3"></div>
	</div>
</div>


<?php include_once 'footer.php'; ?>