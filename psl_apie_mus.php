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
				<li class ="nav-item active">
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
	<div class = 'container-fluid'>
		<div class ="row">
			<div class = "col-xl-4 rs">
				<img style = "height:100%; width:500px;" src ="kablio_foto/koliazas.png"/>

			</div>
			<div class = "col-xl-7 rz">
			<p>Kultūros baras KABLYS – neįprasta erdvė prie pat Vilniaus senamiesčio. Stalo futbolas, lounge zona, garsas, šviesos, muzika ir visokie beprotiški dalykai vyksta vienoje vietoje. Čia rasi ne tik jaukią vietą pokalbiams prie baro, bet ir gausią publiką, pritraukiančią sceną renginiams, akimirksniu galinčią virsti skate parku ar gatvės šokių kovų aikštele.</p>
			<br>
			<p>KABLYS kviečia lankytojus maloniai praleisti laiką ir mėgautis įvairias kultūriniais renginiais. Savaitgaliais čia groja įvairių žanrų atlikėjai ir didžėjai. Muzika patiks net išrankiausiems, nes kultūros baras siūlo pasiklausyti įvairių muzikos stilių: techno, soul, elektronikos ir netgi džiazo. O jei norisi kažko išskirtinio – čia gali išgirsti ir gausybę naujų atlikėjų.</p>
			<br>
			<p>Jeigu esi tikras melomanas ir mėgsti išskirtinumą – kultūros baras KABLYS yra būtent tau !<p>
			<br>
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