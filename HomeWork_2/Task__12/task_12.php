<?php

	for ($numbers=100; $numbers <=999 ; $numbers++) {

		$firstDigit =$numbers / 100;
		$lastDigit = $numbers % 10;
		$middleDigit = ($numbers % 100) / 10;
		$firstDigit = (int)$firstDigit;
		$middleDigit = (int)$middleDigit;

		if ($firstDigit === $middleDigit || $firstDigit === $lastDigit || $middleDigit === $lastDigit) {
			continue;
		} else {
			echo $numbers;
			if ($numbers < 987) {
				echo ", ";
			}
		}
	
	}

	
?>