<?php
require_once("connexionbd.php");
$request="select * from utilisateurs";
$resultU=$pdo->query($request);
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
       <div class=" card-success">
  <div class="bg-success">Rechercher des utilisateurs</div>
  <div class="card-block">Panel Content</div>
  <div class=" card-primary ">
  <div class="bg-primary">Liste des utilisateurs</div>
  <div class="card-block">Tableau des utilisateurs</div>
  <div class=" card-primary ">
    <div class=" card-primary ">

    <table classe="table">
      <thead>
        <tr>
          <th>nom </th>
          <th>prénom</th>
          <th>role</th>
          <th>pseudo</th>
          <th>email</th>
          <th>passeword</th>
          <th>Action</th>
        </tr>

</thead>
<tbody>
  
    <?php
    while($utilisateurs=$resultU->fetch()){
    ?>
    <tr>
    <td><?php echo $utilisateurs['id']?> </td>
    <td><?php echo $utilisateurs['nom']?> </td>
    <td><?php echo $utilisateurs['prénom']?> </td>
    <td><?php echo $utilisateurs['role']?> </td>
    <td><?php echo $utilisateurs['pseudo']?> </td>
    <td><?php echo $utilisateurs['email']?> </td>
    <td><?php echo $utilisateurs['passeword']?> </td>
   
   <form name="id" action="deleteU.php" method="POST">

   <td> <a onclick="return confirm('Voulez vous vraiment supprimer cet utilisateur?')" href="deleteU.php?id=<?php echo $utilisateurs['id']?>"><i class="btn btn-danger"> DELETE</i></a></td>
   
    </tr>
<?php }?>

</tbody>
    </table>

</div>
</div> 
</div>
</div> 

</body>
</html>