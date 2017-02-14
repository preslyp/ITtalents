<?php 

// Задача 6:
// Въведете 3 числа от уеб форма - а1, а2 и а3. Разменете стойностите им
// така, че а1 да има стойността на а2, а2 да има стойността на а3, а а3
// да има старата стойност на а1.


	$firstValue = $_GET['firstValue'];
	$firstValue = str_replace(',', '.', $firstValue);
	$secondValue = $_GET['secondValue'];
	$secondValue = str_replace(',', '.', $secondValue);
	$thirdValue = $_GET['thirdValue'];	
	$thirdValue = str_replace(',', '.', $thirdValue);
	$temp;


	if (isset($firstValue) && isset($secondValue) && isset($thirdValue) && is_numeric($firstValue) && is_numeric($secondValue) && is_numeric($thirdValue)) {

		$temp = $firstValue; 
		$firstValue = $secondValue;
		$secondValue = $thirdValue;
		$thirdValue = $temp;

		echo "a1 = $firstValue" . '<br>' . "a2 = $secondValue" . '<br>' . "a3 = $thirdValue";

	} else {

		echo "<h4>Моля, попълнете полетата / Въведете число.</h4>";

	}

?>