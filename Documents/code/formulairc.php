<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Se connecter</title>
        </head>
        <body>
        
        <div class="log-form">
             <?php 
                if(isset($_GET['login_error']))
                {
                    $err = htmlspecialchars($_GET['login_error']);

                    switch($err)
                    {
                        case 'passeword':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'ine':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexionn.php" method="POST">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="passeword" name="passeword" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscriptionn.php">Inscription</a></p>
        </div>
        <style>
            .log-form {
                width: 340px;
                margin: 50px auto;
            }
            .log-form form {
                margin-bottom: 15px;
                background: #dbf1db;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .log-form h2 {
                margin: 0 0 15px;
            }
           
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
        </body>
</html>