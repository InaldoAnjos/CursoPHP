<?php //passagem de parâmetros por referência

$a = 10;

function trocaValor(&$valor){
	$valor = 50;

	return $valor;
}

echo $a . "<br>";

echo trocaValor($a) . "<br>";

echo $a . "<br>";

 ?>