<?php 

include_once "Database.php";

$updateQuery = "UPDATE books SET name = 'Introduction to Java 2' WHERE id=1";


try {
	
	$result = $db->exec($updateQuery);
	echo "$result record updeted </br>";

} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>