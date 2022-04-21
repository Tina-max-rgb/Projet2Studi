<?php
require_once("connexionbd.php");

$rqt="select * from suites";
$ist=$pdo->query($rqt);
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
       <div class="container">
       <div class=" card-success margintop ">
  <div class="bg-success">Rechercher des suites</div>
  <div class="card-block">
   
  </div>
  <div class="card-primary">
    
<form method="GET" action="suites.php" class="form-inline">
  <div class="form-group">
      <div class="formulaire">
      <input type="text" class="form-control" id="nom" placeholder="Nom de l'établissement">
</div>

<select name="nom" class="form-control" id="Nom de l'établissement">
 
  <option value="all" selected>Toutes les suites</option>

</select>
<button type="submit" class="btn btn-default"> <i class="fa fa-search" aria-hidden="true"></i>
 Search </button>

<a href="nouvellesuite.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nouvelle suite</a>

</form>
</div>
  <div class="bg-primary">Liste des suites</div>
  <div class="card-block">Tableau des suites</div>

  <div class=" card-primary ">
    <table classe="table">
      <thead>
        <tr>
        <th>id </th>
          <th>Title </th>
          <th>image</th>
          <th>Texte decriptif</th>
          <th>prix</th>
          <th>gallerie</th>
          <th>lien</th>
          <th>Action</th>
        </tr>

</thead>
<tbody>
  
    <?php
   
    while($suites=$ist->fetch()){
     
    ?>
    <tr>
    <td><?php echo $suites['id']?> </td> 
    <td><?php echo $suites['titreSuite']?> </td>
    <td><?php echo $suites['image']?> </td>
    <td><?php echo $suites['textDescriptif']?> </td>
    <td><?php echo $suites['prix']?> </td>
    <td><?php echo $suites['galerieImages']?> </td>
    <td><?php echo $suites['lienReservation']?> </td>
  <td>
     
     
    </td>
    </tr>
<?php }?>
    </form>
</tbody>
    </table>
</div>
</div> 