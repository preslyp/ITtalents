<?php 

include_once "Database.php";

$name = "PHP PDO 3";
$decription = "Bild a basic tasks list 3";

try {
	//bulis a query
	$insertQuery = "INSERT INTO books(name, description, created_at) VALUES(:book_name, :description, now())";

	//prepared the query
	$statment = $db->prepare($insertQuery);

	//execute the statment 
	$statment->execute(array(":book_name"=>$name, ":description"=>$decription));

	echo "Record created";
	
} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>