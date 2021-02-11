<!-- JULIOROBALVA -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cyborg/bootstrap.min.css" integrity="sha384-nEnU7Ae+3lD52AK+RGNzgieBWMnEfgTbRHIwEvp1XXPdqdO6uLTd/NwXbzboqjc2" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/f7e67d00d0.js" crossorigin="anonymous"></script>
<!-- Bootswatch cnd Cyborg , -->



<div class="jumbotron">
  <h1 align="center" class="display-3">Big 5</h1>
  <p align="center" class="lead">Diseñado para ingresar 5 numeros y ordenarlos de  <a href="#">Mayor a Menor</a> junto a su  <a href="#">Promedio</a> </p>
  <hr class="my-4">
  <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>

  <h1 align="center" class="display-3">Numeros Ordenados</h1>
  <p align="center" class="lead">  <a href="#">Mayor a Menor</a> </p>

<?php

$numero1 = intval($_POST["numero1"]);
$numero2 = intval($_POST["numero2"]);
$numero3 = intval($_POST["numero3"]);
$numero4 = intval($_POST["numero4"]);
$numero5 = intval($_POST["numero5"]);

$orden = array($numero1, $numero2, $numero3,$numero4,$numero5);
rsort($orden);


$promedio= 0;
foreach ($orden as $or){
  //  print($or);
   // echo "<br>";
?>
<h3 align="center"><?php print($or); ?></h3>

<?php
    $promedio = $promedio+ $or;
}
$promtotal = $promedio / 5;
//print($promtotal);
?>

<h3 align="center"><a href="#">Promedio </a><?php print($promtotal); ?></h3>
