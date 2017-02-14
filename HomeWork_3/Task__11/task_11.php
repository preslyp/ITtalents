<?php 

$numbers = $_GET['number'];
$numbers = str_replace(' ',',', $numbers);
$numbersArr = explode(',', $numbers);
$isNumber = true;

if (!empty($numbers)) {

	foreach ($numbersArr as $value) {
		
		if (!is_numeric($value) || count($numbersArr) != 7) {
			$isNumber = false;
			echo "Въвели сте невалидни данни.";
			break;

		}
	}

	if ($isNumber) {

		$count = 0;

		foreach ($numbersArr as $value) {
			
			if ($value % 5 == 0 &&  $value > 5) {
				$count++;
				echo $value . ", ";
			}
			
		}
		echo "$count числа.";
	}

} else {
	echo "Моля, попълнете полето.";
}









?>