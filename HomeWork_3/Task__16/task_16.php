<?php 

$numArr = array(-1.12, -2.43, 3.1, 4.2, 0, 6.4,-7.5, 8.6, 9.1, -4);
$isNumber = true;

foreach ($numArr as $v) {
	if (!is_numeric($v)) {
		$isNumber = false;
		echo "Моля, въведете правилните данни.";
		break;
	}
}

if ($isNumber) {

	echo "Първоначален масив: ";

	foreach ($numArr as $value) {
		echo $value . "; ";
	}

	echo '<br/>';

	for ($index=0; $index < count($numArr) ; $index++) { 

		if ($numArr[$index] < -0.231) {
		
			$numArr[$index] = $index * $index + 41.25;

		} else {
			$numArr[$index] = $numArr[$index] * $index;

		}

	}

	echo "Новообразуван масив: ";

	$sum = 0;
	$count = 0;

	foreach ($numArr as $value) {
		echo $value . "; ";

		if ($value != 0) {
			$sum += $value;
			$count++;
		}
	}

	echo '<br/>';

	$averageNum = $sum / $count;

	echo "Средната сума на числата по-големи от 0 е $averageNum";
}

?>