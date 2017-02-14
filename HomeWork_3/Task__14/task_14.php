<?php 

$numArr = array(7.1,8.5,0.2,3.7,0.99,1.4,-3.5,-110,212,341,1.2);
$isNumber = true;

	foreach ($numArr as $value) {
		if (!is_numeric($value)) {
			$isNumber = false;
			echo "Моля, въведете правилните данни.";
			break;
		}
	}

	if ($isNumber) {

		for ($index=0; $index < count($numArr); $index++) { 
			
			if ($numArr[$index]>= -2.99 && $numArr[$index] <= 2.99 ) {
				echo $numArr[$index] . "; ";
			}
		}

	}

?>