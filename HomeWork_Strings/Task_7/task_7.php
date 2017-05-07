<?php 

$textOne = $_GET['text'];

if (!empty($textOne) && is_string($textOne)) {

	$textOne = str_replace(',', " ", $textOne);
	$textArr = explode(" ", $textOne);

	$max = strlen($textArr[0]);

	for ($index=0; $index < count($textArr); $index++) { 
		
		if ($max < strlen($textArr[$index])) {

			$max = strlen($textArr[$index]);

		}
	}

	echo count($textArr)  . " думи," . " най-дългата съдържа " . $max . " символа.";

} else {
	echo "Въведете правилните данни. / Попълнете полетo.";
}
