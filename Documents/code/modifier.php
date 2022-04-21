<?php
require_once("connexionbd.php");
$id=isset($_POST['id'])?$_POST['id'] :0;
$nom=isset($_POST['nom'])?$_POST['nom'] :""; 
$ville=isset($_POST['ville'])?$_POST['ville'] :""; 
$adresse=isset($_POST['adresse'])?$_POST['adresse'] :"";     
$description=isset($_POST['description'])?$_POST['description'] :""; 

$insertetab=$pdo->prepare('UPDATE etablissements SET nom =?, ville =?, adresse=?, description=? WHERE id=?');
$insertetab->execute(array($nom, $ville, $adresse, $description,$id));   
header("location:etablissementsHYPNOS.php");  
?>