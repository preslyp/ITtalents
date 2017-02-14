<?php 
$numbers = $_GET['text'];
$firstArr = explode(',', $numbers);
$secondArr = array();
$isNumber = true;

	if (isset($numbers)) {
		
		foreach ($firstArr as $value) {
			if (!is_numeric($value)) {
				$isNumber = false;
				echo "Моля, въведете правилните данни.";
				break;
			}
		}

		if ($isNumber) {

			$secondArr = array_reverse($firstArr);
			$result = array_merge($firstArr, $secondArr);

			echo "Новото число е: ";

			foreach ($result as $value) {
				echo $value . " ";
			}

		}

	} else {
			echo "Моля, попълнете полето.";
	}


?>