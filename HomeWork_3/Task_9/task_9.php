<?php 
$numbers = $_GET['text'];
$numbers = str_replace('.', ',', $numbers);
$numbersArr = explode(',', $numbers);
$isNumber = true;

if (isset($numbers)) {
	
	foreach ($numbersArr as $v) {
		if (!is_numeric($v)) {
			$isNumber = false;
			echo "Моля, въведете правилните данни.";
			break;
		}
	}

	if ($isNumber) {

		$newArr = array();
		$count = 0;

		for ($index=count($numbersArr) - 1; $index >= 0 ; $index--) { 

			$newArr[$count] = $numbersArr[$index];
			$count++;

		}

		echo "Първи начин: ";
		foreach ($newArr as $value) {
			echo $value . " ";
		}

		echo '<br/>';

		rsort($numbersArr);
		echo "Втори начин: ";
		foreach ($numbersArr as $value) {
			echo $value . " ";
		}
	}

} else {
		echo "Моля, попълнете полето.";
}

?>