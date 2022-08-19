<?php 

$conn = new mysqli("127.0.0.1", "root", "halegria", "dbphp7");

if($conn -> connect_error){
	echo "Error: " . $conn -> connect_error;
}

$stmt = $conn -> prepare("INSERT INTO tb_users (deslogin, dessenha) VALUES (?, ?)");

$stmt -> bind_param("ss", $login, $pass);

// $login = "user";
// $pass = "13245";

// $stmt -> execute();

$login = "root@123";
$pass = "123";

$stmt -> execute();

 ?>