<?php 
	$countArr = $_GET['lenght'];
	$countArr+=0;

	$arrNum[0] = $_GET['first'];	
	$arrNum[1] = $_GET['second'];
	$arrNum[2] = $_GET['third'];
	$arrNum[3] = $_GET['fourth'];
	$arrNum[4] = $_GET['fifth'];

	$j=0;
	foreach ($arrNum as  $value) {
		if (empty($value)) {
			continue;
		}else {
			$midArr[$j] = $value;
			$j++;
		}
	}

	if (is_int($countArr) && ($countArr>=1 && $countArr<=5) && ($countArr == count($midArr)) ) {

		$i = 0;
		for ($index= count($midArr)-1; $index >= 0; $index--) { 
			$newArr[$i] = $midArr[$index];
			$i++;
		}

		if ($midArr == $newArr ) {
			echo "Масивът е огледален.";
		} else {
			echo "Масивът не е огледален.";
		}

	} else {
		echo "Моля, въведете правилно данни/ Въведете точната големина на масива.";
	}

?>