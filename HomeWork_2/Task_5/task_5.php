<?php

	$firstNumber = $_GET['firstNumber'];
	$firstNumber+=0;

	$secondNumber = $_GET['secondNumber'];
	$secondNumber+=0;

	$min = ($firstNumber < $secondNumber) ? $firstNumber : $secondNumber;
	$max = ($firstNumber > $secondNumber) ? $firstNumber : $secondNumber;

	
	if (!empty($firstNumber) && is_int($firstNumber) && !empty($secondNumber) && is_int($secondNumber)) {

		for ($i = $min; $i <= $max ; $i++) { 
			
			echo $i . '&nbsp;';
		}

		
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}
	
?>