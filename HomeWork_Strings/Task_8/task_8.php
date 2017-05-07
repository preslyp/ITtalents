<?php 

$textOne = $_GET['text'];
$textArr = preg_split('//u', $textOne, -1, PREG_SPLIT_NO_EMPTY);
$revArr = array();

if (!empty($textOne) && is_string($textOne)) {

	for ($index=count($textArr)-1; $index >=0 ; $index--) { 
		$revArr[$index] = $textArr[$index];
	}

	if (array_values($textArr) == array_values($revArr)) {
		echo "Да";
	} else {
		echo "Не";
	}

} else {
	echo "Въведете правилните данни. / Попълнете полетo.";
}
