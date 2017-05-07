<?php 

$textOne = $_GET['text1'];
$textOne = str_replace(' ', '', $textOne);
$textOneArr = preg_split('//u', $textOne, -1, PREG_SPLIT_NO_EMPTY);

$textTwo = $_GET['text2'];
$textTwo = str_replace(' ', '', $textTwo);
$textTwoArr = preg_split('//u', $textTwo, -1, PREG_SPLIT_NO_EMPTY);

$position = 0;

if (!empty($textOne) && !empty($textTwo)) {

	for ($index=0; $index <count($textOneArr); $index++) {

		echo $textOneArr[$index];

		for ($i=0; $i <count($textTwoArr) ; $i++) { 

			if ($textOneArr[$index] == $textTwoArr[$i]) {
				$position = $i;
				for ($i=$position+1; $i <count($textTwoArr); $i++) { 
					echo $textTwoArr[$i];
				}
			} 

		}
		echo "<br>";		
	}
} else {
	echo "Въведете текст с дължина между 10 и 20 символа. / Попълнете полетата.";
}


?>