<?php 


$firtstNumbers = $_GET['first'];
$firtstNumbers = str_replace('.', ',', $firtstNumbers);
$firstArr = explode(',', $firtstNumbers);

$secondNumbers = $_GET['second'];
$secondNumbers = str_replace('.', ',', $secondNumbers);
$secondArr =explode(',', $secondNumbers);

$thirdArr = array();

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

		for ($i=0, $j =0; $i < count($firstArr), $j < count($firstArr); $i++, $j++) { 
			
			$thirdArr[$i] = ($firstArr[$i] > $secondArr[$j]) ? $firstArr[$i] : $secondArr[$j];

		}

		foreach ($thirdArr as $value) {
			echo $value . "; ";
		}
	}

} else {
	echo "Моля, попълнете полетата.";
}


?>

