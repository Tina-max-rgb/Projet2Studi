<?php
require_once("connexionbd.php");

$rt="select * from reserverunesuite";
$insertp=$pdo->query($rt);

//session_start();
//if(!isset($_SESSION['pseudo']))
//header('location:formulairc.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width-device-width,initial-scale=1.0">
<title>Reservation</title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



</head>
   <body>
       <?php include("haut.php"); ?>
       <div class="container">
       <div class=" card-success margintop ">
  <div class="bg-success">Rechercher des Suites</div>
  <div class="card-block">
   
  </div>
  <div class="card-primary">
    
<form method="GET" action="reservation.php" class="form-inline">
  <div class="form-group">
      <div class="formulaire">
      <input type="text" class="form-control" id="nom" placeholder="Nom de la suite">
</div>

<select name="nom" class="form-control" id="Nom de l'établissement">
 
  <option value="all" selected>Toutes les suites</option>
  <option value ="M" selected>Suite luxueuse de mercure</option>
  <option  value ="F" selected> Sesonde suite luxueuse de mercure </option>
  

</select>
<button type="submit" class="btn btn-default"> <i class="fa fa-search" aria-hidden="true"></i>
 Search </button>
<a href="nouvellereservation.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Nouvelle réservation </a>

</form>
</div>
  <div class="bg-primary">Liste des suites</div>
  <div class="card-block">Tableau des suites</div>

 
  <div class=" card-primary ">

    <table classe="table">
      <thead>
        <tr>
        <th>id </th>
  
          <th>choixEtablissement </th>
          <th>choixSuite</th>
          <th>dateDeDebut</th>
          <th>dateDeFin</th>
          <th>Action</th>
        </tr>

</thead>
<tbody>
  
    <?php
   
    while($reserverunesuite=$insertp->fetch()){
     
    ?>
    <tr>
    <td><?php echo $reserverunesuite['id']?> </td> 
    <td><?php echo $reserverunesuite['choixEtablissement']?> </td>
    <td><?php echo $reserverunesuite['choixSuite']?> </td>
    <td><?php echo $reserverunesuite['dateDeDebut']?> </td>
    <td><?php echo $reserverunesuite['dateDeFin']?> </td>
   
   <form name="id" action="annuler.php" method="POST">

   <td> <a onclick="return confirm('Voulez vous vraiment annuler cette réservation?')" href="annuler.php?id=<?php echo $reserverunesuite['id']?>"><i class="btn btn-danger"> Annuler</i></a></td>
    </tr>
<?php }?>
    </form>
</tbody>
    </table>
</div>
</div> 
<div class="bg-primary">Liste des suites</div>
  <div class="card-block">Tableau des suites</div>

 
  <div class=" card-primary ">

    <table classe="table">
      <thead>
        <tr>
        <th>id </th>
  
          <th>choixEtablissement </th>
          <th>choixSuite</th>
          <th>dateDeDebut</th>
          <th>dateDeFin</th>
          <th>Action</th>
        </tr>

</thead>
<tbody>
  
    <?php
   
    while($reserverunesuite=$insertp->fetch()){
     
    ?>
    <tr>
    <td><?php echo $reserverunesuite['id']?> </td> 
    <td><?php echo $reserverunesuite['choixEtablissement']?> </td>
    <td><?php echo $reserverunesuite['choixSuite']?> </td>
    <td><?php echo $reserverunesuite['dateDeDebut']?> </td>
    <td><?php echo $reserverunesuite['dateDeFin']?> </td>
   
   <form name="id" action="annuler.php" method="POST">

   <td> <a onclick="return confirm('Voulez vous vraiment annuler cette réservation?')" href="annuler.php?id=<?php echo $reserverunesuite['id']?>"><i class="btn btn-danger"> Annuler</i></a></td>
    </tr>
<?php }?>
    </form>
</tbody>
    </table>
</div>
</div> 


    </body>
    </html>
