<?php
require_once("connexionbd.php");
$request="select * from gérants";
$in=$pdo->query($request);

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

  <div class=" card-primary ">

    <table classe="table">
      <thead>
        <tr>
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
      
    <td><?php echo $gérants['nom']?> </td>
    <td><?php echo $gérants['prenom']?> </td>
    <td><?php echo $gérants['email']?> </td>
    <td><?php echo $gérants['passeword']?> </td>
  
   
    </tr>
<?php }?>
    </form>
</tbody>
    </table>
</div>
    </body>
    </html>