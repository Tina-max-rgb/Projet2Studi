
<?php
session_start();
require_once("connexionbd.php");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if(isset($_POST['pseudo']) && isset($_POST['passeword']))
{
   

    $pseudo = mysqli_real_escape_string($pdo,htmlspecialchars($_POST['pseudo'])); 
    $passeword = mysqli_real_escape_string($pdo,htmlspecialchars($_POST['passeword']));
    
    if($pseudo !== "" && $passeword !== "")
    {
        $requete = "SELECT count(*) FROM utilisateurs where 
              nom_utilisateur = '".$pseudo."' and mot_de_passe = '".$passeword."' ";
        $exec_requete = mysqli_query($pdo,$requete);
        $rep      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count==1) 
        {
           $_SESSION['pseudo'] = $pseudo;
           header('Location: etablissementsHYPNOS.php');
        }
        else
        {
           header('Location: formulairc.php?erreur=1'); 
        }
    }
    else
    {
       header('Location: formulairc.php?erreur=2'); 
    }
}
else
{
   header('Location: formulairc.php');
}

?>




