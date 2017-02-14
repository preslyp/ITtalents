<?php 

$numbers = $_GET['text'];
$numbers = str_replace('.', ',', $numbers);
$numbersArr = explode(',', $numbers);
$isNumber = true;
$start = 0;
$lenght = 1;
$maxLenght =0;


if (isset($numbers)) {
	
	foreach ($numbersArr as $v) {
		if (!is_numeric($v)) {
			$isNumber = false;
			echo "Моля, въведете правилните данни.";
			break;
		}
	}

	if ($isNumber) {

		for ($i=1; $i < count($numbersArr) ; $i++) { 
			
			if ($numbersArr[$i -1 ] == $numbersArr[$i]) {
				
				$lenght++;

				if ($lenght > $maxLenght) {

					$maxLenght = $lenght;
					$start = $numbersArr[$i];
				}

			} else {
				$lenght = 1;
			}

		}

		if ($maxLenght == 0) {
			echo "Всички цифри са по една. Няма поредица от еднакви числа. ";
		} else {
			echo "Максималната поредица е: ";
			for ($index=0; $index < $maxLenght ; $index++) { 
				 echo $start . " ";
			}
		}

	}

} else {
		echo "Моля, попълнете полето.";
}

?>