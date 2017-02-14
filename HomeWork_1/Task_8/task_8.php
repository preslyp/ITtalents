<?php

// Задача 8:
// Да се състави програма, която получава от уеб форма 4-цифренo
// естествено число от интервала [1000.. 9999]. От това число се
// формират 2 нови 2-цифрени числа. Първото число се формира от 1-та
// и 4-та цифра на въведеното число. Второто число се формира от 2-рa -
// 3-та цифра на въведеното число. Като резултат да се изведе дали 1-то
// ново число e по-малко <, равно = или по-голямо от 2-то число.
// Пример: 3332 Изход: по-малко (32<33)
// Пример: 1144 Изход: равни (14=14)
// Пример: 9875 Изход: по-голямо (95>87

	$firstNumber = $_GET['firstNumber'];
	$firstNumber+=0;

	$firstDigit = $firstNumber / 1000;
	$lastDigit = $firstNumber % 10;
	$middleDigits = ($firstNumber % 1000) / 10;

	$firstAndLastDigits = (int)$firstDigit . (int)$lastDigit;
	$firstAndLastDigits = (int)$firstAndLastDigits;
	$middleDigits = (int)$middleDigits;
	
	if (isset($firstNumber) && is_int($firstNumber) && ($firstNumber>=1000 && $firstNumber <= 9999)) {

		if ($firstAndLastDigits < $middleDigits) {

			echo "по-малко ($firstAndLastDigits < $middleDigits)";
		}
		elseif ($firstAndLastDigits > $middleDigits) {
			echo "по-голямо ($firstAndLastDigits > $middleDigits)";
		}
		else {
			echo "равни ($firstAndLastDigits = $middleDigits)";	
		}
	}
	else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}
	
?>