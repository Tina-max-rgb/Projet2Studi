<?php
require_once("connexionbd.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if(isset($_POST["role"]) AND isset($_POST["nom"]) AND isset($_POST["prenom"]) AND isset($_POST["email"]) AND isset($_POST["categorie"]))   
{
    $role=$_POST["role"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $categorie=$_POST["categorie"];
    $reception=$_POST["reception"];
    $insertetab=$pdo->prepare('INSERT INTO formulaire(role, nom, prenom, email, categorie, reception) VALUES(?,?,?,?,?,?)');
       $insertetab->execute(array($role, $nom, $prenom, $email, $categorie, $reception));
       echo'formulaire envoyé';
      
}

?>


