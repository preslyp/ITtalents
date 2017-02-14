<?php 

$number = $_GET['number'];
$newNumber = $number + 1;
$count = 0;


if (isset($number) && is_numeric($number) && ($number >=1 && $number <= 999)) {

	while ($newNumber <=999) {
			
		if ($newNumber % 2 == 0 || $newNumber % 3 == 0 || $newNumber % 5 == 0) {
			$count ++;
			echo $count . ":" . $newNumber;
			if ($count< 10) {
				echo ", ";
			}
		}

		$newNumber++;

		if ($count === 10) {
			break;
		}
	}
	
} else {
	echo "<h4>Моля, попълнете полетата / Въведете правилните данни.</h4>";
}	




?>