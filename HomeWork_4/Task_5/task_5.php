<?php 


$numberArr = array(
	array(1,2,3,4), 
	array(5,6,7,8), 
	array(9,10,11,12),
	array(13,14,15,16)
);


$maxSumRow = 0;

for ($row=0; $row < count($numberArr) ; $row++) { 

	$rowSum = 0;
	
	for ($col=0; $col <count($numberArr[$row]); $col++) {

		$rowSum += $numberArr[$row][$col];
	}

	if ($rowSum > $maxSumRow) {
		$maxSumRow = $rowSum;
	}
}


$maxSumCol = 0;

for ($col=0; $col < 4 ; $col++) {

	$colSum = 0;

	for ($row=0; $row < count($numberArr); $row++) {

		$colSum += $numberArr[$row][$col];
	}
	
	if ($colSum > $maxSumCol) {
		$maxSumCol = $colSum;
	}
}

echo "Най-голяма сума по редове е $maxSumRow. <br/> Най-голяма сума по колони е $maxSumCol. <br/>";

if ($maxSumRow > $maxSumCol) {
	echo "Максималната сума по редове е > от максималната сума по колони.";
}elseif ($maxSumRow > $maxSumCol) {
	echo "Максималната сума по редове е < от максималната сума по колони.";
} else {
	echo "Максималната сума по редове е = на максималната сума по колони.";
}





?>