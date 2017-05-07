<?php 

include_once "Database.php";

$insertQuery = "INSERT INTO books(name, description, created_at) VALUES('Introduction to Java', 'Learn all about Java', now())";


$insertQuery2 = "INSERT INTO books(name, description, created_at) VALUES('Introduction to PHP', 'Learn all about PHP', now())";



try {
	
	$result = $db->exec($insertQuery);
	echo "$result record inserted </br>";

	$result = $db->exec($insertQuery2);
	echo "$result record inserted </br>";

} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>