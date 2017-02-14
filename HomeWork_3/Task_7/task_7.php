<?php 

$numbers = $_GET['text'];
$numbers = str_replace('.', ',', $numbers);
$firstArr = explode(',', $numbers);
$count = count($firstArr);
$secondArr = array();
$isNumber = true;

if (isset($numbers)) {
	
	foreach ($firstArr as $v) {
		if (!is_numeric($v)) {
			$isNumber = false;
			echo "Моля, въведете правилните данни.";
			break;
		}
	}

	if ($isNumber) {

		for ($index=0; $index < $count; $index++) { 

			if ($firstArr[$index] == $firstArr[0] ) {
				
				$secondArr[$index] = $firstArr[$index+1];

			} elseif ( $firstArr[$index] == $firstArr[$count - 1]) {
				
				$secondArr[$index] = $firstArr[$index-1];

			} else {
				
				$secondArr[$index] = $firstArr[$index+1] + $firstArr[$index-1];
			}

		}

	}

	echo "Въведеният масив е: ";
	foreach ($firstArr as $value) {
		echo $value . " ";
	}

	echo "<br/>";

	echo "Новият масив е: ";
	foreach ($secondArr as $value) {
		echo $value . " ";
	}

} else {
		echo "Моля, попълнете полето.";
}


?>