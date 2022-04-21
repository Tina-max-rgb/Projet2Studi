<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width-device-width,initial-scale=1.0">
<title>Etablissement Burgundy</title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="etablissement-Burgundy"></div>
<h2>Liste des suites de l'établissement "Burgundy"</h2>
<ul class="List de françoisM">
  <li class="list-group-item-active"><a href="#SB">premiére suite Burgundy </a> </li>
    <li class="list-group-item-active"><a href="#SB2"> Deuxiéme suite Burgundy </a> </li>
    <li class="list-group-item-active"><a href="#SB2"> Troisiéme suite Burgundy </a> </li>
</ul>
<div id="Burgundy">
<div class="info"> </div>
<h3>Informations sur les suites de l'établissement "Burgundy"</h3>
<p>Cet établissement se situe au 8 rue duphot 75001  Paris, il est connu pour sa décoration qui est inspiré de la période dart Deco, il abrite 3 suites et une piscine et un jardin nommé le jardin dhiver<p>

<div id="SB">
<h4> premiére suite de l'établissement Burgundy</h4>
<img class="pic70" src="/WWW/GestionHotel/images/img70.jpg"alt="p70">
<img class="pic71" src="/WWW/GestionHotel/images/img71.jpg"alt="p71">
<img class="pic72" src="/WWW/GestionHotel/images/img72.jpg"alt="p72">
<img class="pic69" src="/WWW/GestionHotel/images/img69.jpg"alt="p69">
<h2>prix</h2><strong>1700€</strong>
<p>Cette suite abrite une chambre à coucher, et une salle de bain et un espace pour se distraire<p>
<button class="btn btn-succes"> <a href="reservation.php"> Réserver</a></button>
</div>

<div id="SB2">
<h4>Seconde suite de l'établissement Burgundy</h4>
<img class="pic73" src="/WWW/GestionHotel/images/img73.jpg"alt="p73">
<img class="pic74" src="/WWW/GestionHotel/images/img74.jpg"alt="p74">
<img class="pic75" src="/WWW/GestionHotel/images/img75.jpg"alt="p75">
<img class="pic76" src="/WWW/GestionHotel/images/img76.jpg"alt="p76">
<h2>prix</h2><strong>1900€</strong>
<p>Cette suite abrite deux chambres à coucher, et une salle de bain et un jardin<p>
<button class="btn btn-succes"> <a href="reservation.php"> Réserver</a></button>
</div>
<div id="SB3">
<h4>Troisiéme Suite de l'établissement Burgundy</h4>
<img class="pic77" src="/WWW/GestionHotel/images/img77.jpg"alt="p77">
<img class="pic78" src="/WWW/GestionHotel/images/img78.jpg"alt="p78">
<img class="pic79" src="/WWW/GestionHotel/images/img79.jpg"alt="p79">
<img class="pic80" src="/WWW/GestionHotel/images/img80.jpg"alt="p80">
<h2>prix</h2><strong>1700€</strong>
<p>Cette suite abrite une chambre à coucher, et une chambre pour enfant, et une salle de bain et un espace de lecture<p>
<button class="btn btn-succes"> <a href="reservation.php"> Réserver</a></button>
</div>
<ul>
<li> <a href="catalogue.php">Cliquez ici pour revenir à la page des catalogues </a> </li>
</ul>
</div>
<style>
.pic69{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
  }
.pic70{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
  }
.pic71{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
  }
.pic72{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
  }

.pic73{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
}
.pic74{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
}
.pic75{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
}
.pic76{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
}
.pic77{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
}
.pic78{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
}
.pic79{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
}
.pic80{
  width:340px;
  border-radius:20px;
  margin-bottom:20px;
  margin-right:20px;
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