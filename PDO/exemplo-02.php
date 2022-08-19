<?php 

//PDO - PHP Data Object

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "halegria");


$stmt = $conn -> prepare ("INSERT INTO tb_users (deslogin, dessenha) 
							VALUES (:LOGIN, :PASSWORD)");

$login = "My User";
$password = "admin@123";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);

$stmt -> execute();

echo "Inserido com sucesso!";

 ?>