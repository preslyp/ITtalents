<?php 

// Задача 9:
// Да се състави програма, която получва от уеб форма 2 естествени
// двуцифрени числа a,b.
// Програмата да изведе съобщение дали последната цифра от
// произведението на двете числа е четна, както и самата цифра.
// Входни данни: a,b - естествени числа от интервала [10..99].
// Пример: 15, 25
// Изход: 375, 5 нечетна



	$firstValue = $_GET['firstValue'];
	$firstValue+=0;
	$secondValue = $_GET['secondValue'];
	$secondValue+=0;

	
	if (isset($firstValue) && isset($secondValue) && is_int($firstValue) && ($firstValue >= 10 && $firstValue <= 99 && $secondValue >= 10 && $secondValue <= 99)) {

		$result = $firstValue * $secondValue;
		$digit = $result % 10;

		if ($digit % 2 != 0) {
			echo "$result, $digit нечетна";
		} else {
			echo "$result, $digit четна ";
		}

	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}

?>