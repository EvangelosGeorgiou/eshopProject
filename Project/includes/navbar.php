<nav id="navbar" class="container-fluid navbar navbar-dark sticky-top navbar-expand-lg d-flex justify-content-between bg-dark ">
	<a class="navbar-brand" href="index.php"><img src="css/Pictures/alkemy.jpg" class = "border-0 "alt="" width="80" height="80"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="navbarSupportedContent" class="collapse navbar-collapse ">
		<div class="d-md-flex d-block flex-row mx-md-auto mx-0">
			<ul class ="pl-5"  style = "font-size:18px">
				<li class = "d-inline-block pr-2" ><a href="index.php">Home</a></li>
				<li class = "d-inline-block"><a href="">About Us</a></li>
				<li class="nav-item dropdown d-inline-block">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false" href="#">Jewellerys</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" style="color: black;" href="">Necklaces</a>
						<a class="dropdown-item" style=" color: black;" href="rings.php">Rings</a>
						<a class="dropdown-item" style=" color: black;" href="#">Braclets</a>
						<a class="dropdown-item" style="color: black;" href="earrings.php">Earrings</a>
					</div>
				</li>
				<li class="nav-item dropdown d-inline-block pr-2">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false" href="#">Gifts/Home Accessories</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" style="color: black;" href="">Bookmarks</a>
						<a class="dropdown-item" style=" color: black;" href="rings.php">Ashers</a>
						<a class="dropdown-item" style=" color: black;" href="#">Candle Holders</a>
						<a class="dropdown-item" style="color: black;" href="earrings.php">Coasters</a>
					</div>
				</li>
				<li class = "d-inline-block pr-2"><a href="newsEvents.php">News/Events</a></li>
				<li class = "d-inline-block"><a href="contactForm.php">Contact us</a></li>
			</ul>
			<!-- Search
			<form class="form-check-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>

			-->

		</div>
		<div class="nav navbar-nav justify-content-end">
			<ul  class= "pt-2" id="signin" style = "font-size:18px">
				<li class= "d-inline-block pr-3"><a href="signin.php">Sign in</a></li>
				<!--<li><a href="">Wishlist</a></li> -->
				<li class= "d-inline-block" style="color: white;"><a href=""><span class="fa fa-shopping-basket" width="16px" height="16px"></span></a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- sticky navbar -->
<script>
	window.onscroll = function () {
		myFunction()
	};

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}
</script>