<?php 

$numberArr = array(
	array(48,72,13,14,15), 
	array(21,22,53,24,75), 
	array(31,57,33,34,35),
	array(41,95,43,44,45),
	array(59,52,53,54,55),
	array(59,52,53,54,55) 
);

$sum = 0;
$counter=0;

for ($row=0; $row <count($numberArr) ; $row++) { 
	for ($col=0; $col <count($numberArr[$row]) ; $col++) { 
		$sum+=$numberArr[$row][$col];
		$counter++;
	}
}

$averageNumber = $sum/$counter;

echo "Сумата от елементите на масива е $sum. <br/> Средноаритметичното число е $averageNumber.";

?>