<?php
    session_start();
?>
<?php
    if (!(isset($_SESSION['useruid']) && $_SESSION['useruid'] != '')) {
    
    header ("location: psl_renginiai(neprisijunges).php");
    
    } else {
        header("");
    }
?>
<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'kablys';

try{
 $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
 echo $e->getMessage();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type = "text/javascript" src = "jquery.min.js"></script>
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
				<li class ="nav-item active">
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

	<div class = 'container-fluid'>
        <div class="row">
            <?php
                $stmt = $DB_con->prepare('SELECT id, pavadinimas, reng_data, kaina, renginio_pav FROM renginiai');
                $stmt->execute();
                    if($stmt->rowCount() > 0)
                    {
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                    extract($row);
                ?>
                 <div style="background-image: url(reng_foto/<?php  echo $row['renginio_pav']; ?>);"  class = 'col-xl-4 ab'>
                    <div class = "on">
                        <div class ="in">
                            <div class="top">
                            <h3><?php echo $row['pavadinimas']; ?></h3>
                            <div class ="data"><?php echo $row['reng_data']; ?></div>
                            <button type="button" id="<?php echo $row['id']; ?>" onClick="pirktiBilieta(this.id);"   class="btn btn-info stretched-link">Pirkti bilietus</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                    }


                }
             

            ?>
            
        </div>
    </div>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">

    function pirktiBilieta(user_id) 
    {
        var user_id = user_id;
        $.ajax({
        type:"POST",
        url:"uzsakymas.php",
        data: {'user_id':user_id},
        success: function (result) {
            alert("Sekmingai nusipirkote bilieta");
            console.log(result);
        }
   
    
    });
    

    }
    
    </script>
  </body>
</html>