<?php 

$frase = "A repetição é mãe da retenção.";

$position = strpos($frase, "mãe");

var_dump($position);
echo "<br>";

$texto = substr($frase, 0, $position);
var_dump($texto);
echo "<br>";

$texto = substr($frase, $position+5, strlen($frase));
var_dump($texto);
echo "<br>";

 ?>