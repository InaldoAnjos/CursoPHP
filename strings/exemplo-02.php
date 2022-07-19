<?php 

$nome = "inaldo junior";

$nome = strtoupper($nome); //UPPERCASE

echo "$nome";
echo"<br>";

$nome = strtolower($nome); //LOWERCASE

echo "$nome";
echo"<br>";

echo ucwords($nome); //UPPERCASE SÓ NA PRIMEIRA LETRA DE CADA PALAVRA
echo"<br>";

echo ucfirst($nome); //UPPERCASE SÓ NA PRIMEIRA LETRA
echo"<br>";

 ?>