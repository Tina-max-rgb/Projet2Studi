<?php
require_once("connexionbd.php");
$id=isset($_POST['id'])?$_POST['id'] :0;
$choixEtablissement=isset($_POST['choixEtablissement'])?$_POST['choixEtablissement'] :""; 
$choixSuite=isset($_POST['choixSuite'])?$_POST['choixSuite'] :""; 
$dateDeDebut=isset($_POST['dateDeDebut'])?$_POST['dateDeDebut'] :"";
$dateDeFin=isset($_POST['dateDeFin'])?$_POST['dateDeFin'] :"";  

$ins=$pdo->prepare('UPDATE reserverunesuite SET choixEtablissement =?, choixSuite =?, dateDeDebut=?, dateDeFin=? WHERE id=?');
$ins->execute(array($choixEtablissement, $choixSuite, $dateDeDebut, $dateDeFin,$id));   
header("location:editR.php");  
?>
