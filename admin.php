<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klubo "Kablys" admin</title>
</head>
<body>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Kablys administratoriaus puslapis</title>
</head>
<body style="background: #efc0c0" >
		<?php 
		if (!empty($_SESSION['msg'])) {
			echo "
			<p style='font-family: cursive; text-align: center; color: #5c865c; font-size: 2vw;'>".$_SESSION['msg']."</p>
			";
			$_SESSION['msg']="";

		}
		?>
		<div>
				<h2><b>Pridėti renginį</b></h2>

				<form method="post" enctype="multipart/form-data" class="form-horizontal">
                <table>
                    <tr>
                    <td>Pavadinimas</td>
                        <td><input type="text" name="pavadinimas" /></td>
                    </tr>
                    <tr>
                    <td>Data</td>
                        <td><input type="text" name="data"/></td>
                    </tr>
                    <tr>
                    <td>Kaina</td>
                        <td><input type="text" name="kaina" /></td>
                    </tr>
                    <tr>
                    <td>Renginio paveikslėlis</td>
                        <td><input type="file" name="renginio_pav" accept="image/*" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit" name="btnsave" >
                        <span></span>Ikelti rengini
                        </button>
                        </td>
                    </tr>
                    </table>
                    </form> <br><br>

				<h2><b>Renginiu uzsakymai</b></h2>

				<?php 
					$connection = mysqli_connect("localhost", "root", "");
					$db = mysqli_select_db($connection,"kablys");
					$query = mysqli_query($connection,"select * from uzsakymas");
					
					while ($row = mysqli_fetch_array($query)) {
				?>

				<span>Nr:</span> <?php echo $row['ID']; ?>
				<span>Uzsakymo ID: </span> <?php echo $row['uzsakymoID']; ?>
				<span>Uzsakymo pavadinimas: </span> <?php echo $row['renginioPavadinimas']; ?>
				<span>Renginio data: </span> <?php echo $row['renginioData']; ?>
				<span>Renginio kaina: </span> <?php echo $row['renginioKaina']; ?>
				<span>Uzsakymo laikas: </span> <?php echo $row['uzsakymoLaikas']; ?><br>
				<br>
				<?php
					}

				?>

		</div>
	</body>
	</html>
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
    <?php
    if(isset($_POST['btnsave']))
    {
     $pavadinimas = $_POST['pavadinimas'];
     $data = $_POST['data'];
     $kaina = $_POST['kaina'];
   
     
     $imgFile = $_FILES['renginio_pav']['name'];
     $tmp_dir = $_FILES['renginio_pav']['tmp_name'];
     $imgSize = $_FILES['renginio_pav']['size'];
     
     
     if(empty($pavadinimas)){
      $errMSG = "Iveskite pavadinima.";
     }
     else if(empty($data)){
      $errMSG = "Iveskite data.";
     }
     else if(empty($kaina)){
       $errMSG = "Iveskite kaina.";
   }
     else if(empty($imgFile)){
      $errMSG = "Ikelkite renginio nuotrauka.";
     }
     else
     {
      $upload_dir = 'reng_foto/';
    
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
     
      $valid_extensions = array('jpeg', 'jpg', 'png');
     
      $renginioPav = rand(1000,1000000).".".$imgExt;
   
      if(in_array($imgExt, $valid_extensions)){   
       if($imgSize < 5000000)    {
        move_uploaded_file($tmp_dir,$upload_dir.$renginioPav);
       }
       else{
        $errMSG = "Failo dydis per didelis";
       }
      }
      else{
       $errMSG = "Nepriimtinas formatas";  
      }
     }
   
     if(!isset($errMSG))
     {
      $stmt = $DB_con->prepare('INSERT INTO renginiai(pavadinimas, reng_data, kaina, renginio_pav) VALUES(:upav, :udata, :ukaina, :uft)');
      $stmt->bindParam(':upav',$pavadinimas);
      $stmt->bindParam(':udata',$data);
      $stmt->bindParam(':ukaina',$kaina);
      $stmt->bindParam(':uft',$renginioPav);
      
      if($stmt->execute())
      {
       $successMSG = "renginys ikeltas";
       header("refresh:5;admin.php");
      }
      else
      {
       $errMSG = "klaida ikeliant rengini";
      }
     }
    }


?>
