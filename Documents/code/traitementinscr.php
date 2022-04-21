<?php 
   require_once("connexionbd.php");

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom'])&& !empty($_POST['prénom']) && !empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['passeword']) && !empty($_POST['passeword_retype']))
    {
        // Patch XSS
       $nom = htmlspecialchars($_POST['nom']);
       $prénom = htmlspecialchars($_POST['prénom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $passeword = htmlspecialchars($_POST['passeword']);
        $passeword_retype = htmlspecialchars($_POST['passeword_retype']);

        // On vérifie si l'utilisateur existe
        $check = $pdo->prepare('SELECT nom, prénom, pseudo, email, passeword FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); 
        if($row == 0){ 
            
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                        if($passeword === $passeword_retype){ 

                            $insert = $pdo->prepare('INSERT INTO utilisateurs(nom, prénom,pseudo, email, passeword) VALUES(?, ?, ?, ?, ?)');
                            $insert->execute(array($nom, $prénom, $pseudo, $email, $passeword));
                               
                            header('Location:inscriptionn.php?reg_err=success');
                            die();
                        }else{ header('Location: inscriptionn.php?reg_err=passeword'); die();}
                  
        }else{ header('Location: inscriptionn.php?reg_err=already'); die();}
    }
        
}
    
    