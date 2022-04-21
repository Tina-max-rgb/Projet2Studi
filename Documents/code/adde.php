 <?php
require_once("connexionbd.php");
if(isset($_POST["nom"]) AND isset($_POST["ville"]) AND isset($_POST["adresse"]) AND isset($_POST["description"])){
 

$nom = $_POST["nom"];
$ville = $_POST["ville"];
$adresse = $_POST["adresse"];
$description = $_POST["description"];

      
       $insertetab=$pdo->prepare('INSERT INTO etablissements (nom, ville, adresse, description) VALUES(?,?,?,?)');
       $insertetab->execute(array($nom, $ville, $adresse, $description));
       header("location:etablissementsHYPNOS.php"); 
     }

  
?>

