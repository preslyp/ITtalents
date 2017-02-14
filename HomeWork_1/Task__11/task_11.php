<?php 

// Задача 11:
// Съставете програма, която по дадено трицифренo число проверява
// дали числото се дели на всяка своя цифра. Във въведеното число да
// няма цифра 0.


	$firstValue = $_GET['firstValue'];
	$firstValue +=0;
	$firstDigit = $firstValue / 100;
	$firstDigit = (int)$firstDigit;
	$secondDigit = $firstValue / 10;
	$secondDigit = (int)$secondDigit;
	$secondDigit %= 10;
	$thirdDigit =  $firstValue % 10;

	if (isset($firstValue) && is_int($firstValue) && ($firstValue >=111 && $firstValue <=999) && !($secondDigit === 0 || $thirdDigit === 0)) {

		if ( ($firstValue % $firstDigit === 0) && ($firstValue % $secondDigit === 0) && ($firstValue % $thirdDigit === 0) ) {

			echo "Числото се дели на цифрите $firstDigit, $secondDigit, $thirdDigit.";

		} else {

			echo "Числото не се дели на цифрите $firstDigit, $secondDigit, $thirdDigit.";

		}

	} else {

		echo "<h4>Моля, попълнете полетo / Въведете правилните данни. </h4>";
	}
?>