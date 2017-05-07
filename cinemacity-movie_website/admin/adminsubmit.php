<?php 
session_start();

include "../functions.php";

$adminUsername = isset($_POST['adminUsername']) ? check_input($_POST['adminUsername']) : "";
$adminPassword = isset($_POST['adminPassword']) ? check_input($_POST['adminPassword']) : "";

if ( strlen($adminUsername) > 3 && strlen($adminPassword) > 3) {

	$adminPassword = md5($adminPassword);

	$text = file("../db/db_users/users.txt");

	foreach ($text as $value) {
		$tmp = explode("#",$value);
		array_pop($tmp);

		foreach ($tmp as $v) {
			$tmp2 = explode(":",$v);

			if ($tmp2[0]=="username") {
				$username = $tmp2[1];
			}

			if ($tmp2[0]=="password") {
				$password = $tmp2[1];
			}
		    				
			if ($adminUsername === $username && $adminPassword === $password) {

				$_SESSION['is_logged']=true;
				header("Location:index.php");
			}
		}
	} 
}else {
	header("Location:404.php");
}

?>