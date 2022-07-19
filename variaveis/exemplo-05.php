<?php 
//Escopo de variável

$nome = "Inaldo";

function teste(){

	global $nome; //A variável criada fora da função, só funciona se for					definida como 'global' dentro da função
	echo $nome;
}
	
teste();
 ?>