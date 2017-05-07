<?php 

$textOne = $_GET['text'];

$firstStrArr = str_split($textOne);
$secondStrArr = array();

if (!empty($textOne) && is_string($textOne)) {

	for ($index=0; $index <count($firstStrArr) ; $index++) {
		$secondStrArr[$index] =ord($firstStrArr[$index]) + 5;
	}
	
	foreach ($secondStrArr as $value) {
		echo chr($value);
	}

} else {
	echo "Въведете правилните данни. / Попълнете полетo.";
}
