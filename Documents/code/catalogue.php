<?php
require_once("connexionbd.php");
$request="select * from etablissements";
$resultE=$pdo->query($request);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width-device-width,initial-scale=1.0">
<title>Gestion des établissements HYPNOS</title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



</head>
   <body>
       <?php include("haut.php"); ?>
   
       
       <?php
    while($etablissements=$resultE->fetch()){
    ?>
    <?php }?>
       <div class="container">
       <div class="card-success margintop">
  <div class="bg-success">Rechercher un catalogue</div>
  <div class="card-block">Liste des établissements</div>
  <div class="liste-etablissement">
     
  <ul>
<li> <a href="mercure.php"> Le mercure</a></li>
<li> <a href="françois.php"> François Mitterand</a></li>
<li> <a href="Burgundy.php"> Burgundy</a></li>
<li> <a href="Costes.php">Costes Castiglione</a></li>
<li> <a href="louis4.php"> Louis 4</a></li>
<li> <a href="park-hyatt.php"> Park-Hyatt</a></li>
<li> <a href="Shangri-la.php"> Shangri-La</a></li>

    </ul>
    </div>
  <div class=" card-primary ">

 
   
     
      
  

</div>
</div> 
    </div>
    </div>
</body>
</html>