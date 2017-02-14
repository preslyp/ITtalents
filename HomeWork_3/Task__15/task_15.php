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

			//$numbersArr = array(7.13, 0.2, 4.9, 5.1, 6.34, 1.12);
			$newArr = array();

			for ($index=0; $index < count($numbersArr); $index++) { 
				
				$numbersArr[$index] = abs($numbersArr[$index]);

			}

			sort($numbersArr);

			for ($index=count($numbersArr)-1; $index >= count($numbersArr) - 3; $index--) { 
				$newArr[$index]  = $numbersArr[$index];
			}

			sort($newArr);

			foreach ($newArr as $value) {
				echo $value . "; ";
			}

		}

	} else {
		echo "Моля, попълнете полето.";
	}

?>