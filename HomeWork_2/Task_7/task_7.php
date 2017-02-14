<?php

	$number = $_GET['number'];
	$number+=0;
	$number *= 3;
		
	if (isset($number) && is_numeric($number) && $number > 0) {

		for ($i=3; $i <= $number ; $i++) { 
			if ($i % 3 === 0) {
				echo $i;
				if ($i < $number) {
					echo ", ";
				}
			}
		}
		
	} else {
		echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
	}	
?>
