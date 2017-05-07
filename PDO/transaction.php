<?php 

include_once "Database.php";


try {
	
	// $statment = $db->query("SHOW TABLE STATUS FROM library");
	// var_dump($statment->fetch());

	$name = "My Book";
	$description = "My book description";


	//begin transaction
	$db->beginTransaction();

	$sql1 = "INSERT INTO books(name, description, created_at) VALUES(:name, :description, now())";

	$statment = $db->prepare($sql1);

	$statment->execute(array(":name"=>$name, ":description"=>$description));

	$sql2 = "DELETE FROM books WHERE id= :id";

	$statment = $db->prepare($sql2);

	$statment->execute(array(":id"=>4));

	$db->commit();



} catch (PDOException $e) {

	$db->rollBack();

	echo "An error occured " . $e->getMessage();
	
}




 ?>