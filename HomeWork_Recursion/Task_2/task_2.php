<?php 

function multiply($x, $y) { //4,5

	if ($x == 0 || $y == 0) {
		return 0;
	}

	if ($x == 1) {
		return $y;
	}

	return multiply($x-1, $y) + $y;
}

echo multiply(4,5);

?>