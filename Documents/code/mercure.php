
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width-device-width,initial-scale=1.0">
<title>Etablissement le mercure </title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="etablissement-mercure"></div>
<h2>Liste des suites de l'établissement "Le mercure"</h2>
<ul class="List de mercure">
  <li class="list-group-item-active"><a href="#SM">Suite luxueuse du mercure </a> </li>
    <li class="list-group-item-active"><a href="#SM2"> Seconde Suite de Mercure </a> </li>
    <li class="list-group-item-active"> <a href="#SM3"> Troisiéme suite luxueuse de Mercure</a> </li>
</ul>
<div id="Mercure">
<div class="info"> </div>
<h3>Informations sur les suites de l'établissement "Le mercure"</h3>
<p>Cet établissement se situe au 121 avenue du général de gaulle 75001 Paris<p>

<div id="SM">
<img class="pic1" src="/WWW/GestionHotel/images/image1.jpg"alt="p1">
<h4> Suite luxueuse du Mercure</h4>
<h2>prix</h2><strong>1000€</strong>
<p>Cette suite luxueuse comporte deux chambres à coucher et un dressing et une salle de bain et une piéce pour manger, le prix d'une réservation pour une nuit est de 1000€<p>
<button class="btn btn-succes"> <a href="reservation.php"> Réserver</a></button>
</div>
<div id="SM2">
<img class="pic2" src="/WWW/GestionHotel/images/img2.jpg"alt="p2">
<h4>Seconde Suite de Mercure</h4>
<h2>prix</h2>
<p>Cette suite  comporte 1 chambres à coucher romantique idéale pour un couple et une salle de bain avec une magnifique vue le prix d'une nuit est de 800€<p>
<button class="btn btn-succes"> <a href="reservation.php"> Réserver</a></button>
</div>
<div id="SM3">
<img class="pic3" src="/WWW/GestionHotel/images/img3.jpg"alt="p3">
<h4>Troisiéme suite luxueuse de Mercure</h4>
<p>Cette suite  comporte 2 chambres à coucher et une piéce pour manger, elle est idéale pour passer un séjour familial, le prix d'une réservation par nuit est 600€<p>
<button class="btn btn-succes"> <a href="reservation.php"> Réserver</a></button>
</div>
<ul>
<li> <a href="catalogue.php">Cliquez ici pour revenir à la page des catalogues </a> </li>
</ul>
</div>
<style>
  
.pic1{
  width:340px;
  border-radius:20px;
}
.pic2{
  width:340px;
  border-radius:20px;
}
.pic3{
  width:340px;
  border-radius:20px;
}
h4{
  color:blue;
}

@keyframes monanimation {
    from {
        color: black;
    }
    to{
        color: rgb(241, 138, 54);
        transform: scale(1.1);

    }
}
h4{
    animation: monanimation 1s;
    -webkit-animation:monanimation 1s infinite alternate;
    

}
strong{
  color:blue;
}
body{
  background-color:rgb(0 123 255 / 11%);
}
  </style>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>