<?php

	$firstNumber = $_GET['firstNumber'];
	$firstNumber+=0;

	$secondNumber = $_GET['secondNumber'];
	$secondNumber+=0;

	$min = ($firstNumber < $secondNumber) ? $firstNumber : $secondNumber;
	$max = ($firstNumber > $secondNumber) ? $firstNumber : $secondNumber;

	$sum = 0;
	
	if (isset($firstNumber) && is_int($firstNumber) && isset($secondNumber) && is_int($secondNumber)) {

		for ($i=$min; $i <=$max ; $i++) {

				$multiply = $i*$i;

				if ($i === $min) {
					echo " ";
				} else {
					echo ", ";
				}
			
				if ($i % 3 === 0) {
					echo "skip $i";
					continue;
				} else {
					echo $multiply;
				}

				$sum += $multiply;

				if ($sum > 200) {
					break;
				}
		}

	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}
	
?>