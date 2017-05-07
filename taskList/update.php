<?php 

include "Database.php";
include "functions.php";

if (isset($_POST['name']) && isset($_POST['id'])) {

	$name = clenup($_POST['name']);
	$id = $_POST['id'];


	try {

		$updateQuery = "UPDATE tasks SET name= :name WHERE id=:id";

		$pstmt = $db->prepare($updateQuery);
		$pstmt->execute(array(":name"=>$name, ":id"=>$id));

		if ($pstmt->rowCount()===1) {
			echo "Task name updated successfully";
		} else {
			echo "No changes made";
		}
		
	} catch (PDOException $e) {
		
		echo "An error occurred" . $e->getMessage();

	}
	
} elseif (isset($_POST['description']) && isset($_POST['id'])) {

	$description = clenup($_POST['description']);
	$id = $_POST['id'];


	try {

		$updateQuery = "UPDATE tasks SET description= :description WHERE id=:id";

		$pstmt = $db->prepare($updateQuery);
		$pstmt->execute(array(":description"=>$description, ":id"=>$id));

		if ($pstmt->rowCount()===1) {
			echo "Task description updated successfully";
		} else {
			echo "No changes made";
		}
		
	} catch (PDOException $e) {
		
		echo "An error occurred" . $e->getMessage();

	}
	
} elseif (isset($_POST['status']) && isset($_POST['id'])) {

	$status = clenup($_POST['status']);
	$id = $_POST['id'];


	try {

		$updateQuery = "UPDATE tasks SET status= :status WHERE id=:id";

		$pstmt = $db->prepare($updateQuery);
		$pstmt->execute(array(":status"=>$status, ":id"=>$id));

		if ($pstmt->rowCount()===1) {
			echo "Task status updated successfully";
		} else {
			echo "No changes made";
		}
		
	} catch (PDOException $e) {
		
		echo "An error occurred" . $e->getMessage();

	}
	
}


?>