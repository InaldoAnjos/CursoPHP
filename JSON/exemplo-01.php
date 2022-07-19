<?php 


$family = array();

array_push($family, array(
	'nome' => 'Junior',
	'idade' => 33
	));

array_push($family, array(
	'nome' => 'Stephanny',
	'idade' => 32
	));

array_push($family, array(
	'nome' => 'Geovana',
	'idade' => 1
	));

echo json_encode($family);

 ?>