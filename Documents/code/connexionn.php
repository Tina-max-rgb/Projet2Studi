<?php 
    session_start(); // Démarrage de la session
    require_once("connexionbd.php"); // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['passeword'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $passeword = htmlspecialchars($_POST['passeword']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $pdo->prepare('SELECT pseudo, email, passeword, role FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
       
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row ==1)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if($data['passeword']===$passeword)
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['passeword'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location: formulairc.php?login_err=passeword'); die(); }
            }else{ header('Location: formulairc.php?login_err=email'); die(); }
        }else{ header('Location: formulairc.php?login_err=already'); die(); }
    }else{ header('Location: formulairc.php'); die();}