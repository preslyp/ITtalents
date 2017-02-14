<?php 
$numbers = $_GET['number'];
$numbers = str_replace(' ',',', $numbers);
$numbersArr = explode(',', $numbers);
$count = count($numbersArr)-1;
$flag = true;

for ($index=0; $index < $count; $index++) { 

	if ($index % 2 != 0 ) {
		if (($numbersArr[$index] > $numbersArr[$index + 1]) && ($numbersArr[$index] > $numbersArr[$index - 1])) {
			$flag = true;
		}	else {
			$flag = false;
			break;
		}
	}
}

if ($flag) {
	echo "Изпълнява изискванията за зигзагообразна нагоре редица.";
} else {
	echo "Не изпълнява изискванията за зигзагообразна нагоре редица.";
}

?>

