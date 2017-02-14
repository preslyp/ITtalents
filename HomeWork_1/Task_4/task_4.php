<?php 

// Задача 4:
// Въведете 2 различни числа от уеб форма и ги разпечатайте в
// нарастващ ред.


	$firstValue = $_GET['firstValue'];
	$firstValue = str_replace(',', '.', $firstValue);
	$secondValue = $_GET['secondValue'];
	$secondValue = str_replace(',', '.', $secondValue);

	if (isset($firstValue) && isset($secondValue)  && is_numeric($firstValue) && is_numeric($secondValue)) {
			
		if ($firstValue > $secondValue) {

			echo "$secondValue, $firstValue";

		} elseif ($firstValue < $secondValue) {

			echo "$firstValue, $secondValue";

		} else {

			echo "<h4>Двете числа са равни.</h4>";
			
		}

	} else {
		echo "<h4>Моля, попълнете полетата с правилните данни.</h4>";
	}
?>