<?php
require_once("connexionbd.php");


 
   $result = $pdo->exec("DELETE FROM gérants WHERE id = '".$_GET['id']."' ");
 
echo $result . ' enregistrement(s) affecté(s) par la requête DELETE<br>';
         
           echo " succès !";


?>
