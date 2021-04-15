<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="puslapio_css.css">
	<link rel="icon" href="kablio_foto/kablys2.png" type="image/icon type">
    <title>Klubas Kablys</title>
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">
  
	<nav class = "navbar navbar-expand-md navbar-dark">
		<a class = "navbar-brand" href = "psl_pagrindinis.php"><img src ="kablio_foto/kablys2.png"></a>
		<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarResponsive">
		<span class = "navbar-toggler-icon"></span>
		</button>
		<div class = "collapse navbar-collapse" id="navbarResponsive">
			<ul class ="navbar-nav ml-auto nav-pills">
				<li class ="nav-item">
					<a class ="nav-link" href ="psl_renginiai.php">Renginiai</a>
				</li>
				<li class ="nav-item">
					<a class ="nav-link" href ="psl_galerija.php">Galerija</a>
				</li>
				<li class ="nav-item">
					<a class ="nav-link" href ="psl_apie_mus.php">Apie mus</a>
				</li>
				<li class ="nav-item">
					<a class ="nav-link" href ="psl_kontaktai.php">Kontaktai</a>
				</li>
				<?php
					if (isset($_SESSION["useruid"])) {
						echo "<li class ='nav-item'>
						<a class ='nav-link'>Sveiki atvykę, ".$_SESSION["useruid"]."</a>
						</li>";
						echo "<li class ='nav-item'>
						<a class ='nav-link' href ='includes/logout.inc.php'>Atsijungti</a>
						</li>";
					} else {
						echo "<li class ='nav-item'>
						<a class ='nav-link' href ='prisiregistruoti.php'>Prisiregistruoti</a>
						</li>";
						echo "<li class ='nav-item'>
						<a class ='nav-link' href ='prisijungti.php'>Prisijungti</a>
						</li>";
					}
				?>
			</ul>
		</div>
	</nav>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
	  <div class="carousel-inner">
		<div class="carousel-item active" data-interval="10000">
			<img src="kablio_foto/minimal.jpg" class="d-block w-100">
		</div>
		<div class="carousel-item" data-interval="4000">
		  <img src="kablio_foto/palme.jpg" class="d-block w-100">
		</div>
		<div class="carousel-item" data-interval="4000">
		  <img src="kablio_foto/knoc6.jpg" class="d-block w-100">
		</div>
	  </div>
	</div>
	<div class = 'container-fluid'>
		<div class = 'row'> 
				<div style="background-image: url(kablio_foto/ingloom.jpg);" class = 'col-xl-4 ab'>
					<div class ="on">
						<div class ="in">
							<div class="top">
							<h3>In Gloom: L.F.T.</h3>
							</div>
							<div class ="data">2020 / 02 / 15</div>
						</div>
					</div>
				</div>
				<div class = 'col-xl-5 ln'>
					<div class ="on">
						<div class ="in">
							<div class="top">
							<h3>Black Wave: Milena Glowacka</h3>
							</div>
							<div class ="data">2020 / 02 / 22</div>
						</div>
					</div>
				</div>
				<div class = 'col-xl-3 bc'>
					<div class ="on">
						<div class ="in">
							<div class="top">
							<h3 class ="title">Cape Kablys</h3>
							</div>
							<div class ="data">2020 / 08 / 07</div>
						</div>
					</div>
				</div>
				
		</div>
		<div class = 'row'>
				<div class = 'col-xl-3 de'>
					<div class ="on">
						<div class ="in">
							<div class="top">
							<h3 class ="title">Labirintas</h3>
							</div>
							<div class ="data">2020 / 11 / 13</div>
						</div>
					</div>
				</div>
				<div class = 'col-xl-5 ef'>
					<div class ="on">
						<div class ="in">
							<div class="top">
							<h3 class ="title">Kablys 8</h3>
							</div>
							<div class ="data">2020 / 03 / 27</div>
						</div>
					</div>
				</div>
				<div class = 'col-xl-4 fg'>
					<div class ="on">
						<div class ="in">
							<div class="top">
							<h3 class ="title">Intensia: Ayarcana</h3>
							</div>
							<div class ="data">2020 / 03 / 20</div>
						</div>
					</div>
				</div>
		</div>
	</div>
    <!-- Optional JavaScript --
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>