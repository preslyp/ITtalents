<?php 

	$number = $_GET['number'];
	$number+=0;


	if (isset($number) && is_numeric($number) && ($number>= 10 && $number <= 99)) {
		
		for ($i=$number; $i >=-2 ; $i--) { 
			if ($number % 2 !=0) {
		 		$number = (3 * $number) + 1;
			} else {
				$number = ($number * 0.5);
			}
			echo $number . " ";

			if ($number == 1) {
				break;
			}
		}

	} else {
		echo "<h4>Моля, попълнете полето / Въведете правилните данни.</h4>";
	}

?>