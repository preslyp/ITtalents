<?php 

$numberArr = array(
	array(1,4,6,3), 
	array(5,9,7,2), 
	array(4,8,1,9),
	array(2,3,4,5)
);


for ($row=0; $row < count($numberArr) ; $row++) { 

		echo $numberArr[$row][$row];

}

echo "<br/>";

for ($row=0; $row < count($numberArr); $row++) { 

		echo $numberArr[$row][count($numberArr[$row])-($row+1)];

}



?>