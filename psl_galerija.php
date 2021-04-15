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
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="puslapio_css.css">
	<link rel="stylesheet" href="btsirlb/css/glightbox.css">
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
				<li class ="nav-item active">
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
	<div class = 'container-fluid'>
		 <div class="row">
			<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="text-center" id = "mygtk">
				  <button class="btn btn-default filter-button active" id="all" onclick="call(this.id)">Visos nuotraukos</button>
				  <button class="btn btn-default filter-button" id="dsale" onclick="call(this.id)">Didžioji salė</button>
				  <button class="btn btn-default filter-button" id="msale" onclick="call(this.id)">Mažoji salė</button>
				</div>
			</div>
			
	<a href="kablio_foto/maza1.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza1.jpg">
    </a>
	<a href="kablio_foto/maza2.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza2.jpg">
    </a>
	<a href="kablio_foto/maza3.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza3.jpg">
    </a>
	<a href="kablio_foto/maza4.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza4.jpg">
    </a>
	<a href="kablio_foto/maza5.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza5.jpg">
    </a>
	<a href="kablio_foto/maza6.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza6.jpg">
    </a>
	<a href="kablio_foto/didele1.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele1.jpg">
    </a>
		<a href="kablio_foto/didele2.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele2.jpg">
    </a>
		<a href="kablio_foto/didele3.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele3.jpg">
    </a>
		<a href="kablio_foto/didele4.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele4.jpg">
    </a>
		<a href="kablio_foto/didele5.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele5.jpg">
    </a>
		<a href="kablio_foto/didele6.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele6.jpg">
    </a>
		<a href="kablio_foto/didele7.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele7.jpg">
    </a>
	<a href="kablio_foto/didele8.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele8.jpg">
    </a>
	<a href="kablio_foto/didele9.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter dsale">
      <img src="kablio_foto/didele9.jpg">
    </a>
	<a href="kablio_foto/maza7.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza7.jpg">
    </a>
	<a href="kablio_foto/maza8.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza8.jpg">
    </a>
	<a href="kablio_foto/maza9.jpg"
      class="glightbox nuotrauka col-6 col-lg-4 col-md-4 col-sm-4 col-xs-6 filter msale">
      <img src="kablio_foto/maza9.jpg">
    </a>
    </div>
	</div>

	<script>
	var activeclass = document.querySelectorAll('#mygtk button');
    for (var i = 0; i < activeclass.length; i++) {
    activeclass[i].addEventListener('click', activateClass);
    }
	function activateClass(e) {
    for (var i = 0; i < activeclass.length; i++) {
        activeclass[i].classList.remove('active');
    }
    e.target.classList.add('active');
}
	</script>
	<script src="btsirlb/js/glightbox.min.js"></script>
	<script src="btsirlb/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>