<?php 

// 1, 1, 2, 3, 5, 8, 13, 21

function fib($num) {

	if ($num<=2) {
		return 1;
	}

	return fib($num-1) + fib($num-2);
}


echo fib(8);




?>