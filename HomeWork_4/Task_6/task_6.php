<?php 


$numberArr = array(
	array(11,12,13,14,15,16), 
	array(21,22,23,24,25,26), 
	array(31,32,33,34,35,36),
	array(41,42,43,44,45,46),
	array(51,52,53,54,55,56),
	array(61,62,63,64,65,66)
);

$finalSum = 0;
for ($row=0; $row < count($numberArr) ; $row++) {

	$sumRow = 0;
	for ($col=0; $col <count($numberArr[$row]); $col++) {

		if ($row % 2 != 0) {
			echo $numberArr[$row][$col] . ", ";
			$sumRow += $numberArr[$row][$col];
		}
		
	}
	if ($row % 2 != 0) {
		echo " сума $sumRow <br/>";
		$finalSum += $sumRow;

	}
}
echo "Крайната сума е $finalSum";


?>