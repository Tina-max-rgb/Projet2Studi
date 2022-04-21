<?php
require_once("connexionbd.php");
if(isset($_POST["nom"]) AND isset($_POST["prenom"]) AND isset($_POST["email"]) AND isset($_POST["passeword"])){
 

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$passeword = $_POST["passeword"];

      
       $insertet=$pdo->prepare('INSERT INTO gérants (nom, prenom, email, passeword) VALUES(?,?,?,?)');
       $insertet->execute(array($nom, $prenom, $email, $passeword));
       header("location:etablissementsHYPNOS.php"); 
     }

  
?>