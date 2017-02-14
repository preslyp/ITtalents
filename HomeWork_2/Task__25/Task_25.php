<?php

	$number = $_GET['number'];
	$number+=0;
	$multiply = 1;


	if (isset($number) && is_numeric($number) && $number > 0) {

		do {
			
			$multiply*=$number;
			$number--;

		} while ( $number >= 1);

		echo "Резултатът е: " . $multiply;
		
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}	
?>