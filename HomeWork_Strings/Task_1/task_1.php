<?php 


$textOne = $_GET['text1'];
$textTwo = $_GET['text2'];
$isUpper = true;

if (!empty($textOne) && !empty($textTwo) && is_string($textOne) && is_string($textTwo) && (strlen($textOne) <= 40) && (strlen($textTwo) <= 40)) {

	if ((preg_match("/[A-Z]/", $textOne)===0) || (preg_match("/[A-Z]/", $textTwo)===0) ) {
		$isUpper = false;
		echo "Тeкстът трябва да съдържа малки и главни латински букви.";
	}

	if ($isUpper) {
		echo $textOne = mb_strtoupper($textOne, 'UTF-8') . '<br/>';
		echo $textOne = mb_strtolower($textOne, 'UTF-8') . '<br/>';
		echo $textTwo = mb_strtoupper($textTwo, 'UTF-8') . '<br/>';
		echo $textTwo = mb_strtolower($textTwo, 'UTF-8') . '<br/>';
	}

} else {
	echo "Въведете правилните данни. / Попълнете полетата.";
}
