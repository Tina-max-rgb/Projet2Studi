<?php
require_once("connexionbd.php");
$request="select * from gérants";
$in=$pdo->query($request);

?>
<?php
$id=isset($_GET['id'])?$_GET['id'] :0;
$request="SELECT * FROM gérants WHERE id=$id";
$in=$pdo->query($request);
$gérants=$in->fetch();
$nom=$gérants['nom'];
$prenom=$gérants['prenom'];
$email=$gérants['email'];
$passeword=$gérants['passeword'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width-device-width,initial-scale=1.0">
<title>modifier l'établissement</title>

<link rel="stylesheet" href="style.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



</head>
   <body>
       <?php include("haut.php"); ?>
       <div class="container">
       <div class=" card-success margintop">

 
  <div class="bg-primary">modifier un gérant</div>
  <div class=" card-primary ">
  <div class="card-block"></div>
  

  <form method = "POST" action = "modifierG.php">
  <div class="form-group">
      <div class="formulaire">
        <label for="id"> id du gérant :<?php echo $id?></label>
      <input type="hidden" class="form-control"  name="id" value="<?php echo $id?>"/>
</div>
<div class="form-group">
<label for="nom"> nom du gérant:</label>
      <input type="text" class="form-control"  name="nom" value="<?php echo $nom?>"/>
</div>
<div class="form-group">
<label for="prenom"> prénom du gérant:</label>
      <input type="text" class="form-control"  name="prenom" value="<?php echo $prenom?>"/>
</div>
<div class="form-group">
<label for="email"> email:</label>
      <input type="text" class="form-control"  name="email" value="<?php echo $email?>"/>
</div>
<div class="form-group">
<label for="passeword"> mot de passe du gérant:</label>
      <input type="text" class="form-control"  name="passeword" value="<?php echo $passeword?>"/>
</div>


</div>
<button type="submit" class="btn btn-warning"> <i class="far fa-save" aria-hidden="true"></i>
 enregistrer</button>
 


</form>

</div>
</div> 


</body>
</html>