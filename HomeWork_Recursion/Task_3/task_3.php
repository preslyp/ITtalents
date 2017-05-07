<?php 

function isPrime($num, $div) {

	if ($num < 2) {
        return 0;
    }

    if ($div == 1) {
        return 1;
    } else {
        if ($num % $div == 0) {
            return 0;
        } else {
            return isPrime($num, $div - 1);
        }
    }
}


function isPrime2($num) {

	$prime = isPrime($num, $num-1);

	if ($prime == 1) {
		echo "Просто е.";
	} else {
		echo "Не е просто.";
	}
}

isPrime2(5);

?>


