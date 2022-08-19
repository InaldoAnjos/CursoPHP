<?php 

$conn = new mysqli("127.0.0.1", "root", "halegria", "dbphp7");

if($conn -> connect_error){
	echo "Error: " . $conn -> connect_error;
}

$result = $conn -> query ("SELECT * FROM tb_users ORDER BY iduser");

$data = array();

while($row = $result -> fetch_assoc()){
	array_push($data, $row);
}

echo json_encode($data);

 ?>