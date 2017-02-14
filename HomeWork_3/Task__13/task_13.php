<?php 

$number = $_GET['number']; 
$binNum = '';

if (isset($number) && is_numeric($number)) {

	while ($number > 0) {

		$binNum = $number % 2 . $binNum;
		$number = (int)$number / 2;
	}

	$binArr = str_split($binNum);

	foreach ($binArr as $value){
		echo $value . " ";
	}

} else {
	echo "Моля, попълнете полето, въведете правилните данни.";
}

?>

