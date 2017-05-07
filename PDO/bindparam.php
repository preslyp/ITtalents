<?php 

include_once "Database.php";


try {
	
	//prepared the query
	$statment = $db->prepare("INSERT INTO books(name, description, created_at) VALUES(:name, :description, now())");

	//execute the statment 
	$statment->bindParam(":name", $name);
	$statment->bindParam(":description", $description);

	//first record
	$name = "Objects and Patterns";
	$description = "Software crafting";
	$statment->execute();

	//second record
	$name = "Complite SQL";
	$description = "Structured Query Language";
	$statment->execute();

	//third record
	$name = "Complete UML";
	$description = "Learn Software Model";
	$statment->execute();



	echo "Record created";
	
} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>