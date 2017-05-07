<?php 

include_once "Database.php";

$name = "Learn Bootstrap";
$decription = "Front-end responsive freamework";

try {
	//bulis a query
	$insertQuery = "INSERT INTO books(name, description, created_at) VALUES(:book_name, :description, now())";

	//prepared the query
	$statment = $db->prepare($insertQuery);

	//execute the statment 
	$statment->execute(array(":book_name"=>$name, ":description"=>$decription));

	echo "Record created with ID= ". $db->lastInsertId();
	
} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>