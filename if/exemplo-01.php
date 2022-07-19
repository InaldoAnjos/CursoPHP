<?php 

$idade = 17;

if($idade > 17 && $idade <= 65){
	echo "Pode tirar CNH!";
}

elseif($idade > 65){
	echo "Pegue um UBER, é mais seguro.";
}

else{
	echo "Criança não pode dirigir!";
}

 ?>