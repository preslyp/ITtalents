<?php 

	$number = $_GET['number'];
	$numlength = strlen((string)$number);
	$temp = $number;

	$count = 1;
	$digits = 0;
	$newNumber = '';


	if (isset($number) && is_numeric($number) && ($number >=10 && $number <= 30000)) {
		
		while ($count <= $numlength) {
			
			$digits = $temp % 10;
			$temp = $temp / 10;
			$newNumber .=$digits;
			$count++;
		}

		if ($number == $newNumber) {
			echo "Числото е палиндром.";
		} else {
			echo "Числото не е палиндром.";
		}
		
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}	




?>