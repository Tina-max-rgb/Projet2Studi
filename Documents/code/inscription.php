
<?php
session_start();
require_once('connexionbd.php');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if(isset($_POST['email']) && isset($_POST['passeword'])){

  $email = htmlspecialchars($_POST['email']);
  $passeword= htmlspecialchars($_POST['passeword']);
  $check =$bd->prepare('SELECT pseudo, email, passeword FROM utilisateurs WHERE email=?');
  $check->execute(array('email'));
  $data =$check->fetch();
  $row = $check->rowCount();
  if($row ==1)
{
  if(filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    
    if($data['passeword'] ===$passeword)
    {
      $_SESSION ['user'] =$data['pseudo'];
      }else header('Location:etablissementsHYPNOS.php');

    }else header('Location:formulairc.php?emailerror');

}else header('Location:formulairc.php?logerror');
}else header('Location:formulairc.php');






?>