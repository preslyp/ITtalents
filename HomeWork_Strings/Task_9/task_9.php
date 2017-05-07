<?php 

$textOne = $_GET['text'];
preg_match_all("/-?[0-9]+/", $textOne, $newArr);
$sum = 0;

if (!empty($textOne) && is_string($textOne)) {

	for ($row=0; $row < count($newArr) ; $row++) { 
		for ($col=0; $col <count($newArr[$row])  ; $col++) { 
			echo $newArr[$row][$col] . '<br/>';
			$sum +=$newArr[$row][$col];
		}
	}

	echo "Сума = " . $sum;

} else {
	echo "Въведете правилните данни. / Попълнете полетo.";
}
