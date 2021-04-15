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
 <div class = "wrap">
	<nav class = "navbar navbar-expand-md navbar-dark">
		<a class = "navbar-brand" href = "index.php"><img src ="kablio_foto/kablys2.png"></a>
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
				<li class ="nav-item active">
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
	<div class = 'container-fluid'>
		<div class ="row kont">
			<div class = "col-xl-3 kl">
				<h4 class = "title"><b>Adresas:</b><br>Kauno g. 5 
				Vilnius, Lietuva</h4>
				<br>
				<br>
				<br>
				<h4 class = "title"><b>Darbo laikas:</b><br></h4>
				Pirmadienis:   <span style="display:inline-block; width: 56px;"></span>21:00 - 03:00 <br>
				Antradienis:   <span style="display:inline-block; width: 58px;"></span>UŽDARYTA <br>
				Trečiadienis:  <span style="display:inline-block; width: 56px;"></span>UŽDARYTA <br>
				Ketvirtadienis:<span style="display:inline-block; width: 46px;"></span>UŽDARYTA <br>
				Penktadienis:  <span style="display:inline-block; width: 48px;"></span>23:00 - 06:00 <br>
				Šeštadienis:   <span style="display:inline-block; width: 59px;"></span>23:00 - 06:00 <br>
				Sekmadienis:   <span style="display:inline-block; width: 49px;"></span>UŽDARYTA <br>
				<br>
			</div>
			<div class = "col-xl-3 lm">
				<h4 class = "title"><b>Susisiekite:</b><br>
				Telefonu: <span style="display:inline-block; width: 10px;"></span>(8-665)21416 <br>
				El.paštu: <span style="display:inline-block; width: 18px;"></span>info@mankablys.lt <br>
				</h4>
				<br>
				
				<br>
				Facebook:<span style="display:inline-block; width: 10px;"></span><a href ="https://www.facebook.com/KablysClub/">KablysClub</a><br>
				Instagram:<span style="display:inline-block; width: 6px;"></span><a href ="https://www.instagram.com/kablysclub/">KablysClub</a><br>
				<br>
				<br>
				<b style ="color:red">Mieli lankytojai, prašome su savimi turėti asmens amžių liudijantį dokumentą (pasas, asmens tapatybės kortelė arba teisės). N-18</b><br>
				<br>
				<br>
			</div>
			<div class = "col-xl-5">
				<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2307.0614515080442!2d25.27519971587157!3d54.67334668027851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd946bc6833b59%3A0xebff520c918f44e1!2sKablys%2C%20Vilnius%2003214!5e0!3m2!1sen!2slt!4v1586773972187!5m2!1sen!2slt"  frameborder="0" style="border:0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	
	</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>