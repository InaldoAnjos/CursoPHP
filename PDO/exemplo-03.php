<?php 

//PDO - PHP Data Object

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "halegria");


$stmt = $conn -> prepare ("UPDATE tb_users SET deslogin = :LOGIN, dessenha = :PASSWORD 
							WHERE iduser = :ID");

$login = "User Master";
$password = "master@123";
$id = 1;

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);
$stmt -> bindParam(":ID", $id);

$stmt -> execute();

echo "Atualizado com sucesso!";

 ?>