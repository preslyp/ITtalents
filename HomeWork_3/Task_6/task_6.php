<?php

$firtstNumbers = $_GET['first'];
$firtstNumbers = str_replace('.', ',', $firtstNumbers);
$firstArr = explode(',', $firtstNumbers);

$secondNumbers = $_GET['second'];
$secondNumbers = str_replace('.', ',', $secondNumbers);
$secondArr =explode(',', $secondNumbers);

$isNumber = true;


if (!empty($firtstNumbers) && !empty($secondNumbers)) {

	foreach ($firstArr as $v) {
		if (!is_numeric($v)) {
			$isNumber = false;
			echo "Моля, въведете правилните данни.";
			break;
		}
	}

	foreach ($secondArr as $v) {
		if (!is_numeric($v)) {
			$isNumber = false;
			echo "Моля, въведете правилните данни.";
			break;
		}
	}

	if ($isNumber) {

		if ($firstArr === $secondArr) {
			echo "Масивите са еднакви. <br/>";
		} else {
			echo "Масивите са различни. <br/>";
		}

		if (count($firstArr) === count($secondArr)) {
			echo "Масивите имат еднакъв размер.";
		} else {
			echo "Масивите нямат еднакъв размер.";
		}
		
	}

} else {
	echo "Моля, попълнете полетата.";
}

?>