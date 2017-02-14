<?php 

$numbers = $_GET['number'];
$numbers = str_replace(' ',',', $numbers);
$numbersArr = explode(',', $numbers);
$isNumber = true;

	if (!empty($numbers)) {

		foreach ($numbersArr as $value) {
			
			if (!is_numeric($value) || count($numbersArr) != 7) {
				$isNumber = false;
				echo "Моля, въведете правилните данни.";
				break;
			}
		}

		if ($isNumber) {

			foreach ($numbersArr as $value) {

				echo $value. " ";

			}
			echo '<br/>';

			//С една променлива
			$temp;
			$temp = $numbersArr[0];
			$numbersArr[0] = $numbersArr[1];
			$numbersArr[1] = $temp;

			// със събиране
			$numbersArr[3] = $numbersArr[2] + $numbersArr[3];
			$numbersArr[2] = $numbersArr[3] - $numbersArr[2];
			$numbersArr[3] = $numbersArr[3] - $numbersArr[2];

			// с умножение
			$numbersArr[5] = $numbersArr[4] * $numbersArr[5];
			$numbersArr[4] = $numbersArr[5] / $numbersArr[4];
			$numbersArr[5] = $numbersArr[5] / $numbersArr[4];


			foreach ($numbersArr as $value) {

				echo $value. " ";

			}
		}

	} else {
		echo "Моля, попълнете полето.";
	}

?>