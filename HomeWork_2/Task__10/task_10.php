<?php 

$number = $_GET['number'];
$isPrime = true;


if (isset($number) && is_numeric($number) && $number > 1 ) {

	for ($num = 2; $num < $number-1 ; $num++) { 
			
			if ($number % $num == 0) {
				$isPrime = false;
				break;
			}
	}

	if ($isPrime) {
		echo "Числото е просто.";
	} else {
		echo "Числото не е просто.";
	}	
	
} else {
	echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
}	




?>