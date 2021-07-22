<div class="sidebar-menu">
	<header class="logo">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>Poly Consult</h1></span> 
			<!--<img id="logo" src="" alt="Logo"/>--> 
		</a> 
	</header>
	<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
	<!--/down-->
	<div class="down">	
		<a href="#"><img src="../images/logo.png" width="20%"></a>
		<p>Poly Consult Administrator</p>
		<ul>
			<li><a href="logout.php" class="text-danger">Logout</a></li>
		</ul>
	</div>
	<!--//down-->
	<div class="menu">
		<ul id="menu" >
			<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
			<li id="menu-academico" ><a href="#"><i class="fa fa-book"></i> <span> Books</span> <span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-avaliacoes" ><a href="books.php">View Books</a></li>
					<li id="menu-academico-boletim" ><a href="add_book.php">Add New Book</a></li>
				</ul>
			</li>
			<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Orders</span> <span class="fa fa-angle-right" style="float: right"></span></a>
				<ul id="menu-academico-sub" >
					<li id="menu-academico-avaliacoes" ><a href="orders.php">Orders List</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<div class="clearfix"></div>		
</div>
<script>
	var toggle = true;

	$(".sidebar-icon").click(function() {                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({"position":"relative"});
			}, 400);
		}

		toggle = !toggle;
	});
</script>