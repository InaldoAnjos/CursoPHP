<?php 

//PDO - PHP Data Object

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "halegria");

$conn -> beginTransaction();

$stmt = $conn -> prepare ("DELETE FROM tb_users WHERE iduser = ?");

$id = 3;

$stmt -> execute(array($id));

// $conn -> rollback(); Cancela a transação

$conn -> commit(); //Confirma a transação

echo "Excluído com sucesso!";

 ?>