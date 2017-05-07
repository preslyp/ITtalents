<?php 

	include "Database.php";

	if (isset($_POST['id'])) {

		$id = $_POST['id'];
		
		try {

			$deleteQuery = "DELETE FROM tasks WHERE id=:id";

			$pstmt = $db->prepare($deleteQuery);
			$pstmt->execute(array(":id"=>$id));

			if ($pstmt) {
				echo "Record deleted";
			}


			
		} catch (PDOException $e) {
			
			echo "An error occurred" . $e->getMessage();

		}
		
	}

?>