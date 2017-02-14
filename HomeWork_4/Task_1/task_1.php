<?php 

$numberArr = array(
	array(48,72,13,14,15), 
	array(21,22,53,24,75), 
	array(31,57,33,34,35),
	array(41,95,43,44,45),
	array(59,52,53,54,55),
	array(59,52,53,54,55) 
);

$minValue = 10000;
$maxValue = -10000;

for ($row=0; $row < count($numberArr) ; $row++) { 
	for ($col=0; $col < count($numberArr[$row]) ; $col++) {

		if ( $numberArr[$row][$col] < $minValue) {
			$minValue = $numberArr[$row][$col];
		}

		if ($maxValue < $numberArr[$row][$col]) {
			$maxValue = $numberArr[$row][$col];
		}

	}
}

echo "Минималната стойност е $minValue. <br/> Максималната е $maxValue.";

?>