<?php 
session_start();

include "connection.php";

//$error = array();
if (isset($_POST['submit'])) {

	if (empty($_POST["slaveName"])) {
		$error[] ="Name is required";
	} else {
		$name = clenup($_POST['slaveName']);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $error[] = "Only letters and white space allowed"; 
		}
	}


	$pstmt = $db->prepare("SELECT name FROM robi;");

	if ($pstmt->execute(array($name))) {

		while ($row = $pstmt->fetch(PDO::FETCH_NUM)) {

			if ($name == $row[0]) {

				 $error[] = "This name already exist"; 

			} 
		}
	}

	if (isset($_POST['tribe'])) {
		$tribe = isset($_POST['tribe']) ? clenup($_POST['tribe']) : "";

		$pstmt = $db->prepare("SELECT id, plemeName FROM pleme;");

		if ($pstmt->execute(array($name))) {

			while ($row = $pstmt->fetch(PDO::FETCH_NUM)) {

				if ($tribe == $row[1]) {

					$tribeId = $row[0];
					
				}
				
			}
		}
	}

	if ($_POST['price']+0 > 0) {
		$price = clenup($_POST['price']);
	} else {
		$error[] = "You must enter price";
	}

	if ($_POST['strawberry']+0 > 0) {
		$strawberry = clenup($_POST['strawberry']);
	} else {
		$error[] = "You must enter price";
	}
	

	if (isset($_FILES['image'])) {
		$fileOnServerName = $_FILES['image']['tmp_name'];
		$fileOriginalName = $_FILES['image']['name'];
			
		if (is_uploaded_file($fileOnServerName)) {
			if (move_uploaded_file($fileOnServerName, 
					'upload/'.$fileOriginalName)) {
			} else {
				$error[] = "The file was not uploaded";
			}
		}
		else {
			$error[] = "The file was not uploaded";
		}
	}

	if (empty($error)) {

		$stmt = $db->prepare("INSERT INTO robi (`id`, `name`, `price`, `strawberry`, `photo`,  `Pleme_id`) VALUES (NULL, ?, ?, ?, ?, ?)");


		$stmt->execute(array($name, $price, $strawberry, $fileOriginalName, $tribeId));

		header("Location:mainpage.php");
		
	} else {
		$_SESSION['error'] = $error;
		header("Location:index.php");
	}
}


?>















<?php 

	include "Database.php";
	include "functions.php";

	if (isset($_POST['name']) && isset($_POST['description'])) {

		$name = clenup($_POST['name']);
		$description = clenup($_POST['description']);


		try {

			$createQuery = "INSERT INTO tasks(name, description, created_at) VALUES(?, ?, now())";

			$pstmt = $db->prepare($createQuery);
			$pstmt->execute(array($name, $description));

			if ($pstmt) {
				echo "Record inserted";
			}


			
		} catch (PDOException $e) {
			
			echo "An error occurred" . $e->getMessage();

		}
		
	}

?>