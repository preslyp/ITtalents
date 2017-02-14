<?php

	$number = $_GET['number'];
	$number+=0;
	$i = 1;
	$sum = 0;
	
	if (isset($number) && is_numeric($number)) {

		if ($number < 0) {

			while ($i >= $number) {
				$sum += $number;
				$number++;
			}
			
		} else {

			while ($i <= $number) {
				$sum += $i;
				$i++;
			}
		}

		echo "Резултатът е: $sum";
		
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}	
?>
