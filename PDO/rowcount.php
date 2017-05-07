<?php 

include_once "Database.php";

$updateQuery = "UPDATE books SET 
				name = :name, description = :description 
				WHERE id= :id";


try {

	$statment = $db->prepare($updateQuery);

	$statment->execute(array(":name"=>"Python fro newbies", ":description"=>"Introduction to software deveplopment", ":id"=>5));
	

	echo $statment->rowCount() . " records";

} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}




 ?>