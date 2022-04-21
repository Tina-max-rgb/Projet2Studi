<?php
require_once("connexionbd.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width-device-width,initial-scale=1.0">
<title>Nouvel établissement</title>

<link rel="stylesheet" href="style.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



</head>
   <body>
       <?php include("haut.php"); ?>
       <div class="container">
       <div class=" card-success margintop">

 
  <div class="bg-primary">Saisissez les informations de la nouvelle suite</div>
  <div class=" card-primary ">
 

  <form method = "POST" action = "news.php">
  <div class="form-group">
      <div class="formulaire">
      <input type="text" class="form-control"  name ="titreSuite" placeholder ="Veuillez saisir un titre"/>
      <input type="text" class="form-control"  name ="image" placeholder ="Veuillez saisir un texte"/>

      <input type="text" class="form-control"  name ="textDescriptif" placeholder ="Veuillez saisir un texte"/>
      <input type="text" class="form-control"  name ="prix" placeholder ="Veuillez saisir un prix"/>
      <input type="text" class="form-control"  name ="galerieImages" placeholder ="ajouter une image"/>
      <input type="text" class="form-control"  name ="lienReservation" placeholder ="ajouter un lien"/>
</div>


<button type="submit" class="btn btn-warning"> <i class="far fa-save" aria-hidden="true"></i>
 enregistrer</button>
 


</form>

</div>
</div> 


</body>
</html>