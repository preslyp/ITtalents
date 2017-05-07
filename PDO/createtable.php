<?php 


include_once "Database.php";

$table = "CREATE TABLE IF NOT EXISTS books 
		(
			id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(25) NOT NULL UNIQUE,
			description VARCHAR(255) NOT NULL,
			created_at TIMESTAMP
		)";

try {

	$db->query($table);
	echo "Table created";
	
} catch (PDOException $e) {
	echo "Data base error ".$e->getMessage();
}











 ?>