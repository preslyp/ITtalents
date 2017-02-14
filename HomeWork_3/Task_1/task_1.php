<?php 

$numbers = $_GET['text'];
$arrNum = explode(',', $numbers);
$minValue = 10000;
$isNumber = true;

	if (isset($numbers)) {
		
		foreach ($arrNum as $v) {
			if (!is_numeric($v)) {
				$isNumber = false;
				echo "Моля, въведете правилните данни.";
				break;
			}
		}

		if ($isNumber) {

			for ($index = 0; $index < count($arrNum); $index++) {
				
				if ( $arrNum[$index] % 3 == 0 && $arrNum[$index] < $minValue  ) {
					
						$minValue = $arrNum[$index];
						
				}
			}
			echo $minValue;
		}

	} else {
			echo "Моля, попълнете полето.";
	}

?>