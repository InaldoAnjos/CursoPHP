<?php 

$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

echo "Valor Total = " . $valorTotal . "<br>";

$valorTotal *= .9; //90% do valor total ou 10% de desconto
$desconto = $valorTotal *.1;

echo "O seu desconto é de: " . $desconto . "<br>";

echo "Total a pagar = " . $valorTotal;
 ?>