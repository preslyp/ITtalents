<?php 

// Задача 3:
// Създайте 2 променливи с различни стойности в даден PHP скрипт.
// Измислете начин програмно да размените стойностите им.
// Разпечатайте новите стойности.


	$firstValue = $_GET['firstValue'];
	$secondValue = $_GET['secondValue'];
	$temp;

	if (!empty($firstValue) && !empty($secondValue)) {

		$temp = $secondValue;
		$secondValue = $firstValue;
		$firstValue = $temp;
		echo "A = $firstValue" . '<br>' . "B = $secondValue";
	} else {

		echo "<h4>Моля, попълнете полетата.</h4>";

	}

?>