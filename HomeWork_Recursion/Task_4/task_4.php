<?php 

function triangle($row, $num) {

	if ($row > $num) {
		return;
	}

	for ($col=1; $col <=$row ; $col++) { 
		echo $col . " ";	
	}
	echo "<br/>";

	return triangle($row+1, $num);
}

triangle(1, 9);

?>