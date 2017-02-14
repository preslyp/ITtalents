<?php 

$numbers = $_GET['number'];
$numbers = str_replace(' ',',', $numbers);
$numbersArr = explode(',', $numbers);
$isNumber = true;

if (!empty($numbers)) {

	foreach ($numbersArr as $value) {
		
		if (!is_numeric($value) || count($numbersArr) != 7) {
			$isNumber = false;
			echo "Въвели сте невалидни данни.";
			break;

		}
	}

	if ($isNumber) {

		$sum = 0;
		 
		foreach ($numbersArr as $value){
		    $sum += $value;
		}
		 
		$averageNumber = round($sum / 7);

		$minDifference = abs($numbersArr[0] - $averageNumber);
		 
		 
		for($index = 1; $index < count($numbersArr); $index++){
		    
		    $difference = abs($numbersArr[$index] - $averageNumber);
		   
		    if ($difference < $minDifference){
		        $minDifference = $difference;
		        $number = $index;
		    }
		}
			 
		echo "Средното число е " . $averageNumber . "<br/>" . "Най-близкото число е $numbersArr[$number]";
	}
} else {
	echo "Моля, попълнете полето.";
}

?>