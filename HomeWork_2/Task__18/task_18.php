<?php 

	$firstNumber = $_GET['firstnumber'];
	$firstNumber+=0;

	$secondNumber = $_GET['secondnumber'];
	$secondNumber+=0;

	if (isset($firstNumber) && isset($secondNumber) && is_numeric($firstNumber) && is_numeric($secondNumber) && ($firstNumber>= 1 && $firstNumber <= 9) && ($firstNumber>= 1 && $firstNumber <= 9)) {

		
		for ($rows = 1; $rows <= $firstNumber ; $rows++) { 

			for ($cols = 1; $cols <= $secondNumber; $cols++) { 
				echo $rows . "*" . $cols . "=" . $rows*$cols . '<br/>';
			}
		}

	} else {
		echo "<h4>Моля, попълнете полето / Въведете правилните данни.</h4>";
	}

?>
