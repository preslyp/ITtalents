<?php

	$number = $_GET['number'];
	$number+=0;
	$sum = 0;
	
	if (!empty($number) && is_numeric($number)) {

		if ($number <=0) {	

			for ($i = $number; $i <= 1; $i++) {
				 $sum += $i;				 
			}

		} else {

			for ($i = 1; $i <= $number; $i++) { 
				$sum += $i;
			}

		}

		echo "Резултатът е: $sum";
		
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}	
?>
