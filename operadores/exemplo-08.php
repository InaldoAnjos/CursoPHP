<?php 

//precedência de operadores (prioridade)

$calc = 10 + 3 * 5 / 5;
      // 10 + 15 / 5
      // 10 + 3
      // 13

echo $calc;
echo "<br>";

$result = (10 + 3) / 2 > 5 && 10 + 5 < 3;
		   // 13 / 2 > 5 && 15 < 3;
		   // 6.5 > 5 && false;
		   // true && false;
		   // false.

var_dump($result);
echo "<br>";


$result = (10 + 3) / 2 > 5 || 10 + 5 < 3;
		   // 13 / 2 > 5 || 15 < 3;
		   // 6.5 > 5 || false;
		   // true || false;
		   // true.

var_dump($result);

 ?>