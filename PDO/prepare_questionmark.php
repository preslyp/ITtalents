<?php 

include_once "Database.php";

$name = "PHP PDO 2";
$decription = "Bild a basic tasks list 2";

try {
	//bulis a query
	$insertQuery = "INSERT INTO books(name, description, created_at) VALUES(?, ?, now())";

	//prepared the query
	$statment = $db->prepare($insertQuery);

	//execute the statment 
	$statment->execute(array($name, $decription));

	echo "Record created";
	
} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>