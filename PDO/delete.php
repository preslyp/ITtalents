<?php 

include_once "Database.php";

$deleteQuery = "DELETE FROM books WHERE id=1";


try {
	
	$result = $db->exec($deleteQuery);
	echo "$result record deleted </br>";

} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>