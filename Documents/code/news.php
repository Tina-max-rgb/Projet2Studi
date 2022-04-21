<?php
require_once("connexionbd.php");
if(isset($_POST["titreSuite"]) AND isset($_POST["image"]) AND isset($_POST["textDescriptif"]) AND isset($_POST["prix"]) AND isset($_POST["galerieImages"]) AND isset($_POST["lienReservation"])){
 

$titreSuite = $_POST["titreSuite"];
$image = $_POST["image"];
$textDescriptif = $_POST["textDescriptif"];
$prix = $_POST["prix"];
$galerieImages = $_POST["galerieImages"];
$lienReservation = $_POST["lienReservation"];
       $insertetab=$pdo->prepare('INSERT INTO suites(titreSuite, image, textDescriptif, prix, galerieImages, lienReservation) VALUES(?,?,?,?,?,?)');
       $insertetab->execute(array($titreSuite, $image, $textDescriptif, $prix, $galerieImages, $lienReservation));
       header("location:suites.php"); 
     }

  
?>
