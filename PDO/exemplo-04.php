<?php 

//PDO - PHP Data Object

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "halegria");


$stmt = $conn -> prepare ("DELETE FROM tb_users WHERE iduser = :ID");

$id = 2;

$stmt -> bindParam(":ID", $id);

$stmt -> execute();

echo "Excluído com sucesso!";

 ?>