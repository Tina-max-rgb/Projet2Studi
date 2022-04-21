
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Inscription</title>
        </head>
        <body>
        <div class="log-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'passeword':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;


                        
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="traitementinscr.php" method="POST">
                <h2 class="text-center">Inscription</h2>       
                <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <input type="text" name="prénom" class="form-control" placeholder="prénom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="passeword" name="passeword" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="passeword" name="passeword_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Inscription</button>
                </div>   
            </form>
        </div>
        <style>
            .log-form {
                width: 340px;
                margin: 50px auto;
            }
            .log-form form {
                margin-bottom: 15px;
                background: #dbf1db;
                box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
           
           
            .btn {        
                font-size: 25px;
                font-weight: bold;
                
            }
        </style>
        </body>
</html>