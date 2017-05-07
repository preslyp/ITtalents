<?php 
try {

	$db = new PDO("mysql:host=localhost;dbname=library", "root", "");

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//echo "connection succesful";
	
} catch (PDOException $e) {

	echo "Data base error ".$e->getMessage();
	
}















?>