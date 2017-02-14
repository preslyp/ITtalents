<?php

	$sum = $_GET['number'];
	$sum+=0;

	if (isset($sum) && is_int($sum) && ($sum>=2 && $sum <= 27)) {

		for ($numbers=100; $numbers <=999 ; $numbers++) {

			$firstDigit =$numbers / 100;
			$lastDigit = $numbers % 10;
			$middleDigit = ($numbers % 100) / 10;
			$firstDigit = (int)$firstDigit;
			$middleDigit = (int)$middleDigit;

			if (($firstDigit + $middleDigit + $lastDigit) === $sum) {
				echo $numbers . ", ";

			} else {
				continue;
			}
		
		}
		
	}
	else {
		echo "<h4>Моля, попълнете полето / Въведете правилните данни.</h4>";
	}

	
?>