<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>YOMI COMPANY PROFILE</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="https://www.facebook.com/yomitea.id"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/watch?v=-adk5XUe7Vw"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://www.instagram.com/yomitea.id/?hl=id"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.php">YOMI CAFE</a></h1>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li class="active"><a href="service.php">SERVICE</a></li>
				<li><a href="menu.php">MENU</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Service</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-utensils"></i></div>
					<h4>FOOD</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-wifi"></i></div>
					<h4>WI-FI</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-coffee"></i></div>
					<h4>DRINK</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-home"></i></div>
					<h4>PLACE</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - yomi's website. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>