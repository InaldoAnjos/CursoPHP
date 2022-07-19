<?php 

//A função "soma" vai receber n valores do tipo float com os "...(três pontos)", realizar o cálculo com
//"array_sum" e depois retornar o valor da soma em string com o ":string" 

function soma(float ...$valores):string{

	return array_sum($valores);

}


echo soma(2.5, 2.5, 10) . "<br>";
echo soma(10.5, 2.5, 10) . "<br>";
echo soma(25.5, 28.5, 10) . "<br>";
echo soma(13.5, 4.5, 10) . "<br>";
 ?>