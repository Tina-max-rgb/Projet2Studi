<?php
require_once("connexionbd.php");
$request="select * from etablissements";
$resultE=$pdo->query($request);
if (isset($_GET ['nomE']))
$nomE=$_GET['nomE'];
else
$nomE="";
?>
<?php
$id=isset($_GET['id'])?$_GET['id'] :0;
$request="SELECT * FROM etablissements WHERE id=$id";
$resultE=$pdo->query($request);
$etablissements=$resultE->fetch();
$nom=$etablissements['nom'];
$ville=$etablissements['ville'];
$adresse=$etablissements['adresse'];
$description=$etablissements['description'];
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

 
  <div class="bg-primary">modifier un établissement</div>
  <div class=" card-primary ">
  <div class="card-block"></div>
  

  <form method = "POST" action = "modifier.php">
  <div class="form-group">
      <div class="formulaire">
        <label for="id"> id de l'établissement:<?php echo $id?></label>
      <input type="hidden" class="form-control"  name="id" value="<?php echo $id?>"/>
</div>
<div class="form-group">
<label for="nom"> nom de l'établissement:</label>
      <input type="text" class="form-control"  name="nom" value="<?php echo $nom?>"/>
</div>
<div class="form-group">
<label for="ville"> adresse de l'établissement:</label>
      <input type="text" class="form-control"  name="ville" value="<?php echo $ville?>"/>
</div>
<div class="form-group">
<label for="adresse"> adresse de l'établissement:</label>
      <input type="text" class="form-control"  name="adresse" value="<?php echo $adresse?>"/>
</div>
<div class="form-group">
<label for="description"> adresse de l'établissement:</label>
      <input type="text" class="form-control"  name="description" value="<?php echo $description?>"/>
</div>
</div>

<select name="nom" class="form-control" id="Nom de l'établissement">
 
<option value="all" selected>Tous les établissements</option>
  <option value ="M" selected>Le mercure</option>
  <option  value ="F" selected> François Mitterand </option>
  <option  value ="p" selected>Park-Hyatt</option>
  <option  value ="L" selected>Louis 4</option>
  <option  value ="S" selected>Shangri-La</option>
  <option  value ="B" selected>Burgundy </option>
  <option  value ="C" selected>Costes-Castigliones</option>

</select>

<button type="submit" class="btn btn-warning"> <i class="far fa-save" aria-hidden="true"></i>
 enregistrer</button>
 


</form>

</div>
</div> 


</body>
</html>