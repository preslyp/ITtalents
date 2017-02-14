<?php 

$numberArr = array(
	array(1,2,3,4), 
	array(5,6,7,8), 
	array(9,10,11,12),
	array(13,14,15,16)
);

$cows = 4;

for ($col=0; $col < $cows ; $col++) { 
	for ($row=count($numberArr)-1; $row >= 0; $row--) { 

		echo $numberArr[$row][$col] . " ";
		
	}
	echo "<br/>";
}

?>