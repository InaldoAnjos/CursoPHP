<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //P = period; 15 (quantidade que quer acrescentar); D = dias.

echo $dt -> format("d/m/Y H:i:s") . "<br>";

$dt -> add($periodo);

echo $dt -> format("d/m/Y H:i:s");

?>