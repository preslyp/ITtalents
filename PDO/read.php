<?php 

include_once "Database.php";

$selectQuery = "SELECT * FROM books";


try {
	
	$statment = $db->query($selectQuery);

	while ($row = $statment->fetch(PDO::FETCH_ASSOC)) {
	    echo "Name: ".$row['name'] . " - " . $row['description'] . "</br>";

	    var_dump($row);
	}

} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>