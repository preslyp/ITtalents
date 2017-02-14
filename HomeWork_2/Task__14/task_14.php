<?php
	
	$number = $_GET['number'];
	$number+=0;

	if (isset($number) && is_int($number) && ($number>=10 && $number <= 200)) {

		for ($i=$number; $i >=1 ; $i--) {

			if ($i % 7 === 0) {
				echo $i;
				if ($i === 7) {
					echo "";
				} else {
					echo ", ";
				}
			}
	
		}
		
	}
	else {
		echo "<h4>Моля, попълнете полето / Въведете правилните данни.</h4>";
	}
	
?>