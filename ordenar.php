<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/superhero/bootstrap.min.css" integrity="sha384-HnTY+mLT0stQlOwD3wcAzSVAZbrBp141qwfR4WfTqVQKSgmcgzk+oP0ieIyrxiFO" crossorigin="anonymous">

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
<h2><?php print($or); ?></h2>

<?php
    $promedio = $promedio+ $or;
}

$promtotal = $promedio / 5;
//print($promtotal);

?>

<h1>promedio : <?php print($promtotal); ?></h1>
