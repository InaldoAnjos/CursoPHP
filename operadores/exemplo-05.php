<?php 

$num1 = 50;
$num2 = 35;

echo "Número 1 é maior que o Número 2: <br>";
var_dump($num1 <=> $num2); //spaceship (se o Num1 for maior retorna (1)
						   //           se o Num1 e num2 forem iguais, retorna (0)
						   //           se o num2 for maior, retorna (-1))

$num1 = 35;
$num2 = 35;

echo "<br>Número 1 é igual ao Número 2: <br>";
var_dump($num1 <=> $num2);

$num1 = 35;
$num2 = 50;

echo "<br>Número 2 é maior que o Número 1: <br>";
var_dump($num1 <=> $num2);

 ?>