<?php 

$condition = true;
$cont = 0;

while ($condition) {

	$number = rand(0,100);

	if($number === 89){
		echo $cont . "<br>";
		echo "Finish";
		$condition = false;

	}else{
		$cont++;
	}
}

 ?>