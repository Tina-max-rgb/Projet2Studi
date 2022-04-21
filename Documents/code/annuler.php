<?php
session_start();
require_once("connexionbd.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$result = $pdo->exec("DELETE FROM reserverunesuite WHERE id = '".$_GET['id']."' ");
 
echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>';
         
           echo "votre réservation à été annulée avec succès";


?>