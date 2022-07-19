<?php 

$anoNascimento = 1989;
$nomeCompleto = "José Inaldo dos Anjos Junior";

echo "Meu nome é <strong>$nomeCompleto</strong> e nasci no ano <strong>$anoNascimento</strong> <br><br>";

unset($anoNascimento); //apaga a variável

if(isset($anoNascimento)){ //Teste se a variável existe ou (está definida)
	echo "<br>Meu nome é $nomeCompleto e nasci no ano $anoNascimento";
}

//Concatenar

$primeiroNome = "Inaldo";
$sobrenome = "Junior";

$nomeCompleto = $primeiroNome . " " . $sobrenome;

echo $nomeCompleto;
 ?>