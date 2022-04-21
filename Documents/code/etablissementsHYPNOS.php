<?php
require_once("connexionbd.php");

$request="select * from etablissements";
$insertetab=$pdo->query($request);
if (isset($_GET ['nom']))
$nom=$_GET['nom'];
else
$nom="";
?>
<?php
$request="select * from gérants";
$in=$pdo->query($request);
?>
<?php 
require_once("connexionbd.php");

//session_start();
//if(!isset($_SESSION['pseudo']))
//header('location:formulairc.php');
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
  <div class="bg-success">Rechercher des établissements</div>
  <div class="card-block">
   
  </div>
  <div class="card-primary">
    
<form method="GET" action="etablissementsHYPNOS.php" class="form-inline">
  <div class="form-group">
      <div class="formulaire">
      <input type="text" class="form-control" id="nom" placeholder="Nom de l'établissement">
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
<button type="submit" class="btn btn-default"> <i class="fa fa-search" aria-hidden="true"></i>
 Search </button>

<a href="nouveletablissement.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nouvel établissement </a>

</form>
</div>
  <div class="bg-primary">Liste des établissements</div>
  <div class="card-block">Tableau des établissements</div>

  <div class=" card-primary ">

    <table classe="table">
      <thead>
        <tr>
        <th>id </th>
          <th>nom </th>
          <th>ville</th>
          <th>adresse</th>
          <th>description</th>
          <th>Action</th>
        </tr>

</thead>
<tbody>
  
    <?php
   
    while($etablissements=$insertetab->fetch()){
     
    ?>
    <tr>
    <td><?php echo $etablissements['id']?> </td> 
    <td><?php echo $etablissements['nom']?> </td>
    <td><?php echo $etablissements['ville']?> </td>
    <td><?php echo $etablissements['adresse']?> </td>
    <td><?php echo $etablissements['description']?> </td>
   <td><a href="edit.php?id=<?php echo$etablissements['id']?>"> <i class="btn btn-warning"> UPDATE </i></a></td>
   <form name="id" action="delete.php" method="POST">

   <td> <a onclick="return confirm('Voulez vous vraiment supprimer cet établissement?')" href="delete.php?id=<?php echo $etablissements['id']?>"><i class="btn btn-danger"> DELETE</i></a></td>
   
    </tr>
<?php }?>
    </form>
</tbody>
    </table>
</div>
</div> 
<div class="container">
       <div class=" card-success">
  <div class="bg-success">Rechercher des gérants</div>
  <div class="card-block"></div>
  <div class=" card-primary ">
  <form action="gérants.php" method="GET"  class="form-inline">
  <div class="form-group">
      <div class="formulaire">
      <input type="text" class="form-control" id="nom" placeholder="Nom du gérant">
      <input type="text" class="form-control" id="nom" placeholder="prénom  du gérant">
      <input type="text" class="form-control" id="nom" placeholder="email  du gérant">


    <div class="Gérants">
<select name="nom" class="form-control" id="Nom du gérant">
 
  <option value="all">Tous les gérants</option>

</select>
<button class="btn btn-default"> <a href="sg.php"> Search</a> </button>
<a href="newG.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nouveau gérant </a>

</form>
  <div class="bg-primary">Liste des gérants</div>
  <div class="card-block">Tableau des gérants</div>
  <div class=" card-primary ">
    <table classe="table">
      <thead>
        <tr>
        <th>id </th>
          <th>nom </th>
          <th>prenom</th>
          <th>email</th>
          <th>passeword</th>
          <th>Action</th>
        </tr>

</thead>
<tbody>
  
    <?php
   
    while($gérants=$in->fetch()){
     
    ?>
    <tr>
    <td><?php echo $gérants['id']?> </td>  
    <td><?php echo $gérants['nom']?> </td>
    <td><?php echo $gérants['prenom']?> </td>
    <td><?php echo $gérants['email']?> </td>
    <td><?php echo $gérants['passeword']?> </td>
  
    <td><a href="editG.php?id=<?php echo$gérants['id']?>"> <i class="btn btn-warning"> UPDATE </i></a></td>
   <form name="id" action="deleteG.php" method="POST">

   <td> <a onclick="return confirm('Voulez vous vraiment supprimer ce gérant?')" href="deleteG.php?id=<?php echo $gérants['id']?>"><i class="btn btn-danger"> DELETE</i></a></td>
   
    </tr>
<?php }?>
    </form>
</tbody>
    </table>
</div>
</body>
</html>