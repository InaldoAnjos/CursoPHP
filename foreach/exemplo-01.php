<?php 

$meses = array(
		"Janeiro", "Fevereiro", "Março",
		"Abril", "Maio", "Junho",
		"Julho", "Agosto", "Setembro",
		"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {

	echo "O indice: " . $index . "<br>";
	echo "O mês " . $index + 1 . " ";
	echo "é o mês de " . $mes . ".<br><br>";
}

 ?>