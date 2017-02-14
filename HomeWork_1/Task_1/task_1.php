<?php

// Да се изведе форма към потребителя и да се въведат от нея 3 числа A,
// В и С (може да са с плаваща запетая).
// Да се изведе подходящо съобщение за това дали C е между A и B.


	$firstValue = $_GET['firstValue'];
	$secondValue = $_GET['secondValue'];
	$thirdValue = $_GET['thirdValue'];

	if (isset($firstValue) && isset($secondValue) && isset($thirdValue) && is_numeric($firstValue) && is_numeric($secondValue) && is_numeric($thirdValue)) {

		$result = "A: <br/> $firstValue<br/> B: <br/>$secondValue <br/> C: <br/> $thirdValue <br/> ";
			
		if (($thirdValue > $firstValue && $thirdValue < $secondValue) || ($firstValue > $thirdValue && $thirdValue > $secondValue)) {

			echo $result;
			echo "Числото $thirdValue е между $firstValue и $secondValue.";

		} else {
			echo $result;
			echo "Числото $thirdValue не е между $firstValue и $secondValue.";
		}
		
	} else {
		echo "Моля, попълнете полетата с число.";
	}
?>