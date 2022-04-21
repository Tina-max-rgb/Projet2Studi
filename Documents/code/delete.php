<?php
require_once("connexionbd.php");


 
   $result = $pdo->exec("DELETE FROM etablissements WHERE id = '".$_GET['id']."' ");
 
echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>';
         
           echo "votre etablissement à été supprimé avec succès";


?>

 