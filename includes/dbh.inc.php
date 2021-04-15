<?php

$serverName ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="kablys";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Prisijungti nepavyko: ".mysqli_connect_error());
}
?>