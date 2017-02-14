<?php 

// Задача 10:
// Трябва да се напълни цистерна с вода. Имате 2 кофи с вместимост 2 и
// 3 литра и ги ползвате едновременно.
// Да се състави програма, която по даден обем извежда как ще прелеете
// течността с тези кофи, т.е. по-колко пъти ще се пълни всяка от
// кофите.
// Входни данни: естествено число от интервала [10..9999].
// Пример: 107
// Изход: 21 пъти по 2 литра,
//  21 пъти по 3 литра 


	$firstValue = $_GET['firstValue'];
	$firstValue +=0;
	$result = $firstValue / 5;
	$result = (int)$result;
	$balance = $firstValue % 5;

	if (isset($firstValue) && is_int($firstValue) && ($firstValue >= 10 && $firstValue <= 9999)) {

		if ($balance === 1) {
			$result--;
			echo "$result пъти по 2 литра." . '<br>' .
				 "$result пъти по 3 литра." . '<br>' .
				 "Допълнително 2 кофи по 3 литра";
		} elseif ($balance === 2) {
			echo "$result пъти по 2 литра." . '<br>' .
				 "$result пъти по 3 литра." . '<br>' .
				 "Допълнително кофа по $balance литра";
		} elseif ($balance === 3) {
			echo "$result пъти по 2 литра." . '<br>' .
				 "$result пъти по 3 литра." . '<br>' .
				 "Допълнително кофа по $balance литра";
		} elseif ($balance === 4) {
			echo "$result пъти по 2 литра." . '<br>' .
				 "$result пъти по 3 литра." . '<br>' .
				 "Допълнително 2 кофи по ". $balance/2 . " литра";
		} else {
			echo "$result пъти по 2 литра." . '<br>' .
				 "$result пъти по 3 литра." . '<br>';
		}

	} else {
		echo "<h4>Моля, попълнете полетo с правилните данни.</h4>";
	}
?>