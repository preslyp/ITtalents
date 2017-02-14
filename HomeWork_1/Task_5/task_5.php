<?php 

// Задача 5:
// Въведете 3 различни числа от уеб форма и ги разпечатайте в
// низходящ ред.

	$firstValue = $_GET['firstValue'];
	$firstValue = str_replace(',', '.', $firstValue);
	$secondValue = $_GET['secondValue'];
	$secondValue = str_replace(',', '.', $secondValue);
	$thirdValue = $_GET['thirdValue'];
	$thirdValue = str_replace(',', '.', $thirdValue);
	$temp;

	if (isset($firstValue) && isset($secondValue) && isset($thirdValue) && is_numeric($firstValue) && is_numeric($secondValue) && is_numeric($thirdValue)) {

		if ($secondValue > $firstValue) {
			
			$temp = $secondValue;
			$secondValue = $firstValue;
			$firstValue = $temp; 

		}

		if ($thirdValue > $secondValue) { 
			$temp = $thirdValue;
			$thirdValue = $secondValue;
			$secondValue = $temp;

			if ($secondValue > $firstValue) {
			
				$temp = $secondValue;
				$secondValue = $firstValue;
				$firstValue = $temp;

			}
		}

		echo "$firstValue, $secondValue, $thirdValue";
	} else {
		echo "<h4>Моля, попълнете полетата / въведете числo.</h4>";
	}

?>