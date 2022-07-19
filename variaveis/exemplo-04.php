<?php 

//Array Super Global

$nome = (int)$_GET["a"]; //(int)Cast -> mudar o tipo de dado da variável
					     //Quando se utiliza o método GET ou POST ele retorna sempre uma string. Caso queira mudar para outro tipo de dado, é só realizar o cast.

var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //pegar o ip do usuário

 ?>