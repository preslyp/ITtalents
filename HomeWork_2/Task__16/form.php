<?php

	$firstNumber = $_GET['firstNumber'];
	$firstNumber+=0;

	$secondNumber = $_GET['secondNumber'];
	$secondNumber+=0;

	$min = ($firstNumber < $secondNumber) ? $firstNumber : $secondNumber;
	$max = ($firstNumber > $secondNumber) ? $firstNumber : $secondNumber;

	
	if (!empty($firstNumber) && is_int($firstNumber) && !empty($secondNumber) && is_int($secondNumber) && ($firstNumber >= 10 && $firstNumber <= 5555) && ($secondNumber >= 10 && $secondNumber <= 5555)) {


		for ($i=$max; $i >= $min ; $i--) { 
			 if ($i % 50 === 0) {
			 	echo $i;
			 	if ($i === 50) {
			 		echo ".";
			 	} else {
			 		echo ", ";
			 	}
			 }
		}

		if ($firstNumber && $secondNumber < 50 ) {
			echo "И двете ви числа са по-малки от 50.";
		}

	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}
	
?>