<?php
require_once("connexionbd.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if(isset($_POST["choixEtablissement"])AND isset($_POST["choixSuite"]) AND isset($_POST["dateDeDebut"]) AND isset($_POST["dateDeFin"])){

$choixEtablissement = $_POST["choixEtablissement"];
$choixSuite = $_POST["choixSuite"];
$dateDeDebut = $_POST["dateDeDebut"];
$dateDeFin = $_POST["dateDeFin"];

     //  if(!empty($_post['nom'])){
       $Qsql=$pdo->prepare('INSERT INTO reserverunesuite(choixEtablissement, choixSuite, dateDeDebut, dateDeFin) VALUES(?,?,?,?)');
       $Qsql->execute(array($choixEtablissement, $choixSuite, $dateDeDebut, $dateDeFin));
       header("reservation.php");
       echo"reservation reussie !";
     }
     
   ?>