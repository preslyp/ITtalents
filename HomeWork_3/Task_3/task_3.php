<?php 

	$number = $_GET['number'];
	$number = str_replace(',','.', $number);
	
	if (isset($number) && is_numeric($number)) {

		$i = 0;
		$k = 1;

		$newArr[$i] = $number;
		$newArr[$k] = $number;

		for ($index=2; $index < 10 ; $index++) { 
			$newArr[$index] = $newArr[$i] + $newArr[$k];
			$i++;
			$k++;
		}

		foreach ($newArr as $value) {
			echo $value . " ";
		}

	} else {
		echo "Въведете правилните данни.";
	}


?>