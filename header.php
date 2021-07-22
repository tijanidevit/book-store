
		<nav class=" navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/logo.png" width="40px" /></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<?php if (isset($_SESSION["student_book"])): ?>
							<li class="nav-item">
								<a class="nav-link" href="books.php">Books</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="orders.php">My Orders</a>
							</li>
							<li class="nav-item">
								<a class="nav-link alert-danger" href="logout.php">Logout</a>
							</li>						
						<?php endif ?>

						<?php if (!isset($_SESSION["student_book"])): ?>
						<li class="nav-item">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="register.php">Register</a>
						</li>				
						<?php endif ?>
					</ul>
				</div>
			</div>
		</nav>