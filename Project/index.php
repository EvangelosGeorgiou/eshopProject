<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--logo icon library-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Alkemy</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type = "text/css" href = "css/navbar.css">

</head>

<body>
	
	<!--
	<header id="main-header">
		<div>
			<h1 style="text-align: center;">K&E Alkemy</h1>
		</div>
	</header>
	-->

	<!-- Nav Bar-->
    <?php include 'includes/navbar.php'; ?>

	<!-- Slide Show-->
	<div class="mr-0 ml-0 py-0" class="context">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="css/Pictures/earrings.jpg" class="d-block w-100" alt="" width="1000px" height="500px">
				</div>
				<div class="carousel-item">
					<img src="css/Pictures/earrings2.jpg" alt="..." width="100%" width="1000px" height="500px">
				</div>
				<div class="carousel-item">
					<img src="css/Pictures/earrings3.jpg" alt="..." width="100%" width="1000px" height="500px">
				</div>
			</div>
			
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<br>

	<!-- New Creations-->
	<main id=main>
		<h2 class="text-center"> New Creations</h2>
		<div class="row pt-2">
			<div class="col-sm-4">
				<a href=""><img src="css/Pictures/earrings.jpg" class="d-block w-100" alt="" width="1000px"
						height="250px"></a>
				<p>Item name</p>
			</div>
			<div class="col-sm-4">
				<a href=""><img src="css/Pictures/earrings2.jpg" class="d-block w-100" alt="" width="1000px"
						height="250px"></a>
				<p>Item name</p>
			</div>
			<div class="col-sm-4">
				<a href=""><img src="css/Pictures/earrings3.jpg" class="d-block w-100" alt="" width="1000px"
						height="250px"></a>
				<p>Item name</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="css/Pictures/earrings3.jpg" class="d-block w-100" alt="" width="1000px" height="250px">
				<p>Item name</p>
			</div>
			<div class="col-sm-4">
				<img src="css/Pictures/earrings2.jpg" class="d-block w-100" alt="" width="1000px" height="250px">
				<p>Item name</p>
			</div>
			<div class="col-sm-4">
				<img src="css/Pictures/earrings.jpg" class="d-block w-100" alt="" width="1000px" height="250px">
				<p>Item name</p>
			</div>
		</div>
	</main>

	<!-- Footer-->
	<?php include 'includes/footer.php'; ?>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>


</body>

</html>