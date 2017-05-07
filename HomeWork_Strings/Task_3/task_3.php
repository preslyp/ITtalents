<?php 

$textOne = $_GET['text1'];
$textOne = str_replace(' ', '', $textOne);
$textOneArr = preg_split('//u', $textOne, -1, PREG_SPLIT_NO_EMPTY);

$textTwo = $_GET['text2'];
$textTwo = str_replace(' ', '', $textTwo);
$textTwoArr = preg_split('//u', $textTwo, -1, PREG_SPLIT_NO_EMPTY);

$position = 0;

if (!empty($textOne) && !empty($textTwo)) {

	if (count($textOneArr) == count($textTwoArr)) {

		for ($index=0; $index < count($textOneArr); $index++) { 
		 	
		 	if ($textOneArr[$index] != $textTwoArr[$index]) {
		 		$position = $index;
		 		echo $position . " " . $textOneArr[$index] . "-" . $textTwoArr[$index] . '<br/>';
		 	}
		 	$position = 0;
		}
	} else {
		echo "Двата текста не са с еднаква дължина";
	}
	
} else {
	echo "Въведете текст с дължина между 10 и 20 символа. / Попълнете полетата.";
}


?>