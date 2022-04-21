<?php
require_once("connexionbd.php");
$id=isset($_POST['id'])?$_POST['id'] :0;
$nom=isset($_POST['nom'])?$_POST['nom'] :""; 
$prenom=isset($_POST['prenom'])?$_POST['prenom'] :""; 
$email=isset($_POST['email'])?$_POST['email'] :"";
$passeword=isset($_POST['passeword'])?$_POST['passeword'] :"";  

$ins=$pdo->prepare('UPDATE gérants SET nom =?, prenom =?, email=?, passeword=? WHERE id=?');
$ins->execute(array($nom, $prenom, $email, $passeword,$id));   
header("location:etablissementsHYPNOS.php");  
?>