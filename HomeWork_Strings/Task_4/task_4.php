<?php 


$textOne = $_GET['text'];
$texgtArr = explode(',', $textOne);

$firstStrArr = str_split($texgtArr[0]);
$secondStrArr = str_split($texgtArr[1]);

$sum1 = 0;
$sum2 = 0;

if (!empty($textOne) && is_string($textOne)) {

	for ($index=0; $index <count($firstStrArr) ; $index++) { 
		$sum1+= ord($firstStrArr[$index]);
	}

	for ($index=0; $index <count($secondStrArr) ; $index++) { 
		$sum2+= ord($secondStrArr[$index]);
	}

	if ($sum1 > $sum2) {
		echo $texgtArr[0];
	} elseif ($sum1 < $sum2) {
		echo $texgtArr[1];
	} else {
		echo $texgtArr[0] . " " . $texgtArr[1];
	}

} else {
	echo "Въведете правилните данни. / Попълнете полетo.";
}
