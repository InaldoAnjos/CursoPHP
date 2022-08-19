<?php 

//PDO - PHP Data Object

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "halegria");


$stmt = $conn -> prepare ("SELECT * FROM tb_users ORDER BY iduser");

$stmt -> execute();

$results =  $stmt -> fetchAll(PDO::FETCH_ASSOC);

// var_dump($results);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ": </strong>" . $value . "<br/>";
	}

	echo "==========================================<br/>";
}

 ?>