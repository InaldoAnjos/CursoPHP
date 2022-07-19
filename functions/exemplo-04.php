<?php 


function hello(){

	$argumentos = func_get_args();

	return $argumentos;
}

var_dump(hello("Bom dia", "R$ 100,00", 99));


 ?>