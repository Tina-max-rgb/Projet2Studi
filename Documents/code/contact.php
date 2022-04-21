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
       <div class="navbar-header">
       <a class="navbar-brand" href="#">Contacter</a>
  
</div>
<div class="container">
<div class="form-group">
    <form action="contacter.php" method="POST">
    <label for="name">role</label>
<input type="text" id="name" placeholder="" name="role" required>
<label for="name">Nom</label>
<input type="text" id="name" placeholder="" name="nom" required>
<label for="name">First Name</label>
<input type="text" id="name" placeholder="" name="prenom" required>
<label for="email">Email</label>
<input type="email" id="email" placeholder="email@mail.com" name="email" required>
<label for="category">Catégorie de contact</label>
<select id="category" name="categorie">
    <option value="reclamation">Je souhaite poser une réclamation</option>
    <option value="supp">Je souhaite commander un service supplémentaire</option>
    <option value="savoir">Je souhaite en savoir plus sur un site</option>
    <option value="souçis">J'ai un souçis avec cette application</option>
    <label for="message">Message</label>
    <textarea id="message" name="message" required></textarea>
    <input type="text" id="name" placeholder="Admins@hypnos.fr" name="reception" required>
<label for="To email@">To email@</label>
    <button class="btn btn-success" type="submit">Envoyer</button>
</div>
</div>
<style>
    .category{
    display:inline-grid;
    justify-content: center;
}
#category-contact{
    display: block;
}
.form group{
    display:flex;
    position:center;
    background-color:gray;

}
.navbar-brand{
display:flex;
flex-direction:column;
align-items:center;
}
.navbar-header{
    background-color:#f8f9fa;
    align-content: space-around;
    justify-content:space-around;

}
form{
 height:100%;
width: 50%;
margin-left: 20px;
margin-bottom: 30px;
border-radius: 15px;
display: inline-grid;
}
.input{
    background-color:#e9ecef;
}
textarea{
    height:60%;
}

    </style>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
</body>
</html>