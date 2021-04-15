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

if(isset($_POST['user_id']))
{
    $user_id = $_POST['user_id'];

    $stmt = $DB_con->prepare('SELECT id, pavadinimas, reng_data, kaina FROM renginiai WHERE id ='.$user_id);
    $stmt->execute();
    if($stmt->rowCount() > 0)
              {
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                    extract($row);

                    $uzskID = $row['id'];
                    $uzskPav = $row['pavadinimas'];
                    $uzskRengd = $row['reng_data'];
                    $uzskKaina = $row['kaina'];
                    $uzskLaikas = date("Y-m-d h:i:sa");


                    echo 'Uzsakymo ID: '.$uzskID. '  Uzsakymo pavadinimas: '.$uzskPav.'  Renginio data: '.$uzskRengd.'  Renginio kaina: '.$uzskKaina.'  Uzsakymo laikas: '.$uzskLaikas;


                    }

              }
    $stmt = $DB_con->prepare('INSERT INTO uzsakymas(uzsakymoID, renginioPavadinimas, renginioData, renginioKaina, uzsakymoLaikas) VALUES(:uuzid, :upav, :udata, :ukaina, :ulaikas)');
   $stmt->bindParam(':uuzid',$uzskID);
   $stmt->bindParam(':upav',$uzskPav);
   $stmt->bindParam(':udata',$uzskRengd);
   $stmt->bindParam(':ukaina',$uzskKaina);
   $stmt->bindParam(':ulaikas',$uzskLaikas);

   if($stmt->execute())
   {
    $successMSG = "renginys ikeltas";
    
   }
   else
   {
    $errMSG = "klaida ikeliant rengini";
   }

}


?>